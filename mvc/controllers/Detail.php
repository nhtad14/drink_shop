<?php 
// session_start();

class Detail extends Controller{
        
         function Home (){
            $home = $this ->model("HomeModel");
            $detail = $this ->model("DetailModel");
            $header = $this ->model("HeaderModel");

            //Goi model muốn lấy model nào thì gọi model đó
            
            $this->view("detail", [
            "detail"=>$detail->detail_products(),
            "Notifi"=> $header->Notifi(),
            "product_detail"=> $detail->product_detail(),
            ]); //Show ra giao diện view
            
         }
         
         
    }
         
?>