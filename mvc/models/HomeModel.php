<?php 
class HomeModel extends DB{

    // ---------------------------Lấy dữ liêu product
    public function products(){
        $products ="SELECT  *
                    FROM products
                    JOIN category 
                    ON products.id_category = category.id_category
                    ORDER BY RAND()
                    LIMIT 5";
        return mysqli_query($this->con , $products);
    }
    // sắp xếp sản phẩm
    public function productslist(){
        $products_ads ="SELECT  *
                    FROM products
                    JOIN category 
                    ON products.id_category = category.id_category
                    ORDER BY price ASC LIMIT 5
                    ";
        return mysqli_query($this->con , $products_ads);
    }
    
    
    
    
    
    
}
?>