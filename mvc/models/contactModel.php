<?php 
class contactModel extends DB {
    // Thêm liên hệ vào SQL
        public function insert($note,$address,$phone,$email){
                $contact = "INSERT INTO contact(email, phone, address, note) 
                            VALUES ('$email','$phone','$address','$note')";
                 $query = mysqli_query($this->con, $contact) ;
                 if($query){
                    echo '<script>alert("Cảm ơn bạn đã liên hệ với chúng tôi !");</script>';
                    echo '<script>window.location = "Contact";</script>';
            }
        }
    }
?>