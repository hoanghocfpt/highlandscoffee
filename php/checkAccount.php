<?php 
session_start();
$account = [];
$emailAdmin = 'admin@gmail.com';
$passAdmin = '123456';
if((isset($_POST['login']))&&($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if($email === $emailAdmin && $pass === $passAdmin){
        echo 'Login thành công!")';
        $account[] = [$email,$pass];
    }else{
        echo 'Đăng nhập thất bại!';
    };
    if((isset($_SESSION['account']))&&(!empty($_SESSION['account']))){
        $_SESSION['account'] = $account;
    };
    print_r($account);
    header('location: ../account');
};
?>