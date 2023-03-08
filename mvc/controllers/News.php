<?php 
class News extends Controller{
    
          function Home(){
            $new = $this ->model("NewModel");//Goi model muốn lấy model nào thì gọi model đó
            $header = $this ->model("HeaderModel");

            $this->view("news", [
              "New"=> $new->News(),
               "Notifi"=> $header->Notifi(),
            ]); //Show ra giao diện view
         }
         
    
}
?>