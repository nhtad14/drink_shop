<?php 
 class App{
    // http://localhost/MVC/Home/SayHi/1/2/3
    protected $controller="Home";
    protected $action="Home";
    protected $params=[];
    function __construct(){
        //Array ( [0] => Home [1] => SayHi [2] => 123 )
         $arr = $this->UrlProcess();
        //  print_r($arr);  
         //Xu li Controller ,có tồn tại màn hình đó không 
         if (isset($arr[0]) && file_exists("./mvc/controllers/".$arr[0].".php")) { 
            $this->controller = $arr[0];
            unset($arr[0]);// Remove phần tử trong mảng
        }
            require_once "./mvc/controllers/". $this-> controller .".php";   
        //  Xử lí action
        if(isset($arr[1])) {
           if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
                unset($arr[1]); 
        }
        //Xử lí * @param 
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([new $this->controller, $this->action], $this->params ); 
      
    }
    function UrlProcess(){
        //
        if(isset($_GET["url"])){
           
           return explode("/", filter_var(trim($_GET["url"], "/")) );
        }

    }
}
?>