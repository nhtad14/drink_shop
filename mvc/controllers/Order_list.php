<?php 
class Order_list extends Controller{
          // Info
         // function Home(){
         //    $header = $this ->model("HeaderModel");
         //    $this->view("order_list", [
         //       "Notifi"=> $header->Notifi(),
         //    ]);
         //   }
         // list đơn hàng
         function Home(){
         $username=  $_COOKIE["username"];
         $result = $this->model("UserModel")->order_list($username);
         $header = $this ->model("HeaderModel");
         $order = $this->model("UserModel");
         $this->view("order_list", [
            "Notifi"=> $header->Notifi(),
            "order" => $order -> order_list($username),

         ]);
         }
         
           
          
         
    
}
?>