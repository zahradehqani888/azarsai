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
                    <h1 class="m-0 text-dark">نظر سنجی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">نظر سنجی</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <?php if (Session::get('success')): ?>
                        <div class="container" style="padding-top: 20px">
                            <div class="alert alert-secondary alert-dismissible fade show text-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                نظر با موفقیت حذف شد.
                            </div>
                        </div>
                        <?php endif; ?>
                            <?php if (Session::get('del')): ?>
                            <div class="container" style="padding-top: 20px">
                                <div class="alert alert-danger alert-dismissible fade show text-success">

                                    آیا می خواهید این نظر را حذف کنید؟
                                    </br>
                                    <a href="/delopinion/<?php echo Session::get('del') ?>"> <button type="button" class="btn btn-default" style="margin-left: 20px">بله</button></a>
                                    <a href=""><button type="button" class="btn btn-default" >خیر</button></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        <table class="table table-hover">
                            <tr>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره تماس</th>
                                <th>مدل گوشی</th>
                                <th>تاریخ خرید</th>
                                <th width="16%"></th>

                            </tr>
                            @foreach($opinions as $opinion)

                                <tr>
                                    <td>{{$opinion->name}}</td>
                                    <td>{{$opinion->tel}}</td>
                                    <td>{{$opinion->model}}</td>
                                    <td>{{$opinion->buy_date}}</td>

                                    <td>
                                        <a href="co_opinion/{{$opinion->id}}" style="margin-left: 20px;font-size: 13px;">مشاهده نظر</a>
                                        {{--<a href="#" class="icon"data-toggle="modal" data-target="#Modal1" ><i class="fa fa-trash "></i></a>--}}
                                        <a href="/del_opinion1/{{$opinion->id}}" class="icon" ><i class="fa fa-trash "></i></a>
                                        <div class="modal fade" id="Modal1" role="dialog"style="padding-top:200px;direction: rtl">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">حذف</h4>

                                                    </div>
                                                    <div class="modal-body">
                                                        <p>آیا از حذف این نظر مطمئن هستید؟</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="delopinion/{{$opinion->id}}"> <button type="button" class="btn btn-primary" style="margin-left: 20px">بله</button></a>
                                                        <a href=""><button type="button" class="btn btn-default" >خیر</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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


