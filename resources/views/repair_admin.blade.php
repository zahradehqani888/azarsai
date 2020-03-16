<!DOCTYPE html>
<html>
<head>


</head>
<body >
@extends('adminmaster')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">تعمیرات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">تعمیرات</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover">
                            <tr>

                                <th>نمایندگی</th>
                                <th>شماره سریال</th>
                                <th> کد IMEI</th>
                                <th>مدل</th>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره تماس</th>
                                <th>وضعیت</th>
                            </tr>

                                    @foreach($all as $a)
                                <tr>
                                    <td>{{$a->branch_name}}</td>
                                    <td>{{$a->serial_no}}</td>
                                    <td>{{$a->imei}}</td>
                                    <td>{{$a->model}}</td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->tel}}</td>
                                    <td>
                                        @if($a->status==1)
                                            تحویل گرفته شده
                                        @elseif($a->status==2)
                                        در حال تعمیر
                                        @elseif($a->status==3)
                                        تعمیر شده
                                            @endif
                                    </td>
                                </tr>
                                    @endforeach



                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection






</body>
</html>





