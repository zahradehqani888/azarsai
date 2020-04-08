<html>
    <head>
        
    </head>
    <body>
        <!-- Nav Start -->
    <nav class="navbar nav_5 navbar-expand-lg navbar-light theme-nav" id="navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse default-nav" id="navbarSupportedContent">
                <ul class="navbar-nav" id="mymenu">
                    <li class="nav-item">
                        <a class="nav-link" href="/">خانه</a>
                        
                </li>
                
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> خدمات</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="
                        @if(!auth()->user())
                                    /repair
                                @elseif(auth()->user()->branch==1)
                                    /repair_branch
                                @else
                                    /repair
                                @endif
                                ">پیگیری تعمیرات</a></li>

                        <li class="nav-item"><a class="nav-link" href="/show_guarantee">بررسی صحت گارانتی</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">درخواست نمایندگی</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/showbranches">نمایندگی ها</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/shownews">اخبار</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">فروشگاه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/blog">بلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about_us">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us">تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addcomplaint"> شکایات و انتقادات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/add_opinion">نظرسنجی</a>
                </li>
                </ul>
            </div>
            <div class="search">
                <input type="search" title="Search" class="search-box" placeholder="در اینجا تایپ کنید.. " />
                <span class="search-button">
                    <span class="search-icon"></span>
                </span>
            </div>
        </div>
    </nav>
    <!-- Nav end-->
    </body>
</html>

