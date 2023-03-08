<?php 
 class DB {
    public $con;
    protected $severname = "localhost";
    protected $username ="root";
    protected $password = "";
    protected $db = "drink_shop";
    function __construct(){
        $this->con = mysqli_connect( $this->severname, $this->username, $this->password );
        mysqli_select_db( $this->con, $this->db );
        mysqli_query($this->con, "SET NAMES 'UTF8'" );

    }
 }

?>