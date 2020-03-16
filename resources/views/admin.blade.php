<!DOCTYPE html>
<html>
<head>
  

</head>
<body >
    @extends('adminmaster')


  @section('content')

  

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">داشبورد</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">داشبورد</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>سفارش خرید</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>سفارش تعمیر</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>نمایندگی</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>بازدید جدید</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  نمایندگی ها
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list">
                    @foreach($branches as $b)
                  <li>
                      <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                    
                    <span class="text">نمایندگی {{$b->branchname}}</span>
                    <span class="text">{{$b->country->name}}</span>
                    <span class="text">{{$b->state->name}}</span>
                    
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  @endforeach
                  
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="/addbranch"><button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> افزودن</button></a>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            

            <!-- Calendar -->
            <div class="card bg-success-gradient">
              <div class="card-header no-border">

                <h3 class="card-title">
                  <i class="fa fa-calendar"></i>
                  تقویم
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">رویداد تازه</a>
                      <a href="#" class="dropdown-item">حذف رویدادها</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">نمایش تقویم</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  @endsection
</body>
</html>


