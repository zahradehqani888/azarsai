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
                        <h2>تعمیرات</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb" >
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>تعمیرات</strong></li>
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
                            <p>مشخصات گوشی تحویل گرفته شده را در فرم روبرو وارد نمایید.  </p>
                            <p>در هر مرحله از تعمیرات وضعیت را به روز رسانی نمایید.</p>
                            <div>
                                <a class="theme_btn" href="/all_repairs"><button>جستجو</button>
                                    <span class="theme_btn_eff"></span>
                                </a>
                            </div>

                        </div>
                        <!-- leave comment sectopn starts-->
                        <div class="col-lg-8 center">
                            <div class="angle angle-right"></div>
                            <div class="quote_2 comment_form_sec">
                                <div class="container bg-transparent">
                                    <div class="row">
                                        <div class="col-12 quote_form">
                                            <h3 class="page-header-comment mb-4">ثبت خرابی :</h3>
                                            <?php if (Session::get('success')): ?>
                                            <div class="container" style="padding-top: 20px">
                                                <div class="alert alert-secondary alert-dismissible fade show text-success">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    مشخصات گوشی با موفقیت ثبت شد.

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
                                            <form action="/addrepair"method="post">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>نام و نام خانوادگی :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="name" class="form-control" value="{{old('name')}}" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >شماره ملی:</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="national_code" class="form-control" value="{{old('national_code')}}" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره تماس :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="tel" class="form-control" value="{{old('tel')}}" >
                                                    </div>
                                                    <div class="form-group col-md-6"><span class="error" style="color:#dc3545">*</span>
                                                        <label >مدل گوشی :</label>
                                                        <input type="text"name="model" class="form-control" value="{{old('model')}}" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره سریال :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="serial_no"  value="{{old('serial_no')}}" class="form-control" placeholder="شماره سریال یک کد 16 رقمی است." >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >کد IMEI :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="imei"  value="{{old('imei')}}" class="form-control" placeholder="کد IMEI یک کد 15 رقمی است.">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>تاریخ تحویل :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="date_in" class="form-control" placeholder="yyyy/mm/dd" value="{{old('date_in')}}" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >انقضای گارانتی :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="garanty_date" class="form-control" placeholder="yyyy/mm/dd"  value="{{old('garanty_date')}}" >
                                                    </div>
                                                    <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                        <label >علت خرابی :</label>
                                                        <textarea name="message" class="form-control"  rows="3"  > {{old('message')}} </textarea>
                                                    </div>
                                                    <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                        <label >وضعیت :</label><br>
                                                    </div>
                                                    <label class="radio" style="padding-left: 30px;">
                                                        <input type="radio" name="status" value="1" checked>تحویل گرفته شده
                                                    </label>
                                                    <label class="radio" style="padding-left: 30px;">
                                                        <input type="radio" name="status" value="2">در حال تعمیر
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="status" value="3"> تعمیر شده
                                                    </label>

                                                </div>


                                                <div class="form-group">
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
