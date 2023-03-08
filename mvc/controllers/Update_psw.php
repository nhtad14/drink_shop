<?php 
class Update_psw extends Controller{
          // đổi password
          function Home(){
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