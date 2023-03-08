<?php 
class LoginModel extends DB {
    // Thêm liên hệ vào SQL
        public function register($account,$address,$phone,$email,$psw){
                $register = "INSERT INTO `user`(`id_user`, `account`, `email`, `psw`, `phone`, `address`)
                 VALUES (NULL,'$account','$email','$psw','$phone','$address')";
                 $query= mysqli_query($this->con, $register) ;
                 if($query){
                     echo '<script>alert("Đăng kí tài khoản thành công!");</script>';
                     echo '<script>window.location = "Login";</script>';
                 }
                 else{
                    echo '<script>alert("Đăng kí tài khoản thất bại!");</script>';

                 }
        }
         public function Login_acc($email,$psw){
                $login = "SELECT * FROM `user` WHERE email= '$email' and psw= '$psw'";
                 $query= mysqli_query($this->con, $login) ;
                 $row = mysqli_num_rows($query);
                 if($row==1){ 
                  $row = mysqli_fetch_assoc($query);
                  $username = $row['account'];
                  $email = $row['email'];
                  $phone= $row['phone'];
                  $address= $row['address'];
                  $password = $row['$psw'];
                  $hashed_password = md5($password);
                  // Lưu thông tin username vào cookie
                  setcookie('username', $username, time() + (86400 * 30), '/');
                    setcookie('email', $email, time() + (86400 * 30), '/');
                    setcookie('phone', $phone, time() + (86400 * 30), '/');
                    setcookie('address', $address, time() + (86400 * 30), '/');
                    setcookie('password', $hashed_password, time() + (86400 * 30), '/');
                    header('Location:Home');
                 }
                 else{
                    echo '<script>alert("Đăng nhập thất bại!");</script>';
                    
                 }
            } 
            public function delete_cookie(){
                setcookie('username','', time() - 3600 , '/'); 
                session_destroy();
            }
        
    }
?>