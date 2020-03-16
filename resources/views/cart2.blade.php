<html>
<head>

    <meta charset="utf-8">
    <meta name="author" content="pixelstrap">
    <meta name="description" content="Azarsai ">
    <meta name="keywords" content="Azarsai ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Site Title -->
    <title>Azarsai</title>

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
<body>
<div class="container">

    <section class="cart-section section-b-space cmn_bg_yellow">

        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-sm">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">تصویر</th>
                            <th scope="col">نام محصول</th>
                            <th scope="col">قیمت</th>
                            <th scope="col">تعداد</th>
                            <th scope="col">اقدام</th>
                            <th scope="col">مجموع</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr>
                                    <td>
                                        <a href="#"><img src="../assets/images/productsimages/{{ $details['image'] }}" alt=""></a>
                                    </td>
                                    <td><a href="#">{{ $details['name'] }}</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col-xs-3">
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <input type="text" name="quantity" class="form-control input-number" value="{{ $details['quantity'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color">{{ $details['price'] }}تومان</h2></div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color"><a href="#" class="icon"><i class="fa fa-times" aria-hidden="true"></i></a></h2></div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>{{ $details['price'] }}تومان</h2></td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number" value="{{ $details['quantity'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="/removefromcart/{{$id}}" class="icon"><i class="fa fa-times " data-id="{{ $id }}" aria-hidden="true"></i></a>
                                        <a href="#" class="icon update-cart" ><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>

                                    </td>

                                    <td>
                                        <h2 class="td-color">  {{ $details['price'] * $details['quantity'] }} تومان  </h2></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>

                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                        <tr>

                            <td class="hidden-xs">
                                <h2><span style="color:#222222;">قیمت کل :</span>   {{ $total }}تومان   </h2></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-sm-6">
                    <a class="theme_btn rtl_r" href="/shop">
                        ادامه خرید
                        <span class="theme_btn_eff"></span>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="theme_btn" href="/checkout">
                        پرداخت
                        <span class="theme_btn_eff"></span>
                    </a>
                </div>
            </div>
        </div><br>



    </section>
</div>
<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
</body>
</html>
