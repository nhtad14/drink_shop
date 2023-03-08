<?php 
class Order_view extends Controller{
       
           // Order_view 
          function Home(){
            if (isset($_GET['id_order'])) {
            $id_order = $_GET['id_order'];
            $result = $this->model("UserModel")->order_view($id_order);
            $header = $this ->model("HeaderModel");
             $Order = $this->model("UserModel");
            $this->view("order_view", [
               "Notifi"=> $header->Notifi(),
               "Order" => $Order -> order_view($id_order),
            ]);
           }
         }
          
         
    
}
?>