<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="author" content="pixelstrap">
    <meta name="description" content="Azarsai ">
    <meta name="keywords" content="Azarsai ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Site Title -->
    <title>شرکت آذرسای خلیج فارس</title>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="../assets/images/cleaning/Favicon.png">

    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Themify icon -->
    <link rel="stylesheet" href="../assets/css/themify.css">

    <!-- Flat icon icon -->
    <link rel="stylesheet" href="../assets/css/flaticon.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/aos.css">

    <!-- Owl carousel css-->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

    <!-- zoom css-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!-- Style css-->
    <link type="text/css" href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/color12.css"  media="screen" id="color">
    
    
    

</head>
<body class="rtl">

<header class="header-5">
    <!--Top-Section-->
    <div class="top-contact tap-contact-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-content">
                        <ul>
                            <li><i class="ti-location-pin" aria-hidden="true"></i>آدرس: فارس، شیراز، شهرک صبا، خیابان حجت کوچه 8  </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-social">
                        <ul>
                           
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        @if(!auth()->user())
                            <li class="my-account"style="padding-top:6px"><a class="btn btn-sm" href="/register"  >
                                    ثبت نام
                                </a></li>

                            <li class="my-account" style="padding-top:6px">

                                <a class="btn btn-sm" href="/login">
                                {{--<a class="btn btn-sm  dropdown-toggle" href="#"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                    ورود
                                </a>

                                {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                                    {{--<a class="dropdown-item" href="/login"><h6>ورود مشتری</h6></a>--}}
                                    {{--<a class="dropdown-item" href="/login"><h6>ورود نمایندگی</h6></a>--}}

                                {{--</div>--}}

                </li>
                            @else
                                <li class="my-account"style="padding-top:6px"><a class="btn btn-sm" >
                                        {{auth()->user()->name}}
                                    </a></li>

                                <li class="my-account"style="padding-top:6px"><a class="btn btn-sm" href="/logout"  >
                                        خروج
                                    </a></li>
                            @endif
<!--                            <li class="my-account"style="padding-top:9px"><a href="#" >ورود</a></li>-->
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-Top-Section-->
</header>
</body>
</html>

