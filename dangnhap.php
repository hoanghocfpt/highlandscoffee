<?php
    session_start();
    $cart = [];
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
        // print_r($cart);
    };
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header container">
        <?php 
            include 'html/nav.php';
        ?>

        <div class="body">
            <div class="section-coffe">
                <img src="images/coffee-heart.jpg" alt="" width="700px" height="530px">
            </div>
            <aside>
                <div class="accout-aside">
                    <h1>Chào Mừng Bạn Đến Highlands</h1>

                    <form action="php/checkAccount.php" method="post">
                        <div><label for="email"> Email</label>
                            <input name="email" class="place" type="email" placeholder="Nhập địa chỉ email, vd: abc@gmail.com"
                                id="name">
                        </div>
                        <div>
                            <label for="password">Mật khẩu</label>
                            <input name="password" class="place" type="password" placeholder="Nhập mật khẩu" id="name">
                        </div>

                        <input name="login" type="submit" value="Đăng nhập" class="button-in1">
                        <span> Bạn chưa có tài khoản?<a href="account/dangky.php"> Đăng ký</a></span>
                        <div class="login-other-container">
                            <span class="or">Hoặc</span>
                            <div class="login-other">
                                <button class="google">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-google" viewBox="0 0 16 16">
                                        <path
                                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                    </svg>
                                    <span>Google</span>
                                </button>
                                <button class="facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                    <span>Facebook</span>
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </aside>
        </div>

        <?php 
            include 'html/footer.php';
        ?>
    </div>


</body>

</html>