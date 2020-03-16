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
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

@if($result)

                        @foreach($result as $r)

                        <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true" ></i>
                            <h2>گوشی مورد نظر دارای گارانتی می باشد</h2>
                            <p>شماره سریال: {{$r->serial_no}}</p>
                            <p dir="ltr"> {{$r->imei}} :IMEI کد   </p>
                            <p>تاریخ انقضای گارانتی: {{$r->garanty_date}}</p>
                        @endforeach
@else
                                <div class="success-text"><i class="fa fa-times-circle" aria-hidden="true" style="color:#dc3545"></i>


@endif
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

</body>
</html>
