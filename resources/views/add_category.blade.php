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
            <h1 class="m-0 text-dark">دسته بندی بلاگ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">دسته بندی بلاگ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        
<section class="content">
      <div class="container-fluid">
        <div class="row">
          
            <div class='col-md-3'></div>
          <div class="col-md-6">
            
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">افزودن دسته</h3>
              </div>
              <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        دسته جدید با موفقیت اضافه شد.
                                    </div>
                                </div>
                            <?php endif; ?> 
              <form class="form-horizontal"action="/addcategory2"method="post">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">دسته</label>

                    <div>
                      <input type="text" class="form-control"name="name"  >
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">افزودن دسته</button>
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





