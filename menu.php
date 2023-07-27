<?php
    session_start();
    $cart = [];
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
    };
    include 'php/loadProductMenu.php';
    
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div class="container">
        <?php 
            include 'html/nav.php';
        ?>
        <div class="main">
            <div class="menu-list">
                <ul class="bac1">
                    <div class="alllist">
                        <span class="alllist-click">Tất cả</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <div class="list">
                        <li>
                            <ul class="bac2"> <span class="name-click"> Cà phê</span>
                                <li><span class="name-click">Cà phê Phin</span></li>
                                <li><span class="name-click">Phindi</span></li>
                                <li><span class="name-click">Expresso</span></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="bac2"> <span class="name-click">Freeze</span>
                                <li><span class="name-click">Freeze cà phê Phin</span></li>
                                <li><span class="name-click">Freeze không cà phê</span></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="bac2"> <span class="name-click">Trà</span>
                                <li><span class="name-click">Trà sen</span></li>
                                <li><span class="name-click">Trà thạch</span></li>
                                <li><span class="name-click">Trà nhiệt đới</span></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="bac2"> <span class="name-click"> Khác</span>
                                <li><span class="name-click">Bánh ngọt</span></li>
                                <li><span class="name-click">Cà phê đóng gói</span></li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="menu-product">
                <div class="product-item">
                    <?php echo loadingProductHot($products); ?>
                </div>
            </div>
        </div>



        <!-- FOOTER  -->
        <?php 
            include 'html/footer.php';
        ?>
    </div>
    <!-- <script src="js/load-menu-product.js"></script> -->
    <!-- <script src="js/cart.js"></script> -->
    <!-- <script src="js/add-to-cart.js"></script> -->
    <script src="js/menutab.js"></script>
    <script src="js/open-menu-list.js"></script>
    
</body>

</html>