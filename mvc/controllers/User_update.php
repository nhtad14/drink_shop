<?php 
class User_update extends Controller{
         
         
         function Home(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $account = $_POST['account'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'] ;
            $result = $this->model("UserModel")->update_info($account,$address,$phone,$email);
            $update_info = $this ->model("UserModel");
            $header = $this ->model("HeaderModel");
            $this->view("user", [
               "Notifi"=> $header->Notifi(),
            ]);
            }
           }
          
         
    
}
?>