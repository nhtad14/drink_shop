<?php 

class Login_acc extends Controller{
        
         
         function Home (){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               $email = $_POST['email'] ;
               $psw = $_POST['psw'] ;
               $result = $this->model("LoginModel")->Login_acc($email,$psw);
                $this->view("login", [
                    
                ]);
         }
        }
        
        
}
         
?>