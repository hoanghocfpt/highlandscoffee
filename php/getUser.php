<?php 
    include 'php/connectdb.php';
    
    function getUser(){
        if((isset($_SESSION['account']))&&(!empty($_SESSION['account']))){
            $account = $_SESSION['account'];
            foreach ($account as $value) {
                $user = $value[0];
            }
          
        }
        $conn = connectDb();
        $stmt = $conn->prepare("SELECT name, email, phone, role FROM users WHERE username = :id");
        // bindParam dùng để gán giá trị cho phần SQL truy vấn
        $stmt->bindParam(':id', $user);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    };
?>