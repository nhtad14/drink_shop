<?php 
class Home extends Controller{
        
        function Home(){
            $home = $this ->model("HomeModel");
            $header = $this ->model("HeaderModel");
            //Goi model muốn lấy model nào thì gọi model đó
            $this->view("Home", [
               "SP" => $home->products(),
               "ListSP"=> $home->productslist(),
               "Notifi"=> $header->Notifi(),
            ]); 
           
         }

}
?>