<?php 

    function checkStatus($account){
        $status = false;
        $emailAdmin = 'admin@gmail.com';
        $passAdmin = '123456';
        foreach ($account as $value) {
            if($value[0] == $emailAdmin && $value[1] == $passAdmin){
                $status === true;
            }else{
                $status = false;
                // header('location: dangnhap.php');
            };
        }
        
        return $status;
    };

?>