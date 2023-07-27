<?php 
include 'dataProduct.php';
$products[] = $coffee;
$products[] = $freeze;
$products[] = $tea;
$products[] = $cake;
function loadingProductHot($arr) {
    $result = '';
    for ($i = 0; $i < count($arr); $i++) {
        foreach ($arr[$i] as $value) {
            $result .= '<div class="product-item-container">
        <a href="product.php?id='.$value['id'].'">
            <div class="product-img">
            <img src="'.$value['img'].'" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 save">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
            </svg>
            </div>
        </a>
        <div class="product-heading">
            <div class="product-name">'.$value['name'].'</div>
            <div class="des"></div>
            <div class="product-price" data-price="'.$value['pricedata'].'">'.$value['price'].'</div>
            
            <a href="php/addToCart.php?id='.$value['id'].'">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cart">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </a>
        </div>
    </div> ';
        }
    }
    
    return $result;
}

?>