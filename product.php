<?php
    session_start();
    $cart = [];
    if((isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $cart[] = $_SESSION['cart'];
    };
    // include và kết nối
    include 'php/connectdb.php';
    $conn = connectDb();
    
    // GET thông tin từ link
    if((isset($_GET['id']))&&(!empty($_GET['id']))){
        $id = $_GET['id'];
        // Lấy dữ liệu từ database
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id LIMIT 1");
        // bindParam dùng để gán giá trị cho phần SQL truy vấn
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        // var_dump($kq);

        
    }else{
        header('location: menu.php');
    };;
    
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div class="container">
        <?php 
            include 'html/nav.php';
        ?>
        <div class="main">
            <div class="product-img">
                <img src="<?php echo $kq[0]['image']; ?>" alt="">
            </div>
            <div class="product-heading">
                <h1 class="product-name"><?php echo $kq[0]['name']; ?></h1>
                <div class="product-des"><?php echo $kq[0]['description']; ?></div>
                <div class="product-price"><?php echo $kq[0]['price']; ?></div>
                <a href="php/addToCart.php?id=<?php echo $id ?>">ĐẶT MUA NGAY</a>
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