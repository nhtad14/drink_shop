<?php 
class Cart extends Controller{
        
         
         function Home (){
            $detail = $this ->model("DetailModel");
            $header = $this ->model("HeaderModel");
            $cart = $this ->model("CartModel");
            
            $this->view("detail", [
                "detail"=>$detail->detail_products(),
               "Notifi"=> $header->Notifi(),
               "product_detail"=> $detail->product_detail(), 
               "cart"=> $cart->AddCart(),
            ]);
              

         }
         
    }
         
?>