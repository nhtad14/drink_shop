<?php 
class Order extends Controller{
    
          function Home(){
             $cart = $this ->model("orderModel");
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $account=$_POST['account'];
                  $phone=$_POST['phone'];
                  $address=$_POST['address'];
                  $payment=$_POST['payment'];
                  $cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[]; 
                  $result = $this->model("orderModel")->insert($account,$phone,$address,$payment);
            }
             
                  $this->view("order", [

                  ]);
            } 
          
      }
?>