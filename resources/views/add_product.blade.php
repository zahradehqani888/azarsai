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
                        <h1 class="m-0 text-dark">فروشگاه</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">فروشگاه</li>
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
                                <h3 class="card-title">افزودن محصول</h3>
                            </div>
                            <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        محصول جدید با موفقیت اضافه شد.
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
                            <form class="form-horizontal"action="/addproduct2"method="post"enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label  class=" control-label">نام محصول</label><span class="error" style="color:#dc3545">*</span> 
                                        <div>
                                            <input type="text" class="form-control"name="name" value="{{old('name')}}" >
                                        </div>
                                            </div>
                                            <div class="col-4">
                                        <label  class=" control-label">ظرفیت (گیگابایت)</label><span class="error" style="color:#dc3545">*</span>
                                        <input type="text" class="form-control"name="storage" value="{{old('storage')}}" >
                                        
                                            </div>
                                            <div class="col-4">
                                        <label  class=" control-label">رنگ</label><span class="error" style="color:#dc3545">*</span>

                                        <select class="form-control"name="color">
                                            @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                             @endforeach
                                        </select>
                                        </div>
                                            
                                            
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-4">
                                                <label  class=" control-label">تعداد</label>
                                        <div>
                                            <input type="text" class="form-control"name="number" value="{{old('number')}}">
                                        </div>
                                            </div> 
                                            <div class="col-4">
                                                <label  class=" control-label">قیمت مشتری(تومان)</label><span class="error" style="color:#dc3545">*</span>
                                        <div>
                                            <input type="text" class="form-control"name="customerprice"value="{{old('customerprice')}}" >
                                        </div>
                                            </div>
                                            <div class="col-4">
                                                <label  class=" control-label">قیمت نمایندگی(تومان)</label><span class="error" style="color:#dc3545">*</span>
                                        <div>
                                            <input type="text" class="form-control"name="branchprice"value="{{old('branchprice')}}" >
                                        </div>
                                            </div> 
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-3">
                                                <label  class=" control-label">سیستم عامل</label>
                                        <div>
                                            <input type="text" class="form-control"name="os"value="{{old('os')}}" >
                                        </div>
                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">باتری</label>
                                        <div>
                                            <input type="text" class="form-control"name="battery"value="{{old('battery')}}" >
                                        </div>
                                            </div>
                                            <div class="col-3">
                                                <label  class=" control-label">اندازه (اینچ)</label>
                                        <div>
                                            <input type="text" class="form-control"name="display"value="{{old('display')}}" >
                                        </div>
                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">وزن (گرم)</label>
                                        <div>
                                            <input type="text" class="form-control"name="weight"value="{{old('weight')}}" >
                                        </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-3">
                                                <label  class=" control-label">RAM (گیگابایت)</label>
                                        <div>
                                            <input type="text" class="form-control"name="ram" value="{{old('ram')}}">
                                        </div>
                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">رزولوشن عکس (مگاپیکسل)</label>
                                        <div>
                                            <input type="text" class="form-control"name="camera" value="{{old('camera')}}">
                                        </div>
                                            </div>
                                            <div class="col-3">
                                                <label  class=" control-label">پردازنده</label>
                                        <div>
                                            <input type="text" class="form-control"name="processor"value="{{old('processor')}}" >
                                        </div>
                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">تعداد سیم کارت</label>
                                        <div>
                                            <input type="text" class="form-control"name="sim"value="{{old('sim')}}" >
                                        </div>
                                            </div> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3">
                                        <label class=" control-label">عکس 1</label><span class="error" style="color:#dc3545">*</span>
                                        
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image1">
                                                <label class="custom-file-label" >انتخاب عکس</label>
                                            </div>
                                            </div>
                                            <div class="col-3">
                                        <label class=" control-label">عکس 2</label>
                                        
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image2">
                                                <label class="custom-file-label" >انتخاب عکس</label>
                                            </div>
                                            </div>
                                            <div class="col-3">
                                        <label class=" control-label">عکس 3</label>
                                        
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image3">
                                                <label class="custom-file-label" >انتخاب عکس</label>
                                            </div>
                                            </div>
                                            <div class="col-3">
                                        <label class=" control-label">عکس 4</label>
                                        
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image4">
                                                <label class="custom-file-label" >انتخاب عکس</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">توضیحات</label>
                                        <textarea name="description"rows="10"cols="30"class="form-control">{{old('description')}}</textarea>
                                    </div>
                                    
                                    
                                    <div>
                                        <button type="submit" class="btn btn-info">افزودن محصول</button>
                                    </div> 
                                </div>
                            </form>
                        </div>

                    </div>
                    </section>
                    @endsection
                    </body>
                    </html>






