<?php
// session_start();
class DetailModel extends   DB {

    // Lấy chi tiết thông tin sản phẩm
    public function product_detail(){
        $idsp = $_GET['id']; 
        $product_detail = "SELECT  *
                FROM products
                JOIN category 
                ON products.id_category = category.id_category
                WHERE id_product = '$idsp'";
        return mysqli_query($this->con, $product_detail);
    }
    // lấy 5 sản phẩm bất kì
    public function detail_products(){
        $detail ="SELECT  *
                FROM products
                JOIN category 
                ON products.id_category = category.id_category
                ORDER BY RAND()
                LIMIT 5";
        return mysqli_query($this->con , $detail);
    }
    
}
?>