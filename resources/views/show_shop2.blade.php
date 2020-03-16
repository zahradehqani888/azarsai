<html>

<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .badge-notify{
            background:red;
            position:relative;
            top: -20px;
            right: 10px;
        }
        .my-cart-icon-affix {
            position: fixed;
            z-index: 999;
        }
    </style>
</head>

<body class="container" style="direction: rtl;">

<div class="page-header">
    <h1>Products
        <div style="float: right; cursor: pointer;">
            <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
        </div>
    </h1>
</div>



<div class="row">
    @foreach($product as $p)
    <div class="col-md-3 text-center">
        <img src="../assets/images/productsimages/{{$p->image1}}"  height="150px">
        <br>
        {{$p->name}} ظرفیت {{$p->storage}} گیگابایت
        <strong>
            @if(!auth()->user())
                <h4>{{$p->customerprice}} تومان</h4>
            @elseif(auth()->user()->branch==1)
                <h4>{{$p->branchprice}} تومان</h4>
            @else
                <h4>{{$p->customerprice}} تومان</h4>
            @endif
        </strong>
        <br>
        <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="10" data-quantity="1" data-image="images/img_1.png">Add to Cart</button>
        <a href="#" class="btn btn-info">Details</a>
    </div>
@endforeach


</div>


<script src="js/jquery-2.2.3.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery.mycart.js"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            currencySymbol: '$',
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            classProductQuantity: 'my-product-quantity',
            classProductRemove: 'my-product-remove',
            classCheckoutCart: 'my-cart-checkout',
            affixCartIcon: true,
            showCheckoutModal: true,
            numberOfDecimals: 2,
            cartItems: [
                {id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
                {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
                {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
            ],
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            },
            afterAddOnCart: function(products, totalPrice, totalQuantity) {
                console.log("afterAddOnCart", products, totalPrice, totalQuantity);
            },
            clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
                console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
            },
            checkoutCart: function(products, totalPrice, totalQuantity) {
                var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
                checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
                $.each(products, function(){
                    checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
                });
                alert(checkoutString)
                console.log("checking out", products, totalPrice, totalQuantity);
            },
            getDiscountPrice: function(products, totalPrice, totalQuantity) {
                console.log("calculating discount", products, totalPrice, totalQuantity);
                return totalPrice * 0.5;
            }
        });

        $("#addNewProduct").click(function(event) {
            var currentElementNo = $(".row").children().length + 1;
            $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
        });
    });
</script>

</body>

</html>
