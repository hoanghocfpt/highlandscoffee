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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>                              
                        </div>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Tên của bạn">
                        <input type="text" placeholder="Số điện thoại">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>                                  
                                </div>
                            </label>
                        </div><div class="payment-item">
                            <input type="radio" name="pay" id="pay-1">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/zalopay.webp" alt="">
                                    </div>
                                    <div class="type-pay-name">Zalo Pay</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>                                  
                                </div>
                            </label>
                        </div><div class="payment-item">
                            <input type="radio" name="pay" id="pay-1">
                            <label for="">
                                <div class="type-pay">
                                    <div class="type-pay-img">
                                        <img src="images/thetindung.png" alt="">
                                    </div>
                                    <div class="type-pay-name">Thẻ tín dụng</div>
                                </div>
                                <div class="input">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
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
                        <div class="product-item">
                            <div class="img-product">
                                <img src="images/freeze.png" alt="">
                            </div>
                            <div class="heading-product">
                                <span class="name-product">Frezze Trà Xanh</span>
                                <div class="size-product">Size M</div>
                                <div class="quantity">
                                    <div class="minus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                        </svg>
                                          
                                    </div>
                                    <div id="quantity-product">1</div>
                                    <div class="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                          
                                    </div>
                                </div>
                            </div>
                            <div class="price-product">
                                49.000
                            </div>
                            <div class="delete-product">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                  
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="img-product">
                                <img src="images/freeze.png" alt="">
                            </div>
                            <div class="heading-product">
                                <span class="name-product">Frezze Trà Xanh</span>
                                <div class="size-product">Size M</div>
                                <div class="quantity">
                                    <div class="minus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                        </svg>
                                          
                                    </div>
                                    <div id="quantity-product">1</div>
                                    <div class="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                          
                                    </div>
                                </div>
                            </div>
                            <div class="price-product">
                                49.000
                            </div>
                            <div class="delete-product">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                  
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="img-product">
                                <img src="images/freeze.png" alt="">
                            </div>
                            <div class="heading-product">
                                <span class="name-product">Frezze Trà Xanh</span>
                                <div class="size-product">Size M</div>
                                <div class="quantity">
                                    <div class="minus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                        </svg>
                                          
                                    </div>
                                    <div id="quantity-product">1</div>
                                    <div class="plus">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                          
                                    </div>
                                </div>
                            </div>
                            <div class="price-product">
                                49.000
                            </div>
                            <div class="delete-product">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="discount-and-bill">
                        <div class="discount-code">
                            <span>Bạn có mã giảm giá?</span>
                            <input type="text" name="" id="" placeholder="Nhập mã giảm giá">
                        </div>
                        <div class="bill">
                            <div class="into-money">
                                <div class="thanhtien">
                                    <span>Thành tiền</span>
                                    <span>111.400</span>
                                </div>
                                <div class="phigiaohang">
                                    <span>Phí giao hàng</span>
                                    <span>12.400</span>
                                </div>
                                <div class="khuyenmai">
                                    <span>Khuyến mãi</span>
                                    <span>-1.400</span>
                                </div>
                            </div>
                            <div class="total">
                                <div class="tt">
                                    <span>Tổng cộng</span>
                                    <span>114.000</span>
                                </div>
                                <div class="btn-to-order">
                                    <input type="submit" value="Đặt đơn hàng">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <!-- FOOTER  -->
        <?php 
            include 'html/footer.php';
        ?>
    </div>


    <script src="js/cart.js"></script>
</body>
</html>