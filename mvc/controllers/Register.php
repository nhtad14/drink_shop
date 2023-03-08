<?php 

class register extends Controller{
        
         function Home(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               $account = $_POST['account'];
               $address = $_POST['address'];
               $phone = $_POST['phone'];
               $email = $_POST['email'] ;
               $psw = $_POST['psw'] ;
               $result = $this->model("LoginModel")->register($account,$address,$phone,$email,$psw);
                $this->view("login", [
                    
                ]);
            }
        }
        
}
         
?>