<?php 
    include 'connectdb.php';
    $conn = connectDb();
    if((isset($_POST['register']))&&(!empty($_POST['register']))){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = 'user@gmail.com';


        if (empty($username) || empty($password) || empty($name)){
            // $mess = "Vui lòng điền đầy đủ thông tin.";
        }else{
            // Lấy dữ liệu từ database và kiểm tra đã đăng kí hay chưa
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
            // bindParam dùng để gán giá trị cho phần SQL truy vấn
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq = $stmt->fetchAll();
            if(count($kq) > 0){
                $mess = 'Tài khoản đã được đăng kí';
                // print_r($kq);
                
            }else{
                // Lấy dữ liệu từ database
                $stmt = $conn->prepare("INSERT INTO users (username, password, email, name) VALUES (:username, :password, :email, :name)");
                // bindParam dùng để gán giá trị cho phần SQL truy vấn
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $mess = "Đăng ký thành công!";
            };
        };

        
        // header('location: ../dangky.php');   
    
    };

?>