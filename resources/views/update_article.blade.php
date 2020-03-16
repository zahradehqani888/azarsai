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
                    <h1 class="m-0 text-dark">مقالات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">مقالات</li>
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
                            <h3 class="card-title">ویرایش مقاله</h3>
                        </div>
                        <?php if (Session::get('success')): ?>
                        <div class="container" style="padding-top: 20px">
                            <div class="alert alert-secondary alert-dismissible fade show text-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                مقاله با موفقیت بروزرسانی شد.
                            </div>
                        </div>
                        <?php endif; ?>

                        <form class="form-horizontal"action="/updatearticle2/{{$article->id}}"method="post"enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">دسته</label>
                                    <select class="form-control"name="category">

                                        @foreach($category as $c)
                                            <option <?php echo($article->category==$c->name)?'selected':'' ?>>{{ $c->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label  class=" control-label">عنوان مقاله</label>
                                    <input type="text" class="form-control"name="title" value="{{$article->title}}" >
                                </div>
                                <div class="form-group">
                                    <label  class=" control-label">متن مقاله</label>
                                    <textarea name="body"rows="10"cols="30"class="form-control">{{$article->body}}</textarea>
                                </div>
                                <div class="form-group ">
                                    <label class=" control-label">عکس </label>

                                    <div class="card">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-times" style="color:black"></i></button>
                                            <div>
                                                <img src="../assets/images/newsimages/{{$article->image}}"style="height:250px">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" >انتخاب عکس</label>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info">ویرایش مقاله</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
    </section>
@endsection
</body>
</html>








