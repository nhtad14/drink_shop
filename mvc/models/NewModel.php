<?php 
class NewModel extends DB {
    // ---------------------------News
    public function News(){
        $news ="SELECT * FROM `news`";
        return mysqli_query($this->con , $news);
    }
}
?>