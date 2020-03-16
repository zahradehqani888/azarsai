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
                <h1 class="m-0 text-dark">گارانتی</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item active">گارانتی</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class='col-md-1'></div>
            <div class="col-md-10">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">افزودن گارانتی</h3>
                    </div>
                    <?php if (Session::get('success')): ?>
                      <div class="container" style="padding-top: 20px">
                            <div class="alert alert-secondary alert-dismissible fade show text-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                گارانتی با موفقیت اضافه شد.
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
                    <form class="form-horizontal"action="/addgaranty2"method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label  class=" control-label">شماره سریال گوشی </label>
                                        <input type="text" class="form-control"name="serial_no"  value="{{old('serial_no')}}" >
                                    </div>
                                    <div class="col-6">
                                        <label  class=" control-label">کد IMEI</label>
                                        <input type="text" class="form-control"name="imei"  value="{{old('imei')}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label  class=" control-label">برند گوشی </label>
                                        <input type="text" class="form-control"name="brand"  value="{{old('brand')}}" >
                                    </div>
                                    <div class="col-6">
                                        <label  class=" control-label">مدل گوشی </label>
                                        <input type="text" class="form-control"name="model"  value="{{old('model')}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label  class=" control-label">نوع گارانتی </label>
                                        <input type="text" class="form-control"name="garanty_type" value="{{old('garanty_type')}}"  >
                                    </div>
                                    <div class="col-6">
                                        <label  class=" control-label">کد فعالسازی </label>
                                        <input type="text" class="form-control"name="activation_code" value="{{old('activation_code')}}"  >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label  class=" control-label">تاریخ ثبت گارانتی</label>
                                        <input type="text" class="form-control"name="time_in" id="time_in" placeholder="yyyy/mm/dd" value="{{old('time_in')}}" >
                                    </div>
                                    <div class="col-6">
                                        <label  class=" control-label">تاریخ انقضای گارانتی</label>
                                        <input type="text" class="form-control"name="garanty_date" placeholder="yyyy/mm/dd"  value="{{old('garanty_date')}}" >
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info">ثبت</button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>

        </div>

    </div>
</section>



@endsection

</body>
</html>





