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
                            <h2>بلاگ</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> بلاگ</strong></li>
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
                   <!-- <div class="recent_post">
                        <div class="r_post">
                            <div class="r_post_img">
                                <img src="assets/images/blog/20.jpg" class="" alt="">
                            </div>
                            <div class="text">
                                <p>لورم ایپسوم متن ساختگی با تولید.</p>
                                <p class="date">6 مرداد 1398</p>
                            </div>
                        </div>
                        <div class="r_post">
                            <div class="r_post_img">
                                <img src="assets/images/blog/21.jpg" class="" alt="">
                            </div>
                            <div class="text">
                                <p>لورم ایپسوم متن ساختگی با تولید.</p>
                                <p class="date">6 مرداد 1398</p>
                            </div>
                        </div>
                        <div class="r_post">
                            <div class="r_post_img">
                                <img src="assets/images/blog/22.jpg" class="" alt="">
                            </div>
                            <div class="text">
                                <p>لورم ایپسوم متن ساختگی با تولید.</p>
                                <p class="date">6 مرداد 1398</p>
                            </div>
                        </div>
                        <div class="r_post">
                            <div class="r_post_img">
                                <img src="assets/images/blog/23.jpg" class="" alt="">
                            </div>
                            <div class="text">
                                <p>لورم ایپسوم متن ساختگی با تولید.</p>
                                <p class="date">6 مرداد 1398</p>
                            </div>
                        </div>
                    </div>-->
                    
                    
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
                                        <div class="overflow-hidden"><img class="img-fluid  lazyload " src="../assets/images/blogimages/{{$article->image}}" alt="blog"></div>
                                    </div>
                                </div>
                                <div class="blog-text">
                        <h6>{{jdate($article->created_at)->format('%d %B %y')}}</h6><a href="#">
                        <h3 class="blog-head">{{$article->title}}</h3></a>
                        <div class="blog-divider"></div>
                        <div class="blog-description">
                            {{$article->body}}
                            </div>
                    </div>
                </div>
            </div>
                        <div>
                          
                        </div>
            <!-- blog details end-->
        </div>
<!--                    <?php if(count($comment)!=0): ?>
                    <div class="row">
            <div class="col-md-12">
                <h3 class="page-header-comment">نظرات :</h3>
                <div class="comment-list blog_comment">
                    @foreach($comment as $c)
                    <div class="comment_sec">
                        <article class="row">
                            <div class="col-12">
                                <div class="blog_center">
                                    <div>
                                        <figure class="thumbnail">
                                            <img src="../assets/images/blog/blog_icon_1.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="blog_user arrow left">
                                        <div class="panel-body">
                                            <header class="text-left">
                                                <div class="comment-user"><i class="fa fa-user"></i><h6>{{$c->user->name}}</h6></div>
                                                <div class="comment-date"><i class="fa fa-calendar"></i><h6> {{jdate($c->created_at)->format('%d %B %y')}} </h6></div>
                                            </header>
                                            <div class="comment-post">
                                                <p>{{$c->body}} </p>
                                            </div>
                                            <a href="#" class="btn btn-default btn-sm right"><i class="fa fa-reply"></i> پاسخ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
                     <hr>-->
<!--                    <?php endif; ?>
        <div class="row">
            <div class="col-sm-12">
                 Comment Sec End 
                <div class="quote_2 comment_form_sec">
                    <div class="quote_form">
                        
                        <h3 class="page-header-comment mb-4">نظرتان را بگذارید :</h3>
                         <?php if (Session::get('error')): ?>
                        
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        برای ثبت نظر باید عضو سایت باشید.
                                    </div>
                                </div>
                            <?php endif; ?> 
                        <form action="/add_blogcomment/{{$article->id}}" method="post">
                            @csrf
                            <div class="form-row">
                               <div class="form-group col-md-12">
                                    <label for="exampleTextarea">پیام :</label>
                                    <textarea class="form-control msg_coment" id="exampleTextarea" name="body" rows="3" placeholder="ارسال یک نظر" ></textarea>
                                </div>
                            </div>
                            <a class="quote_btn theme_btn" href="#"><button type='submit'>
                                ارسال نظر
                                <span class="theme_btn_eff"></span>
                                </button></a>
                                    </form>
                                </div>
                            </div>
                             leave comment section end
                        </div>
                    </div>-->
        
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Start -->
        @endsection
    </body>
</html>



