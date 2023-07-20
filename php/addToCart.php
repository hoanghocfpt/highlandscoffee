<?php 
session_start();
include 'dataProduct.php';
    $products = [];
    $products[] = $coffee;
    $products[] = $freeze;
    $products[] = $tea;
    $products[] = $cake; 
// Lấy ID sản phẩm
if (isset($_GET['id']) && $_GET['id'] !== '') {$id = $_GET['id'];
    $id = $_GET['id'];
    // Vòng lặp tìm sản phẩm trùng
    for ($i = 0; $i < count($products); $i++) {
        foreach ($products[$i] as $value) {
            if($id == $value['id']){
                $cart= array($id, $value['img'], $value['name'], $value['pricedata']);
            };
        };
    };
    if((!isset($_SESSION['cart']))&&(!empty($_SESSION['cart']))){
        $_SESSION['cart']=[];
    }else{
        $_SESSION['cart'][] = $cart;
        header('location: /highlandscoffee/cart.php');
        
    }
    // print_r($cart);
        
}


?>