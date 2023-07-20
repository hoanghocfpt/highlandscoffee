<?php 
    session_start();
    include 'php/connectdb.php';
    $cart = [];
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
        // print_r($cart);
    };
    // include 'php/checkStatus.php';
    // if((isset($_SESSION['account']))&&(!empty($_SESSION['account']))){
    //     $account = $_SESSION['account'];
    // };
    // $stt = checkStatus($account);
    // if($stt === false){
    //     header('location: dangnhap.php');
    // }else{
    //     echo 'Chào mừng!';
    // };
    
    connectDb();

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản của tôi</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">

</head>

<body>
    <div class="container">
        <!-- header  -->
        <?php include 'html/nav.php' ?>
        <!-- main  -->
        <div class="account-container">
            <div class="account-dashboard">
                <div class="welcome-user">
                    <h3>Xin chào, Phạm Hoàng!</h3>
                </div>
                <div class="account-dashboard-list">
                    <a href="#">
                        <div class="account-dashboard-item">
                            <div class="icon-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="title-item">
                                Tài khoản
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="account-dashboard-item">
                            <div class="icon-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                                    </path>
                                </svg>
                            </div>
                            <div class="title-item">
                                Đơn hàng
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="account-dashboard-item">
                            <div class="icon-item">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z">
                                    </path>
                                </svg>
                            </div>
                            <div class="title-item">
                                Đăng xuất
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="account-main">
                <h2>Thông tin tài khoản</h2>
                <div class="account-main-container">
                    <div class="hovaten">Họ tên: Phạm Hoàng</div>
                    <div class="email">Email: iloveanh18@gmail.com</div>
                </div>
            </div>
        </div>
        <!-- footer  -->
        <?php include 'html/footer.php' ?>
    </div>
</body>

</html>