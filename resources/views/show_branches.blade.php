<html>
    <head></head>
    <body>
        @extends('master')
        @section('content')
        <!-- Breadcrumb Start -->
        <div class="bread_crumb blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h2>نمایندگی ها</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> نمایندگی ها</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        <section id="service" class="cmn_bg cmn_bg-3">
            
            <div class="container our_service_2 our_service_3 our_service_5" id="showbranches">
                <div class="row">
                    <div class="col-12">
                        <div class="con_title con_title_5">
                            <h2>نمایندگی ها</h2>
                            <h6><span>لیست نمایندگی ها</span></h6>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        
                                        <table style="table-layout:fixed;">
					<thead>
					<!-- start table's head. for xs view we write the headers in the style.css-->
					<tr class="table100-head">
						<th>نمایندگی</th>
                                                <th>نام و نام خانوادگی</th>
                                                <th>تلفن</th>
                                                <th>موبایل</th>
                                                <th>استان</th>
                                                <th>شهر</th>
                                                <th style="width:30%">آدرس</th>
					</tr>
					<!-- end table's head -->
					</thead>
					<tbody>
					<!-- start table's body -->
					@foreach($branches as $b)
                                            <tr>  
                                                <td>{{$b->branchname}}</td>
                                                <td>{{$b->name}}</td>
                                                <td>{{$b->tell}}</td>
                                                <td>{{$b->mobile}}</td>
                                                <td>{{$b->country->name}}</td>
                                                <td>{{$b->state->name}}</td>
                                                <td>{{$b->address}}</td>
                                            </tr>
                                            @endforeach
					</tbody>
				</table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>

	

                </div>
            </div>
        </section>
        @endsection
    </body>
</html>

