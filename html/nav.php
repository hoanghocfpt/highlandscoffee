<?php
    $count = 0;
    include 'php/countCart.php';
    foreach ($cart as $value) {
        $count = countCart($value);
    };
    echo '<nav>
    <div class="menutab">
        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
          
        <div class="menu-link-tab">
            <a href="/">Trang chủ</a>
            <a href="menu.php">Thực đơn</a>
            <a href="cart.php">Giỏ hàng</a>
            <a href="coffeeshop.php">Cửa hàng</a>
            <a href="my-account.php">Tài khoản</a>
        </div>
        <div class="languages-tab">
            EN | <span class="live"> VN</span>
        </div>
    </div>
    <div class="bars">
        <svg id="bars-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
          
    </div>
    <div>
        
        <div class="logo">
            <img src="images/highlands-logo.png" alt="">
        </div>
        <div class="menu-link">
            <a href="highlandscoffee">Trang chủ</a>
            <a href="menu.php">Thực đơn</a>
            <a href="cart.php">Giỏ hàng</a>
            <a href="coffeeshop.php">Cửa hàng</a>
            <a href="my-account.php">Tài khoản</a>
        </div>
    </div>
    <div>
        <div class="search-shop">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              
            <span>Tìm cửa hàng</span> 
        </div>
        <div class="cart-icon">
            <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg></a>
            <div class="count-product">
                '.$count.'
            </div>
              
        </div>
        <div class="user-icon">
            <a href="account"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          </a>
        </div>
        
        
    </div>
</nav>';

?>

        <!-- <div class="languages">
            EN | <span class="live"> VN</span>
        </div> -->