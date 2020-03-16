<html>
    <head>       
    </head>
    <body>
        @extends('master')
        @section('content')
        <!-- Breadcrumb Start -->
        <div class="bread_crumb  lazyload">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h2>اخبار</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> اخبار</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        <!-- News Start -->
<section class="home_1_news blog_side_sec cmn_bg">
    
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3 blog_cat">
                <div class="blog_sidebar">
                    
                    <div class="blog_side_title">
                        <h6>پست های اخیر</h6>
                    </div>
                    <div class="recent_post">
                     @foreach($allnews as $all)
                        <div class="r_post">
                            <div class="r_post_img">
                                <img src="../assets/images/blog/20.jpg" class="" alt="">
                            </div>
                            <div class="text">
                                <p>{{$all->title}}</p>
                                <p class="date">{{jdate($all->created_at)->format('%d %B %y')}}</p>
                            </div>
                        </div>
                       @endforeach 
                    
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-lg-9">
                <div class="blog-shadow">
                    <div class="row">
                        <!-- blog details starts-->
                        <div class="col-sm-12">
                            <div class="single_blog_item">
                                <div class="blog-block">
                                    <div class="blog-box">
                                        <div class="overflow-hidden"><img class="img-fluid  lazyload " src="../assets/images/newsimages/{{$news->image}}" alt="blog"></div>
                                    </div>
                                </div>
                                <div class="blog-text">
                        <h6>{{jdate($news->created_at)->format('%d %B %y')}}</h6><a href="#">
                        <h3 class="blog-head">{{$news->title}}</h3></a>
                        <div class="blog-divider"></div>
                        <div class="blog-description">
                            {{strip_tags($news->body)}}
                            </div>
                    </div>
                </div>
            </div>
            <!-- blog details end-->
        </div>

                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Start -->
        @endsection
    </body>
</html>

