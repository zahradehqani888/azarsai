<html>
    <head>
        
    </head>
    <body>
        @extends('master')
        @section('content')
        <!-- Breadcrumb Start -->
        <div class="bread_crumb blur-up lazyload">
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
        <section class="home_1_news cmn_bg cmn_bg-3">
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="con_title">
                            <h2>اخبار </h2>
                            <h6><span>همه خبرها</span></h6>
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
                                                <h6>{{jdate($n->created_at)->format('%B' )}}</h6>
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
        @endsection
    </body>
</html>



