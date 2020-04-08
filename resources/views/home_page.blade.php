<html>



    <head></head>
    <body>

        @extends('master')
        @section('content')
        <!--  Slider_start  -->
        <div class="home-full big-header">
            <div class="slide_1 owl-carousel owl-theme">
                <div>
                    <img src="assets/images/slider/3.jpg" alt="" class="bg-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto">
                                <div class="slider-content">
                                    <div>
                                        <h1 class="top" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">شرکت <span class="sec_one">آذرسای</span></h1>
                                        <h3 data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="">وارد کننده و نماینده رسمی گوشی های سامسونگ هوآوی و آیفون
                                            .</h3>
                                        <a class="slider_btn theme_btn btn_5" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown" href="#">
                                            ادامه مطلب<span class="theme_btn_eff"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="assets/images/slider/4.jpg" alt="" class="bg-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto">
                                <div class="slider-content">
                                    <div>
                                        <h1 class="top" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">شرکت<span class="sec_one">آذرسای</span></h1>
                                        <h3 data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="">وارد کننده و نماینده رسمی گوشی های سامسونگ هوآوی و آیفون
                                            .</h3>
                                        <a class="slider_btn theme_btn btn_5" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown" href="#">
                                            ادامه مطلب<span class="theme_btn_eff"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--  Slider_End  -->





        <!-- Our Service Start -->
        <section id="service" class="cmn_bg cmn_bg-3">
            <ul class="plus_decore">
                <li></li>
                <li></li>
            </ul>
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
        <!-- Our Service End -->



        <!-- Rating Start -->
        <section id="rating" class="rating_sec home_rate_2 home_rate_3 blur-up lazyload">
            <div class="container" style="height:150px">

            </div>
        </section>
        <!-- Rating End -->



        <!-- Our Team Start -->
        <section class="home_1_team cmn_bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="con_title team_title">
                            <h2>فروشگاه</h2>
                            <h6><span>جدیدترین محصولات</span></h6>
                        </div>
                    </div>
                    
                    @foreach($products as $p)
                    <div class="col-md-4">
                        
                        <div class="item">
                            
                                <div class="team_sec"style="height:350px" >
                                    <a href="/shop" style="height:250px" ><img src="../assets/images/productsimages/{{$p->image1}}" class="img-fluid blur-up lazyload " alt="phoneimage"></a>
                                    <div class="team_details">
                                        <div>
                                            <h4>{{$p->name}} ظرفیت {{$p->storage}} </h4>
                                            @if(!auth()->user())
                                                            <h4>{{$p->customerprice}} تومان</h4>

                                                            @elseif(auth()->user()->branch==1)
                                                                <h4>{{$p->branchprice}} تومان</h4>
                                                                @else
                                                                <h4>{{$p->customerprice}} تومان</h4>
                                                            @endif
                                            <h6 class="readmore"><a href="/shop" style="color:#fe7d0b">مشاهده فروشگاه</a></h6>

                                        </div>
                                    </div>
                                </div>
                            
                            </div>  
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our Team Start -->

        <!-- Testimonial Start -->
        <section class="testimonial home_5_testimonial testimonial-cleaning">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="con_title team_title">
                                <h2>درباره ما</h2>
                                <h6><span>درباره شرکت آذرسای</span></h6>
                            </div>
                            <div class="container">
                            <div class="row">
                            <div class="col-12" style="text-align: center;">
                                <p>شرکت مهندسی آذرسای خلیج فارس با نام تجاری آذرسای فعالیت خود رااز سال 1393 در زمینه تلفن همراه آغاز نموده است.</p>
                                <p>این شرکت قصد دارد با ایده های نو و عملکردی نوین و با بهره گیری از کادری مجرب گام های بلندی را در راستای ارتقای سطح کیفی سیستم فروش و خدمات پس از فروش به مشتریان عزیز ارائه دهد.</p>
                                <p>باشد که شما عزیزان ما را در این امر مهم یاری رسانید.</p>
                                <p>با تشکر شرکت آذرسای خلیج فارس</p>
                            </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- News Start -->
        <section class="home_1_news cmn_bg cmn_bg-3">
            <ul class="plus_decore">
                <li></li>
                <li></li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="con_title">
                            <h2>اخبار </h2>
                            <h6><span>آخرین اخبار</span></h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @foreach($news as $n)
                        
                        <div class="col-md-4" style="float:right">                     
                            <div class="item">
                                <div class="news_sec">
                                    
                                    <figure class="snip_con">
                                        <img src="assets/images/newsimages/{{$n->image}}" alt="" class="img-fluid blur-up lazyload"style="height:250px">
                                    </figure>
                                    <div class="text_p">
                                        <div class="date_sec">
                                            <div>
                                                <h4>{{jdate($n->created_at)->format('%d')}}</h4>
                                                <h6>{{jdate($n->created_at)->format('%B')}}</h6>
                                            </div>
                                        </div>
                                        <h4>{{$n->title}}</h4>
                                        <p><?php echo substr($n->body,0,150) ?></p>
                                        <h6 class="readmore"><a href="/co_news/{{$n->id}}">ادامه مطلب</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- News Start -->

        <!-- FAQ Start -->
        <section id="faq" class="faq_section home_faq_3 cleaning">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="con_title con_title_3">
                            <h2>سوالات متداول</h2>
                            <h6><span>و پاسخ ها</span></h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="accordion faq_sec" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            سامانه همتا چیست؟
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            همتا (سامانه هوشمند مدیریت تجهیزات ارتباطی)، سامانه‌ای است که در راستای اجرای طرح ثبت تلفن همراه (رجیستری)، پیاده سازی شده است. در این سامانه، هر دستگاه، تحت مالکیت یک سیم کارت قرار گرفته است. سیم کارت مالک دستگاه، قادر خواهد بود فرایندهای مختلف سامانه همتا از قبیل انتقال مالکیت و ... را برای دستگاه انجام دهد.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            شناسه (IMEI)چیست؟
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            شناسه دستگاه یا IMEI، یک شناسه بین‌المللی با 15 رقم است. این شناسه برای هر دستگاه با قابلیت نصب سیم‌کارت منحصربه‌فرد است. شناسه (IMEI) دستگاه، به تعداد اسلات دستگاه (شکاف برای قرارگیری سیم‌کارت) بستگی دارد و بر روی جعبه، پشت باتری یا با شماره‌گیری #06#*، قابل مشاهده است. برای انجام کلیه فرآیندها در سامانه همتا، باید 15 رقم ابتدایی این شناسه (IMEI)، بدون هرگونه علامت اضافی (ممیز، خط تیره و ...) استفاده شود.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            استعلام اصالت دستگاه چیست؟
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            یکی از اقداماتی که باید قبل از خرید دستگاه تلفن همراه توسط شخص خریدار انجام شود، استعلام اصالت است.برای راهنمایی بیشتر در این زمینه، آموزش استعلام اصالت دستگاه را مطالعه نمایید.

                                            برای راهنمایی بیشتر در این زمینه، آموزش استعلام اصالت دستگاه را مطالعه نمایید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- FAQ End -->
 @endsection
        
        
    </body>

</html>