<?php 
class search extends Controller{
         
        //  function Product(){
        //  $Product = $this ->model("ProductModel");//Goi model muốn lấy model nào thì gọi model đó
        //  $header = $this ->model("HeaderModel");
        //  $this->view("product", [
        //     "Allproducts"=> $Product->products_price(),
        //     "Notifi"=> $header->Notifi(),
        //  ]);
        //  }
        //   function Home(){
        //     $Product = $this ->model("ProductModel");//Goi model muốn lấy model nào thì gọi model đó
        //     $header = $this ->model("HeaderModel");
        //     $this->view("product", [
        //        "Allproducts"=> $Product->products_category(),
        //        "Notifi"=> $header->Notifi(),
        //     ]); //Show ra giao diện view
        //   }
          // Tìm kiếm sản phẩm 
          function Home(){
            if (isset($_GET['search'])) {
            $name_product = $_GET['search']; 
            $result = $this->model("ProductModel")->product_search($name_product);
            
            $Product = $this ->model("ProductModel");//Goi model muốn lấy model nào thì gọi model đó
            $header = $this ->model("HeaderModel");

            $this->view("product", [
               "Allproducts"=> $Product->product_search($name_product),
               "Notifi"=> $header->Notifi(),
            ]); //Show ra giao diện view
          }
          
         }
         
    
}
?>