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
            <h1 class="m-0 text-dark">استان</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">استان</li>
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
                <h3 class="card-title">افزودن استان</h3>
              </div>
               
                
              <?php if(Session::get('success')): ?>
                <div class="container" style="padding-top: 20px">
			<div class="alert alert-secondary alert-dismissible fade show text-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				استان مورد نظر با موفقیت اضافه شد.
			</div>
                </div>
              <?php endif; ?>  
              <form class="form-horizontal"action="/addprovince2"method="post">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">استان</label>

                    <div>
                      <input type="text" class="form-control"name="title" id="inputEmail3" >
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ثبت</button>
                  <a href="/addcity" style="padding-right: 15px"><button type="button" class="btn btn-info">افزودن شهر</button></a>
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


