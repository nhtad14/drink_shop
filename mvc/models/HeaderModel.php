<?php 
class HeaderModel extends DB {
    //-------------------------- Thong báo------------
    public function Notifi(){
        $Notifi ="SELECT * FROM `notification`";
        return mysqli_query($this->con , $Notifi);
    }

}
?>