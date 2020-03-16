<html>
    <head></head>
    <body>
        @extends('master')
        @section('content')
        <!-- Breadcrumb Start -->
        <div class="bread_crumb blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h2>سبد خرید</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> سبد خرید</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        <!--section start-->
<section class="section-b-space cmn_bg checkout-page">
    <div class="container padding-cls">
        <div class="checkout-form">
            <?php if (count($errors)): ?>
            <div class="container" style="padding-top: 20px">
                <div class="alert alert-secondary alert-dismissible fade show text-danger" >
                    <button type="button" class="close" data-dismiss="alert">&times;</button>

                    @foreach($errors->all() as $e)
                        <li>{{$e}}</li>
                    @endforeach

                </div>
            </div>
            <?php endif; ?>
            <form action="/shop" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="checkout-title">
                            <h3>جزئیات صورتحساب</h3></div>
                        <div class="row check-out">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">نام و نام خانوادگی </div>
                                <input type="text" name="name" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">کد ملی</div>
                                <input type="text" name="national_code" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">شماره تماس</div>
                                <input type="text" name="tel" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">آدرس ایمیل</div>
                                <input type="text" name="email" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">استان</div>
                                <input type="text" name="province" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">شهر</div>
                                <input type="text" name="city" value="" placeholder="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">آدرس</div>
                                <textarea class="" type="text" name="address" value=""rows="10"cols="20" placeholder=""></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                <div class="field-label">کد پستی</div>
                                <input type="text" name="postal_code" value="" placeholder="" >
                            </div>
                            {{--<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                                {{--<input type="checkbox" name="shipping-option" id="account-option" > &ensp;--}}
                                {{--<label for="account-option">ایجاد یک حساب کاربری؟</label>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="checkout-details">
                            <div class="order-box">
                                <div class="title-box">
                                    <div>محصول <span style="float:left">مجموع</span></div>
                                </div>
                                <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>
                                <ul class="qty">
                                    <li>{{ $details['name'] }} × {{ $details['quantity'] }} <span style="float:left">{{ $details['price'] * $details['quantity'] }} تومان</span></li>
                                    
                                </ul>
            @endforeach
            @endif
                                
                                <ul class="total">
                                    <li>مجموع <span class="count" style="float:left">{{ $total }} تومان</span></li>
                                    
                                </ul>
                            </div>
                            <div class="payment-box">
                                <div class="upper-box">
                                    <div class="payment-options">
                                        <ul>
                                            {{--<li>--}}
                                                {{--<div class="radio-option">--}}
                                                    {{--<input type="radio" name="payment-group" id="payment-1" checked="checked">--}}
                                                    {{--<label for="payment-1">پرداخت از طریق درگاه بانکی</label>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="radio-option">--}}
                                                    {{--<input type="radio" name="payment-group" id="payment-2">--}}
                                                    {{--<label for="payment-2">پرداخت نقد هنگام تحویل</label>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{----}}
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" name="price" value="{{$total}}" readonly >
                                </div>
                                
                                <div class="text-right">
                                    <a class="theme_btn" href="#"><button type="submit">
                                        پرداخت
                                        <span class="theme_btn_eff"></span>
                                        </button></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <ul class="plus_decore">
        <li></li>
        <li></li>
    </ul>
</section>
<!--section end-->
        
        @endsection
    </body>
</html>







