<?php 
    session_start();
    $cart = [];
    $mess = '';
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
    };
    // Kiểm tra tài khoản có được login hay không, nếu không thì chuyển thẳng về trang đăng nhập
    if((isset($_SESSION['account']))&&(!empty($_SESSION['account']))){
        header('location: my-account.php');
      
    };
    include 'php/register.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
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
                    <div class="form-message"><?php echo $mess ?></div>
                    <form action="dangky.php" method="post"> 
                        <div>
                            <label for="name">Họ và tên</label>
                            <input name="name" class="place name" type="text" placeholder="Nhập họ và tên, vd: Nguyễn A" id="name">
                        </div>
                        <div>
                            <label for="username"> Tên đăng nhập</label>
                            <input name="username" class="place username" type="text" placeholder="Nhập tên đăng nhập, vd: user123" id="username">
                        </div>
                        <div>
                            <label for="password">Mật khẩu</label>
                            <input name="password" class="place password" type="password" placeholder="Nhập mật khẩu" id="password">
                        </div>

                        <input type="submit" onclick="return checkform()" name="register" value="Tạo tài khoản" class="button-in1">
                        <span> Bạn đã có tài khoản?<a href="dangnhap.php"> Đăng nhập</a></span>
                        <!-- Các phần còn lại của form -->
                        
                    </form>

                </div>

            </aside>
        </div>

        <?php 
            include 'html/footer.php';
        ?>
    </div>


</body>
<script src="js/checkform.js"></script>
</html>