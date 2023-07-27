<?php
session_start();
include 'dataProduct.php';

$products = array($coffee, $freeze, $tea, $cake);

// Lấy ID sản phẩm
if (isset($_GET['id']) && $_GET['id'] !== '') {
    $id = (int)$_GET['id']; // Chuyển $_GET['id'] thành số nguyên

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $fl = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value !== null && $id == $value[0]) {
            $_SESSION['cart'][$key][4] += 1;
            $fl = 1;
            break;
        }
    }

    if ($fl == 0) {
        // Tìm sản phẩm theo ID trong mảng $products
        foreach ($products as $productCategory) {
            foreach ($productCategory as $product) {
                if ($id == $product['id']) {
                    // Tạo mảng chứa thông tin sản phẩm mới
                    $cart = array($id, $product['img'], $product['name'], $product['pricedata'], 1);
                    $_SESSION['cart'][] = $cart;
                    break;
                }
            }
        }
    }

    header('location: /highlandscoffee/cart.php');
    exit;
}

?>
