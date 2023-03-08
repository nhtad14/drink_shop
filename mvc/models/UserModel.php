<?php 
class UserModel extends DB{

    // Lấy tất cả đơn hàng
     public function order_list($username){
        $order_list = "SELECT oders.id_order, oders.account, oders.phone, oders.address, oders.payment, oders.order_date,order_detail.name_product,order_detail.img_product,order_detail.quantity, SUM(order_detail.price) AS total_price
        FROM oders
        LEFT JOIN order_detail ON oders.id_order = order_detail.id
        WHERE oders.account = '$username'
        GROUP BY oders.id_order, oders.account, oders.phone, oders.address, oders.payment, oders.order_date";
        return mysqli_query($this->con , $order_list);
        
    }
    public function update_info ($account,$address,$phone,$email){
        $update_info = "UPDATE `user` SET `account`='$account',`email`='$email',`phone`='$phone',`address`='$address'";
        $query= mysqli_query($this->con , $update_info);
        if($query){
        echo '<script>alert("Cập nhật thông tin thành công ,Login lại để kiểm tra thông tin !");</script>';
        echo '<script>window.location = "Login";</script>';
        }
    }
    public function Update_psw ($psw){
        $Update_psw = "UPDATE `user` SET `psw`='$psw'";
        $query= mysqli_query($this->con , $Update_psw);
        if($query){
        echo '<script>alert("Đổi mật khẩu thành công ,Login lại để kiểm tra !");</script>';
        echo '<script>window.location = "Login";</script>';
        }
    }
    public function order_view($id_order){
        $order_view = "SELECT * FROM `order_detail` WHERE id = '$id_order'";
        return mysqli_query($this->con , $order_view);
    }
}
?>