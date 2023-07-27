<?php 
include 'connectdb.php';

$conn = connectDb();
$account = [];
$mess = '';
if((isset($_POST['login']))&&(!empty($_POST['login']))){
    $username = $_POST['email'];
    $password = $_POST['password'];
    // Lấy dữ liệu từ database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    // bindParam dùng để gán giá trị cho phần SQL truy vấn
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if(count($kq) > 0){
        if($username === $kq[0]['username'] && $password === $kq[0]['password']){
            $account[] = [$username,$password];
            $_SESSION['account'] = $account;
            header('location: ../my-account.php');
            
        }else{
            $mess = 'Đăng nhập thất bại!';
        };
    }else{
        $mess = 'Đăng nhập thất bại!';
    };

    

};
?>