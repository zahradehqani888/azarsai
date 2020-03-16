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
                        <h1 class="m-0 text-dark">نمایندگی</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">نمایندگی</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class='col-md-2'></div>
                    <div class="col-md-8">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">افزودن نمایندگی</h3>
                            </div>
                            <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        نمایندگی مورد نظر با موفقیت اضافه شد.
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

                            <form class="form-horizontal"action="/addbranch2"method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                        <label  class=" control-label">نام نمایندگی</label><span class="error" style="color:#dc3545">*</span>
                                        <input type="text" class="form-control"name="branchname" value="{{old('branchname')}}">
                                        </div>
                                   
                                    
                                            <div class="col-6">
                                        <label  class=" control-label">نام و نام خانوادگی</label><span class="error" style="color:#dc3545">*</span>
                                        <input type="text" class="form-control"name="name" value="{{old('name')}}">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                        <label  class=" control-label">کد ملی</label>
                                        <input type="text" class="form-control"name="nationalcode" value="{{old('nationalcode')}}">
                                        </div>
                                        <div class="col-6">
                                        <label  class=" control-label">ایمیل</label><span class="error" style="color:#dc3545">*</span>
                                        <input type="text" class="form-control"name="email"value="{{old('email')}}" >
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label  class=" control-label">تلفن</label><span class="error" style="color:#dc3545">*</span>
                                                <input type="text" class="form-control"name="tell" value="{{old('tell')}}" >

                                            </div>
                                            <div class="col-6">
                                                <label  class="control-label">موبایل</label><span class="error" style="color:#dc3545">*</span>
                                                <input type="text" class="form-control"name="mobile"value="{{old('mobile')}}">
                                            </div>
                                        </div>   
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-6">
                                                <label  class="control-label">استان</label><span class="error" style="color:#dc3545">*</span>
                                                <select id="country" name="country" class="form-control">
                                                    <option value="" selected disabled></option>
                                                    @foreach($countries as $key => $country)
                                                    <option value="{{$key}}"> {{$country}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-6">
                                                <label  class="control-label">شهر</label><span class="error" style="color:#dc3545">*</span>
                                                <select name="state" id="state" class="form-control" >
                                                </select>
                                            </div>
                                            
                                        </div>     
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">آدرس</label><span class="error" style="color:#dc3545">*</span>
                                        <textarea name="address"rows="4"cols="30"class="form-control">{{old('address')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">کدپستی</label><span class="error" style="color:#dc3545">*</span>
                                        <input type="text" class="form-control"name="code" value="{{old('code')}}" >
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-info">ثبت</button>
                                    </div> 
                                </div>
                            </form>
                        </div>

                    </div>
                    </section>
                   
                    @endsection
                    
                    </body>
                    </html>





