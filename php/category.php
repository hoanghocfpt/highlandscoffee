<?php 
    function getAllCategory(){
        $conn = connectDb();
        $stmt = $conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    };

?>