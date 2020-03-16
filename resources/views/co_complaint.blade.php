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
            <h1 class="m-0 text-dark">شکایات و انتقادات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">شکایات و انتقادات</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-1"></div>
                            <div class="col-10">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">{{$complaint->name}} {{$complaint->family}}</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title mb-2 text-bold">متن پیام</h6>

                <p class="card-text">{{$complaint->message}}</p>
                <a href="/showcomplaints" class="btn btn-primary">برگشت</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
        @endsection
    </body>
</html>







