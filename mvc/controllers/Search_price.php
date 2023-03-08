<?php 
class Search_price extends Controller{ 
   function Home(){
   $Product = $this ->model("ProductModel");//Goi model muốn lấy model nào thì gọi model đó
   $header = $this ->model("HeaderModel");
   $this->view("product", [
      "Allproducts"=> $Product->products_price(),
      "Notifi"=> $header->Notifi(),
   ]);
   }
    
}
?>