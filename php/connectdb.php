<?php

function connectDb(){
    $host = 'localhost'; // tên host
    $dbname = 'highlandscoffee'; // tên database
    $username = 'root'; // tên người dùng
    $password = ''; // mật khẩu

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // kết nối với database
        echo "Kết nối thành công!";
    } catch (PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage(); // báo lỗi nếu kết nối không thành công
    }
    // return $dbh;
};


?>