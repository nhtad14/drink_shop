<?php 
class change_password extends Controller{
          // Info
         function Home(){
            $header = $this ->model("HeaderModel");
            $this->view("change_password", [
               "Notifi"=> $header->Notifi(),
            ]);
           }
          // đổi password
          function Update_psw(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $psw = $_POST['psw'];
            $result = $this->model("UserModel")->Update_psw ($psw);
            $Update_psw = $this ->model("UserModel");
            $header = $this ->model("HeaderModel");
            $this->view("user", [
               "Notifi"=> $header->Notifi(),
            ]);
            }
           }
           // Order_view 
          
          
         
    
}
?>