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
                            <h2>سبد خرید</h2>
                        </div>
                    </div>
                    <div class="col-md-6 sec_low">
                        <div class="functionalities">
                            <ul id="breadcrumb" class="breadcrumb">
                                <li><a  href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> سبد خرید</strong></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Breadcrumb Start -->
        
        <!--section start-->
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
                            <a href="#" class="icon"><i class="fa fa-times remove-from-cart" data-id="{{ $id }}" aria-hidden="true"></i></a>
                            <a href="#" class="icon update-cart" ><i class="fa fa-refresh" aria-hidden="true"></i></a>
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
<!--section end-->

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
        @endsection
    </body>
</html>





