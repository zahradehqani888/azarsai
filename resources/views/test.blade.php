<!DOCTYPE html>
<html lang="en" dir="rtl">

@extends('master')
@section('content')

<body class="rtl">

<header class="header-5">
   <script> 
 function Func(Shahrestanha) {
       var _Shahrestan = document.getElementById("Shahrestan");
       _Shahrestan.options.length = 0;
       if(Shahrestanha != "") {
          var arr = Shahrestanha.split(",");
          for(i = 0; i < arr.length; i++) {
              if(arr[i] != "") {
                 _Shahrestan.options[_Shahrestan.options.length]=new Option(arr[i],arr[i]);
              }
          }
       }
   }
   
   

</script>
</header>

<!--  Slider_start  -->
<div class="home-full big-header">
    <div class="slide_1 owl-carousel owl-theme">
        <div>
            <img src="assets/images/cleaning/slider/1.jpg" alt="" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="slider-content">
                            <div>
                                <h1 class="top" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">شما شایسته یک استراحت <span class="sec_one">هستید!</span></h1>
                                <h3 data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="">یک چاپگر ناشناخته با یک نوع کابین از آن ساخته شد و آن را برای ساختن یک نمونه نمونه آماده کرد
                                    .</h3>
                                <a class="slider_btn theme_btn btn_5" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown" href="#">
                                    ادامه مطلب<span class="theme_btn_eff"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="assets/images/cleaning/slider/2.jpg" alt="" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="slider-content">
                            <div>
                                <h1 class="top" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">شما شایسته یک استراحت <span class="sec_one">هستید!</span></h1>
                                <h3 data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="">یک چاپگر ناشناخته با یک نوع کابین از آن ساخته شد و آن را برای ساختن یک نمونه نمونه آماده کرد
                                    .</h3>
                                <a class="slider_btn theme_btn btn_5" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown" href="#">
                                    ادامه مطلب<span class="theme_btn_eff"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="assets/images/cleaning/slider/1.jpg" alt="" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="slider-content">
                            <div>
                                <h1 class="top" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">شما شایسته یک استراحت <span class="sec_one">هستید!</span></h1>
                                <h3 data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="">یک چاپگر ناشناخته با یک نوع کابین از آن ساخته شد و آن را برای ساختن یک نمونه نمونه آماده کرد
                                    .</h3>
                                <a class="slider_btn theme_btn btn_5" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown" href="#">
                                    ادامه مطلب<span class="theme_btn_eff"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Slider_End  -->
<form id="form1" name="FRM" runat="server" action="/saveee" method="post">
    

    <div dir="rtl" style="text-align: center" >
                                       استان:&nbsp;
                                    <select id="Ostan" runat="server" onchange="Func(this.value)" name="province">
                                        <option value=""></option>
                                        <option value=" شیراز , فسا">فارس</option>
                                        <option value=" یزد , اردکان  ">یزد</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;شهر :
                                    <select id="Shahrestan" runat="server" name="city" >
                                    </select>
&nbsp;
        &nbsp;</div>
    <button type="submit" class="btn btn-info">افزودن </button>
    </form>




<!-- Brand Start -->
<section class="brand_sec cmn_bg cmn_bg-3">
    <ul class="plus_decore">
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="con_title">
                    <h2>مشتریان ما</h2>
                    <h6><span>مشتری خوشحال</span></h6>
                </div>
            </div>
            <div class="col">
                <div class="brand_slide owl-carousel owl-theme">
                    <div class="brand_1">
                        <img src="assets/images/brand/1.png" alt="">
                    </div>
                    <div class="brand_1">
                        <img src="assets/images/brand/2.png" alt="">
                    </div>
                    <div class="brand_1">
                        <img src="assets/images/brand/3.png" alt="">
                    </div>
                    <div class="brand_1">
                        <img src="assets/images/brand/4.png" alt="">
                    </div>
                    <div class="brand_1">
                        <img src="assets/images/brand/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brand End -->

 @endsection
</body>


<!-- Mirrored from themes.pixelstrap.com/reno/theme/cleaning.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 09:08:46 GMT -->
</html>