<?php 

class Login extends Controller{
        
         function Home(){
               $login =$this ->model("LoginModel");
                $this->view("Login", [
                "login" => $login -> delete_cookie(), 
                ]);
         }
         
        
}
         
?>