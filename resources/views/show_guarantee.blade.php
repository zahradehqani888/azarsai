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
                        <h2>بررسی صحت گارانتی</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb" >
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>بررسی صحت گارانتی</strong></li>
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
                            <p>برای اطلاع از صحت گارانتی گوشی خریداری شده، مشخصات گوشی را از طریق فرم روبرو ارسال نمایید.  </p>
                            <p>شماره سریال و کد IMEI را با شماره گیری #06#* می توانید به دست آورید.</p>

                        </div>
                        <!-- leave comment sectopn starts-->
                        <div class="col-lg-8 center">
                            <div class="angle angle-right"></div>
                            <div class="quote_2 comment_form_sec">
                                <div class="container bg-transparent">
                                    <div class="row">
                                        <div class="col-12 quote_form">
                                            <h3 class="page-header-comment mb-4">بررسی صحت گارانتی</h3>
                                            <?php if (Session::get('success')): ?>
                                            <div class="container" style="padding-top: 20px">
                                                <div class="alert alert-secondary alert-dismissible fade show text-success">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    پیام شما با موفقیت ارسال شد.
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
                                            <form action="/result_guarantee" method="post">

                                                @csrf

                                                    <div class="form-group ">
                                                        <div class="row">
                                                        <label>شماره سریال :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="serial_no" value="{{old('serial_no')}}"  class="form-control" placeholder="شماره سریال یک کد 16 رقمی است." >
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                        <div class="row">
                                                        <label>کد IMEI :</label><span class="error" style="color:#dc3545">*</span>
                                                        <input type="text"name="imei" value="{{old('imei')}}"  class="form-control" placeholder="کد IMEI یک کد 15 رقمی است." >
                                                    </div>


                                                </div>


                                                <div class="form-group">
                                                    <a class="theme_btn" href=""><button type="submit">ارسال</button>
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
<?php if (Session::get('garanty')): ?>
<div class="modal fade" id="Modal" role="dialog"style="padding-top:200px;direction: rtl">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">گارانتی</h4>

            </div>
            <div class="modal-body">
                <p> شماره سریال:</p>
                <p>کد IMEI:</p>
                <p>تاریخ انقضای گارانتی:</p>
            </div>
            <div class="modal-footer">
                <a href=""> <button type="button" class="btn btn-primary">بستن</button></a>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>
</body>
</html>
