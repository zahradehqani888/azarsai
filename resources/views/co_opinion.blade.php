<!DOCTYPE html>
<html>
<head>
<style>
    .right{
        text-align: right;
    }

</style>

</head>
<body >
@extends('adminmaster')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">نظر سنجی</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">نظر سنجی</li>
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
                            <h5 class="m-0">مشاهده نظر کاربر <a href="/showopinion" class="btn btn-primary" style="float: left">برگشت</a></h5>

                        </div>
                        <br class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    نام و نام خانوادگی: {{$opinion->name}}
                                </div>
                                <div class="col-md-6">
                                    شماره ملی: {{$opinion->national_code}}

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    شماره تماس: {{$opinion->tel}}
                                </div>
                                <div class="col-md-6">
                                    مدل گوشی: {{$opinion->model}}

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    شماره سریال: {{$opinion->serial_no}}
                                </div>
                                <div class="col-md-6">
                                    تاریخ خرید: {{$opinion->buy_date}}

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    نام نمایندگی: {{$opinion->branch_name}}
                                </div>
                                <div class="col-md-6">
                                    شهر: {{$opinion->city}}
                                </div>
                            </div>
                        </div>
                        </br>
                            <table class="table table-hover" style="text-align: center;margin-bottom: 0px;">
                                <tr>
                                    <th></th>
                                    <th width="50%"></th>
                                    <th>ضعیف</th>
                                    <th>متوسط</th>
                                    <th>خوب</th>
                                    <th>عالی</th>

                                </tr>

                                    <tr>
                                        <td>1</td>
                                        <td class="right">قیمت محصولات :</td>
                                        <td>
                                            @if($opinion->q1==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q1==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q1==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif</td>
                                        <td>
                                            @if($opinion->q1==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="right">کیفیت ارائه خدمات سخت افزاری ونرم افزاری تعمیر :</td>
                                        <td>
                                            @if($opinion->q2==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q2==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q2==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q2==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="right"> میزان برطرف شدن ایراد دستگاه :</td>
                                        <td>
                                            @if($opinion->q3==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q3==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q3==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q3==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="right">نحوه اطلاع رسانی در مورد هزینه های انجام گرفته  :</td>
                                        <td>
                                            @if($opinion->q4==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q4==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q4==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q4==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="right">تعهد نمایندگی در خصوص مدت زمان تعمیر  :</td>
                                        <td>
                                            @if($opinion->q5==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q5==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q5==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q5==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="right">ارائه مستندات فعالیت های صورت گرفته :</td>
                                        <td>
                                            @if($opinion->q6==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q6==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q6==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif</td>
                                        <td>
                                            @if($opinion->q6==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="right">کیفیت بسته بندی محصولات  :</td>
                                        <td>
                                            @if($opinion->q7==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q7==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q7==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif</td>
                                        <td>
                                            @if($opinion->q7==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td class="right">میزان رضایت شما از خدمات پس از فروش  :</td>
                                        <td>
                                            @if($opinion->q8==1)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q8==2)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($opinion->q8==3)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif</td>
                                        <td>
                                            @if($opinion->q8==4)
                                                <i class="nav-icon fa fa-check"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    </table>
                        <table class="table table-hover" style="text-align: center;">
                            <tr>
                                <td>9</td>
                                <td class="right">  آیا شما قبلا از محصولات شرکت آذرسای خریداری نموده اید؟
                                {{$opinion->q9==1?'بله':'خیر'}}
                                </td>


                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="right">آیا نمایندگی اطلاعات کافی در مورد دستگاه را در اختیار شما قرار داده است؟
                                    {{$opinion->q10==1?'بله':'خیر'}}
                                </td>
                                </tr>
                        </table>

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







