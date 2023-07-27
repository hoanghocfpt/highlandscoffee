<?php 
    session_start();
    $cart = [];
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
        // print_r($cart);
    };
    include 'php/getUser.php';
    $kq = getUser();
    // print_r($kq);
    
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div class="container">
        <?php 
            include 'html/nav.php';
        ?>

        <main class="container-order">
            <div class="deli-and-pay">
                <h1>Xác nhận đặt hàng</h1>
                <div class="delivery-to">
                    <span class="heading">Giao hàng tới</span>
                    <div class="address">
                        <div class="img-adr">
                            <img src="images/delivery.webp" alt="">
                        </div>
                        <div class="adr">QTSC 9 Building, đường Tô Ký, Quận 12, Tp. Hồ Chí Minh</div>
                        <div class="icon-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Tên của bạn" value="<?php if(count($kq) > 0){echo $kq[0]['name']; }; ?>">
                        <input type="text" placeholder="Số điện thoại" value="<?php if(count($kq) > 0){echo $kq[0]['phone']; }; ?>">
                        <input type="text" placeholder="Ghi chú mua hàng">
                    </div>
                </div>
                <div class="payment-term">
                    <span class="heading">Phương thức thanh toán</span>
                    <div class="payment-list">
                        <div class="payment-item">
                            <input type="radio" name="pay" id="pay-1">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/tienmat.png" alt="">
                                    </div>
                                    <div class="type-pay-name">Tiền mặt</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                        <div class="payment-item">
                            <input type="radio" name="pay" id="pay-2">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/momo.webp" alt="">
                                    </div>
                                    <div class="type-pay-name">Momo</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                        <div class="payment-item">
                            <input type="radio" name="pay" id="pay-1">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/zalopay.webp" alt="">
                                    </div>
                                    <div class="type-pay-name">Zalo Pay</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                        <div class="payment-item">
                            <input type="radio" name="pay" id="pay-1">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/thetindung.png" alt="">
                                    </div>
                                    <div class="type-pay-name">Thẻ tín dụng</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="your-order">
                <div class="heading">Đơn hàng của bạn</div>
                <div class="container-your-order">
                    <div class="products">
                        <?php
                        include 'php/loadProductCart.php';
                        echo loadProductCart($cart); ?>
                    </div>
                    <div class="discount-and-bill">
                        <?php
                        include 'php/totalCart.php';
                        echo totalCart($cart); ?>
                    </div>
                </div>
            </div>
        </main>


        <!-- FOOTER  -->
        <?php 
            include 'html/footer.php';
        ?>
    </div>


    <!-- <script src="js/cart.js"></script> -->
</body>

</html>