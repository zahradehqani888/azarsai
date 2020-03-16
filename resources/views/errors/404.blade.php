<html>
<head></head>
<body>

@extends('master')
@section('content')

    <section id="error_page" class="back_error cmn_bg">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="not_found">
                        <div class="text-center">
                            <h1 data-aos="fade-right">404</h1>
                            <h2 data-aos="fade-left">صفحه مورد نظر یافت نشد.</h2>
                            <div class="error_text">
                                <div>
                                    <div class="btn_error" data-aos="zoom-in">
                                        <a class="slider_btn theme_btn" href="/">
                                            بازگشت به صفحه اصلی
                                            <span class="theme_btn_eff"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
</body>
</html>




