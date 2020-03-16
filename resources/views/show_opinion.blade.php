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
                        <h2>نظرسنجی</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb" >
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>نظرسنجی</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- Contact-us Start -->
    <section class="contact-section cmn_bg">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <!-- leave comment sectopn starts-->
        <div class="comment_form contact_form contect_f">
            <div class="text-xl-right">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 contact_text">
                            <div class="angle angle-left"></div>
                            <h3 class="title" >راهنما</h3>
                            <p>لطفا اطلاعات فرم روبرو را با دقت، پر نمایید و ما را در جهت بهبود هرچه بیشتر کیفیت خدمات یاری نمایید. </p>
                            </div>
                        <!-- leave comment sectopn starts-->
                        <div class="col-lg-8 center">
                            <div class="angle angle-right"></div>
                            <div class="quote_2 comment_form_sec">
                                <div class="container bg-transparent">
                                    <div class="row">
                                        <div class="col-12 quote_form">
                                            <h3 class="page-header-comment mb-4">نظرسنجی :</h3>
                                            <?php if (Session::get('success')): ?>
                                            <div class="container" style="padding-top: 20px">
                                                <div class="alert alert-secondary alert-dismissible fade show text-success">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    نظر شما با موفقیت ثبت شد.

                                                </div>
                                            </div>
                                            <?php endif; ?>
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
                                            <form action="#"method="post">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>نام و نام خانوادگی :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="name" class="form-control"  >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >شماره ملی:</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="national_code" class="form-control"  >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره تماس :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="tel" class="form-control"  >
                                                    </div>
                                                    <div class="form-group col-md-6"><span class="error" style="color:#dc3545">*</span>
                                                        <label >مدل گوشی :</label>
                                                        <input type="text"name="model" class="form-control"  >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره سریال :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="serial_no" class="form-control" placeholder="شماره سریال یک کد 16 رقمی است." >
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>تاریخ خرید :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="buy_date" class="form-control" placeholder="yyyy/mm/dd" >
                                                    </div>


                                                    <div class="form-control">
                                                    <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                        <label >1. قیمت محصولات :</label><br>
                                                    </div>

                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="1" value="1" >ضعیف
                                                    </label>
                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="1" value="2">متوسط
                                                    </label>
                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="1" value="3">خوب
                                                    </label>
                                                    <label class="radio-inline">
                                                         <input type="radio" name="1" value="4">عالی
                                                    </label>
                                                    </div>


                                                    <div class="form-control" style="margin-top:20px;">
                                                    <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                        <label >2. کیفیت ارائه خدمات سخت افزاری ونرم افزاری تعمیر :</label><br>
                                                    </div>
                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="2" value="1" >ضعیف
                                                    </label>
                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="2" value="2">متوسط
                                                    </label>
                                                    <label class="radio-inline" style="padding-left: 30px;">
                                                        <input type="radio" name="2" value="3"> خوب
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="2" value="4">عالی
                                                    </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >3. میزان برطرف شدن ایراد دستگاه :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="3" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="3" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="3" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="3" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >4. نحوه اطلاع رسانی در مورد هزینه های انجام گرفته :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="4" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="4" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="4" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="4" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >5. تعهد دفتر خدمات در خصوص مدت زمان تعمیر :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="5" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="5" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="5" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="5" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >6. ارائه مستندات فعالیت های صورت گرفته :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="6" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="6" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="6" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="6" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >7. کیفیت بسته بندی محصولات :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="7" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="7" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="7" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="7" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >8. میزان رضایت شما از خدمات پس از فروش :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="8" value="1" >ضعیف
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="8" value="2">متوسط
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="8" value="3"> خوب
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="8" value="4">عالی
                                                        </label>
                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >9. آیا شما قبلا از محصولات شرکت آذرسای خریداری نموده اید ؟ :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="9" value="1" >بله
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="9" value="2">خیر
                                                        </label>

                                                    </div>

                                                    <div class="form-control" style="margin-top:20px;">
                                                        <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                            <label >10. آیا نمایندگی اطلاعات کافی در مورد دستگاه را در اختیار شما قرار داده است ؟ :</label><br>
                                                        </div>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="10" value="1" >بله
                                                        </label>
                                                        <label class="radio-inline" style="padding-left: 30px;">
                                                            <input type="radio" name="10" value="2">خیر
                                                        </label>

                                                    </div>


                                                </div>


                                                <div class="form-group" style="margin-top:20px;">
                                                    <a class="theme_btn" href=""><button type="submit">ثبت</button>
                                                        <span class="theme_btn_eff"></span>
                                                    </a>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- leave comment section end-->

                    </div>
                </div>
            </div>
        </div>
        <!-- leave comment section end-->
    </section>
    <!-- Contact-us End -->



@endsection

</body>
</html>
