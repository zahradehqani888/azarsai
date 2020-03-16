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
                                <h3 class="card-title">ویرایش محصول</h3>
                            </div>
                            <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        محصول با موفقیت بروزرسانی شد.
                                    </div>
                                </div>
                            <?php endif; ?> 

                            <form class="form-horizontal"action="/updateproduct2/{{$product->id}}"method="post"enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label  class=" control-label">نام محصول</label><span class="error" style="color:#dc3545">*</span> 

                                                <input type="text" class="form-control"name="name" value="{{$product->name}}" >

                                            </div>
                                            <div class="col-4">
                                                <label  class=" control-label">ظرفیت (گیگابایت)</label>
                                                <input type="text" class="form-control"name="storage" value="{{$product->storage}}" >
                                            </div>
                                            <div class="col-4">
                                                <label  class=" control-label">رنگ</label>
                                                <select class="form-control"name="color">
                                                    @foreach($colors as $color)
                                                        <option value="{{$color->id}}" <?php echo($color->name==$product->color)?'selected':'' ?> >{{$color->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="row">
                                            <div class="col-4">
                                                <label  class=" control-label">تعداد</label>
                                                <input type="text" class="form-control"name="number" value="{{$product->number}}" >
                                            </div>
                                            <div class="col-4">
                                                <label  class=" control-label">قیمت مشتری(تومان)</label><span class="error" style="color:#dc3545">*</span>
                                                <input type="text" class="form-control"name="customerprice"value="{{$product->customerprice}}"  >
                                            </div>
                                            <div class="col-4">
                                                <label  class=" control-label">قیمت نمایندگی(تومان)</label><span class="error" style="color:#dc3545">*</span>
                                                <input type="text" class="form-control"name="branchprice"value="{{$product->branchprice}}"  >
                                            </div>
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3">
                                                <label  class=" control-label">سیستم عامل</label>

                                                <input type="text" class="form-control"name="os"value="{{$product->os}}" >

                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">باتری</label>

                                                <input type="text" class="form-control"name="battery"value="{{$product->battery}}" >

                                            </div>
                                            <div class="col-3">
                                                <label  class=" control-label">اندازه (اینچ)</label>

                                                <input type="text" class="form-control"name="display"value="{{$product->display}}" >

                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">وزن (گرم)</label>

                                                <input type="text" class="form-control"name="weight" value="{{$product->weight}}">

                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3">
                                                <label  class=" control-label">RAM (گیگابایت)</label>

                                                <input type="text" class="form-control"name="ram"value="{{$product->ram}}" >

                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">رزولوشن عکس (مگاپیکسل)</label>

                                                <input type="text" class="form-control"name="camera"value="{{$product->camera}}" >

                                            </div>
                                            <div class="col-3">
                                                <label  class=" control-label">پردازنده</label>

                                                <input type="text" class="form-control"name="Processor"value="{{$product->processor}}" >

                                            </div> 
                                            <div class="col-3">
                                                <label  class=" control-label">تعداد سیم کارت</label>

                                                <input type="text" class="form-control"name="sim"value="{{$product->sim}}" >

                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class=" control-label">عکس 1</label><span class="error" style="color:#dc3545">*</span>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-times" style="color:black"></i></button>
                                                        <div>        
                                                            <img src="../assets/images/productsimages/{{$product->image1}}" style="height: 150px;" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image1">
                                                    <label class="custom-file-label" >تغییر عکس</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <label class=" control-label">عکس 2</label>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-times" style="color:black"></i></button>
                                                        <div>        
                                                            <img src="../assets/images/productsimages/{{$product->image2}}" style="height: 150px;" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image2"value="{{$product->image2}}">
                                                    <label class="custom-file-label" >تغییر عکس</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class=" control-label">عکس 3</label>
                                                    <div class="card">
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-times" style="color:black"></i></button>
                                                        <div>        
                                                            <img src="../assets/images/productsimages/{{$product->image3}}" style="height: 150px;" >
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image3"value="{{$product->image3}}">
                                                        <label class="custom-file-label" >تغییر عکس</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-6">
                                                    <label class=" control-label">عکس 4</label>
                                                    <div class="card">
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-times" style="color:black"></i></button>
                                                        <div>        
                                                            <img src="../assets/images/productsimages/{{$product->image4}}" style="height: 150px;" >
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image4" value="{{$product->image4}}">
                                                        <label class="custom-file-label" >تغییر عکس</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="form-group">
                                        <label  class=" control-label">توضیحات</label>
                                        <textarea name="description"rows="10"cols="30"class="form-control">{{$product->description}}</textarea>
                                    </div>


                                    <div>
                                        <button type="submit" class="btn btn-info">ویرایش </button>
                                    </div> 
                                </div>
                            </form>
                        </div>

                    </div>
                    </section>
                    @endsection
                    </body>
                    </html>








