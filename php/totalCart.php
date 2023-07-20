<?php 
    function totalCart($arr){
        if(count($arr) == 0){
            $result = '<a class="btn-link-to-menu" href="menu.php">MUA HÀNG NGAY</a>';
        }else{
            $sum = 0;
            $total = 0;
            $phigiaohang = 10000;
            $promotion = 5000;
            for ($i=0; $i < count($arr); $i++) { 
                foreach ($arr[$i] as $value) {
                    // print_r($arr[$i]);
                    $sum += $value[3];
                            
                }
            }
            $total = $sum + $phigiaohang - $promotion;
            $result = '<div class="discount-code">
                    <span>Bạn có mã giảm giá?</span>
                    <input type="text" name="" id="" placeholder="Nhập mã giảm giá">
                    </div>
                    <div class="bill">
                        <div class="into-money">
                            <div class="thanhtien">
                                <span>Thành tiền</span>
                                <span>'.$sum.'</span>
                            </div>
                            <div class="phigiaohang">
                                <span>Phí giao hàng</span>
                                <span>'.$phigiaohang.'</span>
                            </div>
                            <div class="khuyenmai">
                                <span>Khuyến mãi</span>
                                <span>'.'- '.$promotion.'</span>
                            </div>
                        </div>
                        <div class="total">
                            <div class="tt">
                                <span>Tổng cộng</span>
                                <span>'.$total.'</span>
                            </div>
                            <div class="btn-to-order">
                                <input type="submit" value="Đặt đơn hàng">
                            </div>
                        </div>
                    </div>';
        }

        return $result;
    };


?>