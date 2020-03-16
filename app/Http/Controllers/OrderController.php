<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\lib\zarinpal;
use nusoap_client;
use App\AdminProduct;
class OrderController extends Controller
{
   public function add_order(Request $request)
   {
       $this->validate($request,[
           'name'=>'required',
           'national_code'=>'required',
           'tel'=>'required',
           'email'=>'required',
           'province'=>'required',
           'city'=>'required',
           'address'=>'required',
           'postal_code'=>'required',

       ],[
           'name.required'=>'نام و نام خانوادگی را وارد کنید.',
           'national_code.required'=>'کد ملی را وارد کنید.',
           'tel.required'=>'شماره تماس را وارد کنید.',
           'email.required'=>'آدرس ایمیل را وارد کنید.',
           'province.required'=>'استان را وارد کنید.',
           'city.required'=>'شهر را وارد کنید.',
           'address.required'=>'آدرس را وارد کنید.',
           'postal_code.required'=>'کدپستی را وارد کنید.',

       ]);
       if (session('cart')) {
        foreach (session('cart') as $id => $details) {
               Order::create([
                   'product_name' => $details['name'],
                   'quantity'=>$details['quantity'],
                   'price'=>$details['price'],

                   'name'=>request('name'),
                   'national_code'=>request('national_code'),
                   'tel'=>request('tel'),
                   'email'=>request('email'),
                   'province'=>request('province'),
                   'city'=>request('city'),
                   'address'=>request('address'),
                   'postal_code'=>request('postal_code')

               ]);
        }
       }

   //   return back();
 
        $order = new zarinpal();
        $res = $order->pay($request->price,"info@azarsai.com","0912111111");
        return redirect('https://www.zarinpal.com/pg/StartPay/' . $res);
 
    }
    public function order(Request $request){


        $MerchantID = 'c824b3be-3156-11ea-aebd-000c295eb8fc';
        $Authority =$request->get('Authority') ;
                
        //ما در اینجا مبلغ مورد نظر را بصورت دستی نوشتیم اما در پروژه های واقعی باید از دیتابیس بخوانیم
        $Amount =1000;
        if ($request->get('Status') == 'OK') {
            $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
            $client->soap_defencoding = 'UTF-8';
 
            //در خط زیر یک درخواست به زرین پال ارسال می کنیم تا از صحت پرداخت کاربر مطمئن شویم
            $result = $client->call('PaymentVerification', [
                [
                    //این مقادیر را به سایت زرین پال برای دریافت تاییدیه نهایی ارسال می کنیم
                    'MerchantID'     => $MerchantID,
                    'Authority'      => $Authority,
                    'Amount'         => $Amount,
                ],
            ]);
 
            if ($result['Status'] == 100) {
                $err='پرداخت با موفقیت انجام شد.';
                return view('result1',compact('err'));
                    
 
            } else {
                $err='خطا در انجام عملیات';
                    return view('result2',compact('err'));
            }
        }
        else
        {
            $err='خطا در انجام عملیات';
                    return view('result2',compact('err'));
        }
 
 
 
    }
}
