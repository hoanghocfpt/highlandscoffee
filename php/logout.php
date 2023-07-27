<?php 
    session_start();
    if((isset($_SESSION['account']))&&(!empty($_SESSION['account']))){
        unset($_SESSION['account']);
        header('location: ../my-account.php');
    };
?>