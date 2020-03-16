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
                        <h2>ورود</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>ورود</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- section start -->
    <section class="login-page section-b-space cmn_bg_yellow">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3>ورود</h3>
                    <div class="theme-card">
                        <form class="theme-form" action="logs" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="text" class="form-control" id="email" placeholder="ایمیل" name="email">
                            </div>
                            <div class="form-group">
                                <label for="review">رمزعبور</label>
                                <input type="password" class="form-control" id="review" placeholder="رمز عبور شماره موبایل است." name="password">
                            </div>
                            <button class="btn btn-solid" id="mc-submitsa" type="submit">ورود</button>
                            <a  href="/reg"><button class="btn btn-solid" id="mc-submita" style="margin-right: 30px;">ایجاد حساب </button></a>


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





