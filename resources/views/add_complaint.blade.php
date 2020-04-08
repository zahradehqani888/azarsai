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
                            <h2>شکایات و انتقادات</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb" >
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> شکایات و انتقادات</strong></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        
       <!-- Contact-us Start -->
<section class="contact-section cmn_bg">
    <ul class="plus_decore">
        <li></li>
        <li></li>
    </ul>
    <!-- leave comment sectopn starts-->
    <div class="comment_form contact_form contect_f">
        <div class="text-xl-right">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 contact_text">
                        <div class="angle angle-left"></div>
                        <h3 class="title" >فرم ثبت شکایات و انتقادات</h3>
                        <p>اگر شکایت یا انتقادی دارید می توانید از طریق فرم روبرو پیام خود را ارسال کنید. کارشناسان ما در اسرع وقت به پیام ها رسیدگی می کنند. </p>
                        
                    </div>
                    <!-- leave comment sectopn starts-->
                    <div class="col-lg-8 center">
                        <div class="angle angle-right"></div>
                        <div class="quote_2 comment_form_sec">
                            <div class="container bg-transparent">
                                <div class="row">
                                    <div class="col-12 quote_form">
                                        <h3 class="page-header-comment mb-4">ارسال پیام :</h3>
                                        <?php if (Session::get('success')): ?>
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        پیام شما با موفقیت ارسال شد.
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
                                        <form action="/addcomplaint2"method="post">
                                            
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>نام :</label><span class="error" style="color:#dc3545">*</span>
                                                    <input type="text"name="name" class="form-control" value="{{old('name')}}" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >نام خانوادگی:</label><span class="error" style="color:#dc3545">*</span>
                                                    <input type="text"name="family" class="form-control" value="{{old('family')}}" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>شماره تماس :</label><span class="error" style="color:#dc3545">*</span>
                                                    <input type="text"name="tel" class="form-control"  value="{{old('tel')}}">
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label >ایمیل :</label>
                                                    <input type="text"name="email" class="form-control" value="{{old('email')}}" >
                                                </div>
                                                <div class="form-group col-md-12"><span class="error" style="color:#dc3545">*</span>
                                                    <label >پیام :</label>
                                                    <textarea name="message" class="form-control"  rows="7">{{old('message')}}</textarea>
                                                </div>
                                            </div>
                                            
                                            
                                                <div class="form-group">
                                         <a class="theme_btn" href=""><button type="submit"  >ارسال</button>
                                        <span class="theme_btn_eff"></span>
                                         </a>
                                       </div>
                                        
                                    
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- leave comment section end-->
                </div>
            </div>
        </div>
    </div>
    <!-- leave comment section end-->
</section>
<!-- Contact-us End -->



        @endsection
    </body>
</html>
