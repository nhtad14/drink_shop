<?php 
class Add_contact extends Controller{
          
          function Home(){
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               $note = $_POST['note'];
               $address = $_POST['address'];
               $phone = $_POST['phone'];
               $email = $_POST['email'] ;
               $result = $this->model("contactModel")->insert($note,$address,$phone,$email);
               $header = $this ->model("HeaderModel");
               $this->view("contact", [
                  "Notifi"=> $header->Notifi(),
               ]);
             } 
          }
}
?>