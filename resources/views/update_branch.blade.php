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
                        <h1 class="m-0 text-dark">نمایندگی ها</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">نمایندگی ها</li>
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
                                <h3 class="card-title">ویرایش نمایندگی</h3>
                            </div>
                            <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        نمایندگی مورد نظر با موفقیت به روز رسانی شد.
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

                            <form class="form-horizontal"action="/updatebranch2/{{$branch->id}}"method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                        <label  class=" control-label">نام نمایندگی</label>
                                        <input type="text" class="form-control"name="branchname" value="{{$branch->branchname}}">
                                        </div>
                                   
                                    
                                            <div class="col-6">
                                        <label  class=" control-label">نام و نام خانوادگی</label>
                                        <input type="text" class="form-control"name="name"value="{{$branch->name}}" >
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                        <label  class=" control-label">شماره ملی</label>
                                        <input type="text" class="form-control"name="nationalcode" value="{{$branch->nationalcode}}">
                                        </div>
                                        <div class="col-6">
                                        <label  class=" control-label">ایمیل</label>
                                        <input type="text" class="form-control"name="email" value="{{$branch->email}}">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label  class=" control-label">تلفن</label>  
                                                <input type="text" class="form-control"name="tell" value="{{$branch->tell}}" >

                                            </div>
                                            <div class="col-6">
                                                <label  class="control-label">موبایل</label>
                                                <input type="text" class="form-control"name="mobile" value="{{$branch->mobile}}" >
                                            </div>
                                        </div>   
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-6">
                                                <label  class="control-label">استان</label>
                                                <select id="country" name="country" class="form-control" >
                                                <option value="" selected disabled></option>
                                                    @foreach($countries as $key => $country)
                                                    <option value="{{$key}}"> {{$country}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-6">
                                                <label  class="control-label">شهر</label>
                                                <select name="state" id="state" class="form-control" >
                                                </select>
                                                {{--<select class="form-control"name="state"id="state" runat="server" value="{{$branch->state}}">--}}
                                                    {{--<option value="{{$branch->city}}">{{$branch->state->name}}</option>--}}
                                                    {{----}}
                                                {{--</select> --}}
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">آدرس</label>
                                        <textarea name="address"rows="4"cols="30"class="form-control">{{$branch->address}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" control-label">کدپستی</label>
                                        <input type="text" class="form-control"name="code" value="{{$branch->code}}" >
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-info">ویرایش</button>
                                    </div> 
                                </div>
                            </form>
                        </div>

                    </div>
                    </section>

                    @endsection
                    </body>
                    </html>










