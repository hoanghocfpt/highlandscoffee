<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                    <form>
                        <div>
                            <label for="name">Họ Tên</label>
                            <input class="place" type="name" placeholder="Jodobe" id="name">
                        </div>
                        <div><label for="name"> Email</label>
                            <input class="place" type="email" placeholder="htm@gmail.com" id="name"></div>
                        <div>
                            <label for="name">Mật Khẩu</label>
                            <input class="place" type="password" placeholder="1234" id="name">
                    </div>
                    
                        <button class="button-in1">Tạo tài khoản</button>
                        <span> Bạn có muốn tạo tài khoản?<a href="#"> Đăng Nhập</a></span> 
                        <span>Hoặc</span>
                    <div class="login-other">
                        <button class="button-in2">Email</button>
                        <button class="button-in3">Facebook</button>
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