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

                            <p>در هر مرحله از تعمیرات وضعیت را به روز رسانی نمایید.</p>


                        </div>
                        <!-- leave comment sectopn starts-->
                        <div class="col-lg-8 center">
                            <div class="angle angle-right"></div>
                            <div class="quote_2 comment_form_sec">
                                <div class="container bg-transparent">
                                    <div class="row">
                                        <div class="col-12 quote_form">
                                            <h3 class="page-header-comment mb-4">به روز رسانی وضعیت :</h3>
                                            <?php if (Session::get('success')): ?>
                                            <div class="container" style="padding-top: 20px">
                                                <div class="alert alert-secondary alert-dismissible fade show text-success">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    وضعیت با موفقیت به روز رسانی شد.
                                                </div>
                                            </div>
                                            <?php endif; ?>


                                            <form action="/edit_repair2/{{$result->id}}"method="post">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>نام و نام خانوادگی: {{$result->name}}</label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >شماره ملی: {{$result->national_code}} </label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره تماس: {{$result->tel}}</label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >مدل گوشی: {{$result->model}}</label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>شماره سریال: {{$result->serial_no}}</label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label dir="ltr" >{{$result->imei}} :IMEI کد</label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>تاریخ تحویل: {{$result->date_in}}</label>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >انقضای گارانتی: {{$result->garanty_date}}</label>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label >علت خرابی: {{$result->message}}</label>

                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label >وضعیت :</label><br>
                                                    </div>
                                                    <label class="radio" style="padding-left: 30px;">
                                                        <input type="radio" name="status" value="1" <?php echo($result->status==1)?'checked':''; ?> >تحویل گرفته شده
                                                    </label>
                                                    <label class="radio" style="padding-left: 30px;">
                                                        <input type="radio" name="status" value="2"<?php echo($result->status==2)?'checked':''; ?> >در حال تعمیر
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="status" value="3"<?php echo($result->status==3)?'checked':''; ?> > تعمیر شده
                                                    </label>

                                                </div>


                                                <div class="form-group">
                                                    <a class="theme_btn" href=""><button type="submit">به روز رسانی</button>
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
