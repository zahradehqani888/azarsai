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
                        <h1 class="m-0 text-dark">اخبار</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">اخبار</li>
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
                                <h3 class="card-title">افزودن خبر</h3>
                            </div>
                            <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        خبر با موفقیت اضافه شد.
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
                            <form class="form-horizontal"action="/addnews2"method="post"enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label  class=" control-label">عنوان خبر</label><span class="error" style="color:#dc3545">*</span>
                                        <div>
                                            <input type="text" class="form-control"name="title" value="{{old('title')}}" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">متن خبر</label><span class="error" style="color:#dc3545">*</span>
                                        <textarea name="body"rows="15"cols="30"class="form-control " id="ckeditor">{{old('body')}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class=" control-label">عکس</label><span class="error" style="color:#dc3545">*</span>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" >انتخاب عکس</label>
                                        </div>
                                        </div>
                                   <div class="card-footer">
                                        <button type="submit" class="btn btn-info">افزودن خبر</button>
                                    </div> 
                                </div>
                            </form>
                        </div>

                    </div>
                   </section>
                    @endsection
                    <script type="text/javascript" src="../ckeditor_4.1.1_full/ckeditor.js">
                     CKEDITOR.replace( 'ckeditor',
     {
       customConfig : 'config.js',
       toolbar : 'simple',

     })
                    </script>
                    </body>
                    </html>





