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
                            <h2>فروشگاه</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> فروشگاه</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        
        <!-- section start -->
<section class="section-b-space cmn_bg_yellow shop_page">

    <ul class="plus_decore">
        <li></li>
        <li></li>
    </ul>

    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block sidebar">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> بازگشت</span></div>
                        
                        
                        
                        <div class="theme-card">
                            <h5 class="title-border">جدیدترین محصولات</h5>
                            <div class="offer-slider slide-1">
                                <div>
                                    @foreach($product as $p)
                                    <div class="media">
                                        <a href="#"><img class="img-fluid" src="../assets/images/productsimages/{{$p->image1}}" alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="#"><h6>{{$p->name}}</h6></a>
                                             @if(!auth()->user())
                                                            <h4>{{$p->customerprice}} تومان</h4>
                                                            @elseif(auth()->user()->branch==1)
                                                                <h4>{{$p->branchprice}} تومان</h4>
                                                                @else
                                                                <h4>{{$p->customerprice}} تومان</h4>
                                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <!-- side-bar single product slider end -->
                    </div>
                    <div class="collection-sidebar-banner">
                        
                    </div>
                    <!-- side-bar banner end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                {{--<div class="top-banner-wrapper">
                                    <a href="#"><img src="images/3.jpg" class="img-fluid" alt=""></a>
                                    <div class="top-banner-content small-section">
                                        <h4>فروشگاه</h4>
                                        <h5>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است.</h5>
                                        <p>لورم ایپسوم به راحتی متن ساختاری چاپ و نشر صنعت است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                    </div>--}}
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> فیلتر</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="container">
            
                                                        <div class="product-buttons">
                                    <a class="theme_btn" href="/cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> سبد خرید 
                                        @if(session('cart'))
                        {{ count(session('cart')) }}
                    @endif
                                        <span class="theme_btn_eff"></span>
                                    </a>
                                    
                                </div>
        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                           @foreach($product as $p)
                                            <div class="col-md-4 col-6 col-grid-box">
                                                <div class="product-box" data-aos="zoom-out">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="/co_product/{{$p->id}}"><img src="assets/images/productsimages/{{$p->image1}}" class="img-fluid" alt="" ></a>
                                                            <div>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" class="add_hover add_search" title="مشاهده سریع"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                                <a href="#" title="لیست علاقه" class="add_hover add_wish"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="/add-to-cart/{{$p->id}}" title="سبد خرید" class="add_hover"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div>

                                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="/co_product/{{$p->id}}"><h6> {{$p->name}} ظرفیت {{$p->storage}} گیگابایت</h6></a>

                                                            @if(!auth()->user())
                                                            <h4>{{$p->customerprice}} تومان</h4>
                                                            @elseif(auth()->user()->branch==1)
                                                                <h4>{{$p->branchprice}} تومان</h4>
                                                                @else
                                                                <h4>{{$p->customerprice}} تومان</h4>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                        
                                            
                                       
                                       
                                        
                                    </div>

                                    <!-- pagination Start -->
                                    <div class="container">
                                        <div class="row">
                                         {!!$product->render()!!}
                                        </div>
                                    </div>
                                    <!-- pagination End -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
        @endsection
    </body>
</html>



