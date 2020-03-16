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
                            <h2>تماس با ما</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb" >
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> تماس با ما</strong></li>
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
                        <h3 class="title" >تماس با ما</h3>
                        <p>اگر سوال یا پیشنهادی دارید می توانید از طریق فرم روبرو پیام خود را ارسال کنید.  </p>
                        <div class="contect_info">
                            <div class="contect-title">
                                <h3 class="title">اطلاعات</h3>
                            </div>
                            <div class="contant-text">
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>آدرس: شیراز ، خیابان ملاصدرا</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>تماس با ما: 09177381659</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>ایمیل به ما: info@azarsai.com</li>
                                    <li><i class="fa fa-fax" aria-hidden="true"></i>فکس: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- leave comment sectopn starts-->
                    <div class="col-lg-8 center">
                        <div class="angle angle-right"></div>
                        <div class="quote_2 comment_form_sec">
                            <div class="container bg-transparent">
                                <div class="row">
                                    <div class="col-12 quote_form">
                                        <h3 class="page-header-comment mb-4">ارسال پیام :</h3>
                                        
                                        <form action=""method="post">
                                            
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>نام :</label>
                                                    <input type="text"name="name" class="form-control"  >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >ایمیل:</label>
                                                    <input type="text"name="family" class="form-control"  >
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label >پیام :</label>
                                                    <textarea name="message" class="form-control"  rows="7"  ></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                         <a class="theme_btn" href="">ارسال
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


