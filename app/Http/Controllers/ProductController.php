<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\AdminProduct;
use App\Order;


class ProductController extends Controller
{
    public function show(){
        $product=Product::latest()->paginate(3);
        return view('show_shop',compact('product')) ;
    }
    public function cart2(){

        return view('cart2') ;
    }
    public function del($id){
        session()->forget('id');
    }

    public function co($id){
        $product=Product::find($id);
        $adminproduct=AdminProduct::find($id);
       $latest=Product::latest()->paginate(3);
       //return($product->colors);
        return view('co_product',compact('product','adminproduct'),compact('latest'));
    }
    

        public function addtocart($id){
        $product = Product::find($id);
            if(!auth()->user()) {
             $price= $product->customerprice;
            }
            elseif(auth()->user()->branch==1){
                $price= $product->branchprice;
            }
            else{
                $price= $product->customerprice;
            }

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $price,
                        "image" => $product->image1
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" =>  $price,
            "image" => $product->image1
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout') ;
    }
    
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
     public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function save() {
        foreach (session('cart') as $details) {
            
            Order::create([
                'name' => $details['name'],
                'qty' => $details['quantity'],
            ]);
        }
        
    }
    
     public function test(){
        return view('test');
    }
    public function test2(){
        return view('test');
    }
    
    public function pay(){
        return view('request');
    }
    
    
}
