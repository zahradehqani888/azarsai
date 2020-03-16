<html>
    <head>       
    </head>
    <body>
        @extends('master')
        @section('content')
        <section class="home_1_news blog_side_sec cmn_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="quote_2 comment_form_sec">
                    <div class="quote_form">
                        <h6 >{{$ncomment->user->name}}</h6>
                        <h6 >{{$ncomment->body}}</h6>
                        
                        <?php if (Session::get('error')): ?>
                        
                                <div class="container" style="padding-top: 20px">
                                    <div class="alert alert-secondary alert-dismissible fade show text-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        برای ثبت نظر باید عضو سایت باشید.
                                    </div>
                                </div>
                        <?php endif; ?> 
                        <form class="form-contact comment_form" action="reply2/{{$ncomment->body}}/{{$ncomment->user->id}}"method="post" id="commentForm" >
                      @csrf
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea  class="form-control w-100" name="rbody" id="comment" cols="30" rows="7"
                                 placeholder="پاسخ شما"></textarea>
                           </div>
                        </div>
                         </div>
                     <div class="form-group">
                                         <a class="theme_btn"  href=""><button type="submit"  >ارسال</button>
                                        <span class="theme_btn_eff"></span>
                                         </a>
                                       </div>
                  </form>
                        
                                </div>
                
                            <!-- leave comment section end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
    </body>
</html>


