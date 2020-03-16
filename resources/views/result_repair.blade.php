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
                        <h2>پیگیری تعمیرات</h2>
                    </div>
                </div>
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb" >
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i>پیگیری تعمیرات</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- Contact-us Start -->
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                        @foreach($result as $r)
                        <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true" ></i>
                        <h2>گوشی شما برای انجام تعمیرات در سیستم ثبت شده است</h2>
                        <p>شماره سریال: {{$r->serial_no}}</p>
                        <p dir="ltr"> {{$r->imei}} :IMEI کد   </p>
                            <?php $rr=$r->status; ?>
                        <p>وضعیت:
                            @if($rr==3)
                                <button class="btn btn-success">تعمیر شده است</button><br>
                                برای دریافت گوشی با نمایندگی مربوطه تماس بگیرید.
                            @else
                                <button class="btn btn-warning">در حال تعمیر</button>

                            @endif
                        </p>






                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

</body>
</html>
