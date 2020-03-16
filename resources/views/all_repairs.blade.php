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
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> تعمیرات</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->
    <section id="service" class="cmn_bg cmn_bg-3">

        <div class="container our_service_2 our_service_3 our_service_5" id="showbranches">
            <div class="row">
                <div class="col-12">
                    <div class="con_title con_title_5">
                        <h2>تعمیرات</h2>
                        <h6><span>لیست گوشی ها</span></h6>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">


                                <!-- /.card-header -->
                                <div class=" table-responsive ">

                                    <table  class="table ">
                                        <thead>
                                        <!-- start table's head. for xs view we write the headers in the style.css-->
                                        <tr class="table100-head">

                                            <th>نام و نام خانوادگی</th>
                                            <th>شماره سریال</th>
                                            <th> کد IMEI</th>
                                            <th>مدل</th>
                                            <th>شماره تماس</th>
                                            <th>ویرایش</th>

                                        </tr>
                                        <!-- end table's head -->
                                        </thead>
                                        <tbody>
                                        <!-- start table's body -->
                                        @foreach($all as $a)
                                            <tr>
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->serial_no}}</td>
                                                <td>{{$a->imei}}</td>
                                                <td>{{$a->model}}</td>
                                                <td>{{$a->tel}}</td>
                                                <td><a href="/edit_repair/{{$a->id}}" class="icon update-cart" ><i class="fa fa-refresh" aria-hidden="true"></i></a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                            <!-- /.card -->
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
</body>
</html>


