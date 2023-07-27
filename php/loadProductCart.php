<?php 

function loadProductCart($arr){
    $result = '';
    if(count($arr) == 0){
        $result = '<div class="cart-empty">
            
            <img src="images/cart.webp" height="200px" alt="Giỏ hàng trống">
            <span>Giỏ hàng của bạn trống!</span>
        </div>';
    }else{
        $idcart = 0;
    for ($i=0; $i < count($arr); $i++) { 
        foreach ($arr[$i] as $value) {
            
            $result .= '<div class="product-item">
                <div class="img-product">
                    <img src="'.$value[1].'" alt="">
                </div>
                <div class="heading-product">
                    <span class="name-product">'.$value[2].'</span>
                    <div class="size-product">Size M</div>
                    <div class="quantity">
                        <div class="minus">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
    
                        </div>
                        <div id="quantity-product">'.$value[4].'</div>
                        <div class="plus">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
    
                        </div>
                    </div>
                </div>
                <div class="price-product">
                '.number_format($value[3]*$value[4],0,',','.').'
                </div>
                <a href="php/deleteProductCart.php?id='.$idcart.'">
                <div class="delete-product">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>    
                </div>
                </a>
                </div>';
                $idcart++;
        }
    }
    };
    
    return $result;
    
};

?>