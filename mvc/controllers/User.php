<?php 
class User extends Controller{
          // Info
         function Home(){
            $header = $this ->model("HeaderModel");
            $this->view("user", [
               "Notifi"=> $header->Notifi(),
            ]);
           }
         
          
         
    
}
?>