<?php 
class orderModel extends DB {
    // Thêm liên hệ vào SQL
        public function insert($account,$phone,$address,$payment){
                // $order = "INSERT INTO `oders`(`id_order`, `account`, `phone`, `address`, `payment`,`order_date`) 
                //           VALUES (NULL,'$account','$phone','$address','$payment',NOW())";
                //   $result = mysqli_query($this->con, $order) ;
                //  if($query){
                //     $id = mysqli_insert_id($this->con);
                //     foreach($cart as  $cart){
                //     $sql_query = "INSERT INTO `order_detail`(`id`, `name_product`, `img_product`, `quantity`, `price`) 
                //                   VALUES ('$id','$cart[name]','$cart[img]','$cart[quantity]','$tong')";
                //     $result= mysqli_query($this->con, $sql_query) ;
                //     }
                //     unset($_SESSION['cart']); 
                //     header("Location: Home"); 
                // }
            }
    }
?>