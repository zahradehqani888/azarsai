<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminProduct;
use App\Product;
use App\Color;
use App\ColorProduct;
use Illuminate\Support\Carbon;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected $MerchantID = ''; //Required
    
    public function add(){
        $colors=Color::all();
        return view('add_product',compact('colors')) ;
    }
    
    public function add2(Request $request){
        
        $this->validate($request,[
           'image1'=>'required|mimes:jpg,jpeg,png',
            'name'=>'required',
            'storage'=>'required',
            'color'=>'required',
            'customerprice'=>'required',
            'branchprice'=>'required',
            'image1'=>'required'
             ],
                [
                    'name.required'=>'نام محصول را وارد کنید.',
                    'storage.required'=>'ظرفیت محصول را وارد کنید.',
                    'color.required'=>'رنگ را انتخاب کنید.',
                    'customerprice.required'=>'قیمت مشتری  را وارد کنید.',
                    'branchprice.required'=>'قیمت نمایندگی  را وارد کنید.',
                    'image1.required'=>'عکس اصلی را آپلود کنید.',
                    'image1.mimes'=>'فرمت عکس قابل قبول نیست.',
                ]
        );
        
        $image2_name='noimage.jpg';
        $image3_name='noimage.jpg';
        $image4_name='noimage.jpg';
        
       $file1= request()->file('image1');
       $image1_path='assets/images/productsimages';
      $image1_name= $file1->getClientOriginalName();
      $file1->move(public_path($image1_path),$image1_name);
      
      if((request()->file('image2'))!=null):
      $file2= request()->file('image2');
       $image2_path='assets/images/productsimages';
      $image2_name= $file2->getClientOriginalName();
      $file2->move(public_path($image2_path),$image2_name);
      endif;
      
      if((request()->file('image3'))!=null):
      $file3= request()->file('image3');
       $image3_path='assets/images/productsimages';
      $image3_name= $file3->getClientOriginalName();
      $file3->move(public_path($image3_path),$image3_name);
      endif;
      
      if((request()->file('image4'))!=null):
      $file4= request()->file('image4');
       $image4_path='assets/images/productsimages';
      $image4_name= $file4->getClientOriginalName();
      $file4->move(public_path($image4_path),$image4_name);
      endif;
      
      AdminProduct::create([
           'name'=> request('name'),
            'customerprice'=>request('customerprice'),
          'branchprice'=>request('branchprice'),
            'number'=>request('number'),
          'storage'=>request('storage'),
          
            'color_id'=>request('color'),
            'os'=>request('os'),
            'battery'=>request('battery'),
            'display'=>request('display'),
            'weight'=>request('weight'),
            'ram'=>request('ram'),
            'camera'=>request('camera'),
            'processor'=>request('processor'),
            'sim'=>request('sim'),
          'image1'=>$image1_name,
          'image2'=>$image2_name,
            'image3'=>$image3_name,
            'image4'=>$image4_name,
          'description'=>request('description')
        ]);
      Product::create([
           'name'=> request('name'),
            'customerprice'=>request('customerprice'),
          'branchprice'=>request('branchprice'),
            'storage'=>request('storage'),
            'color_id'=>request('color'),
            'os'=>request('os'),
            'battery'=>request('battery'),
            'display'=>request('display'),
            'weight'=>request('weight'),
            'ram'=>request('ram'),
            'camera'=>request('camera'),
            'processor'=>request('processor'),
            'sim'=>request('sim'),
          'image1'=>$image1_name,
          'image2'=>$image2_name,
            'image3'=>$image3_name,
            'image4'=>$image4_name,
          'description'=>request('description')
          ]);
//      $product=Product::all()->where('name',request('name'))->where('color_id',request('color'))->pluck('id');
//      dd($product);
//      ColorProduct::create([
//          'product_id'=>$product,
//          'color_id'=>request('color'),
//      ]);
        $product=Product::all()->where('name',request('name'))->where('color_id',request('color'))->pluck('id')->first();
     // return $product;
        //  dd($product);
      //return $request;
        ColorProduct::create([
          'product_id'=>$product,
          'color_id'=>request('color'),

      ]);
        return back()->with('success','ok');
    }
    
    public function edit(){
        $product=AdminProduct::all();
        return view('edit_product',compact('product'));
    }
    public function delete($id){
        AdminProduct::find($id)->delete();
        Product::find($id)->delete();
        return back()->with('success','ok');
    }
    public function update($id){
        $colors=Color::all();
        $product=AdminProduct::find($id);
        return view('update_product',compact('product','colors'));
    }
    public function update2($id){
       
        $adminproduct=AdminProduct::find($id);
        $product= Product::find($id);
        $image2_name=request()->file('image2');
        $image3_name=request()->file('image3');
        $image4_name=request()->file('image4');
        
        if((request()->file('image1'))==null){
        $adminproduct->name=request('name');
        $adminproduct->customerprice=request('customerprice');
        $adminproduct->branchprice=request('branchprice');
        $adminproduct->number=request('number');
        $adminproduct->storage=request('storage');
        $adminproduct->color=request('color');
        $adminproduct->os=request('os');
        $adminproduct->battery=request('battery');
        $adminproduct->display=request('display');
        $adminproduct->weight=request('weight');
        $adminproduct->ram=request('ram');
        $adminproduct->camera=request('camera');
        $adminproduct->processor=request('processor');
        $adminproduct->sim=request('sim');
        $adminproduct->description=request('description');
        
        if((request()->file('image2'))!=null){
        $file= request()->file('image2');
        $image_path='assets/images/productsimages';
        $image2_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image2_name);
        $adminproduct->image2=$image2_name;
        $product->image2=$image2_name;
        }
        if((request()->file('image3'))!=null){
        $file= request()->file('image3');
        $image_path='assets/images/productsimages';
        $image3_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image3_name);
        $adminproduct->image3=$image3_name;
        $product->image3=$image3_name;
        }
        if((request()->file('image4'))!=null){
        $file= request()->file('image4');
        $image_path='assets/images/productsimages';
        $image4_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image4_name);
        $adminproduct->image4=$image4_name;
        $product->image4=$image4_name;
        }
        
        
        $product->name=request('name');
            $product->customerprice=request('customerprice');
            $product->branchprice=request('branchprice');
        $product->storage=request('storage');
        $product->color=request('color');
        $product->os=request('os');
        $product->battery=request('battery');
        $product->display=request('display');
        $product->weight=request('weight');
        $product->ram=request('ram');
        $product->camera=request('camera');
        $product->processor=request('processor');
        $product->sim=request('sim');
        $product->description=request('description');
        
        } 
        else{
        $adminproduct->name=request('name');
            $adminproduct->customerprice=request('customerprice');
            $adminproduct->branchprice=request('branchprice');
        $adminproduct->number=request('number');
        $adminproduct->storage=request('storage');
        $adminproduct->color=request('color');
        $adminproduct->os=request('os');
        $adminproduct->battery=request('battery');
        $adminproduct->display=request('display');
        $adminproduct->weight=request('weight');
        $adminproduct->ram=request('ram');
        $adminproduct->camera=request('camera');
        $adminproduct->processor=request('processor');
        $adminproduct->sim=request('sim');
        $adminproduct->description=request('description');
       
        
        if((request()->file('image2'))!=null){
        $file= request()->file('image2');
        $image_path='assets/images/productsimages';
        $image2_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image2_name);
        $adminproduct->image2=$image2_name;
        $product->image2=$image2_name;
        }
        if((request()->file('image3'))!=null){
        $file= request()->file('image3');
        $image_path='assets/images/productsimages';
        $image3_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image3_name);
        $adminproduct->image3=$image3_name;
        $product->image3=$image3_name;
        }
        if((request()->file('image4'))!=null){
        $file= request()->file('image4');
        $image_path='assets/images/productsimages';
        $image4_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image4_name);
        $adminproduct->image4=$image4_name;
        $product->image4=$image4_name;
        }
        
        $product->name=request('name');
            $product->customerprice=request('customerprice');
            $product->branchprice=request('branchprice');
        $product->storage=request('storage');
        $product->color=request('color');
        $product->os=request('os');
        $product->battery=request('battery');
        $product->display=request('display');
        $product->weight=request('weight');
        $product->ram=request('ram');
        $product->camera=request('camera');
        $product->processor=request('processor');
        $product->sim=request('sim');
        $product->description=request('description');
       
        
        $file= request()->file('image1');
        $image_path='assets/images/productsimages';
        $image_name= $file->getClientOriginalName();
        $file->move(public_path($image_path),$image_name);
        $adminproduct->image1=$image_name;
        $product->image1=$image_name;
        }
        
        $adminproduct->save();
        $product->save();
        return back()->with('success','ok');
    }
    
    public function color(){
        $ad=AdminProduct::find(1)->color;
       // $color=Color::find(1)->adminproduct;
        return  $ad;
        
    }
    public function payment() {

        $Amount = 1000; //Amount will be based on Toman - Required
        $Description = 'توضیحات تراکنش تستی'; // Required

        $CallbackURL = 'http://localhost:8000/checker'; // Required


        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
                [
                    'MerchantID' => $this->MerchantID,
                    'Amount' => $Amount,
                    'Description' => $Description,
                    'CallbackURL' => $CallbackURL,
                ]
        );

//Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
            App\Payment::create([
               'authority'=>$result->Authority,
               'amount'=>$Amount
            ]);
           // Header('Location: https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
            return redirect('https://www.zarinpal.com/pg/StartPay/'. $result->Authority);

        } else {
            echo'ERR: ' . $result->Status;
        }
    }
    public function checker(){
        $Authority = request('Authority');
        if (request('Status') == 'OK') {
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
[
'MerchantID' => $this->MerchantID,
'Authority' => $Authority,
'Amount' => $Amount,
]
);

            if ($result->Status == 100) {
echo 'Transaction success. RefID:'.$result->RefID;
} else {
echo 'Transaction failed. Status:'.$result->Status;
}
} else {
echo 'Transaction canceled by user';
}
    }

}
