<html>
<head>

</head>
<body>
@extends('master')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="bread_crumb blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h2>ثبت نام</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>ثبت نام</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- section start -->
    <section class="login-page  section-b-space cmn_bg_yellow">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>ایجاد حساب</h3>
                    <div class="theme-card">
                        <?php if (Session::get('success')): ?>
                        <div class="container" style="padding-top: 20px">
                            <div class="alert alert-secondary alert-dismissible fade show text-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                حساب کاربری با موفقیت ایجاد شد.
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
                        <form class="theme-form" action="/reg2" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">نام کاربری</label>
                                    <input type="text" class="form-control" id="fname" placeholder="نام کاربری" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">رمز عبور </label>
                                    <input type="password" class="form-control" id="lname" placeholder="رمز عبور" name="pass">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">ایمیل</label>
                                    <input type="text" class="form-control" id="email" placeholder="ایمیل" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">تکرار رمز عبور</label>
                                    <input type="password" class="form-control" id="review" placeholder="تکرار رمز عبور" name="re-pass">
                                </div>
                                <a class="theme_btn" href="#"><button type="submit">
                                    ایجاد حساب
                                    <span class="theme_btn_eff"></span>
                                </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection
</body>
</html>





