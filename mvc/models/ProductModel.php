<?php 
class ProductModel extends DB{

    
    public function products_category(){
        if (isset($_GET['id_category'])) {
               // Get user by ID
            $id = $_GET['id_category']; 
            $products_category ="SELECT  * FROM products
                                 JOIN category 
                                 ON products.id_category = category.id_category
                                 WHERE products.id_category='$id'";
            } else {
               // Get all users
               $products_category = "SELECT  *
                                    FROM products
                                    JOIN category 
                                    ON products.id_category = category.id_category
                                    ORDER BY RAND()";
            }
        return mysqli_query($this->con , $products_category);
    }

    // Săp xep sản phẩm
    public function products_price(){
       if ($_GET['id'] == 'ASC') {
                   $products_price = "SELECT  *
                                    FROM products
                                    JOIN category 
                                    ON products.id_category = category.id_category
                                    ORDER BY price ASC";
            } else {
               // Get all users
                    $products_price = "SELECT  *
                                    FROM products
                                    JOIN category 
                                    ON products.id_category = category.id_category
                                    ORDER BY price DESC";

            }
        return mysqli_query($this->con , $products_price);
    }

    // Tìm kiếm sản phẩm
    public function product_search($name_product){
            $product_search ="SELECT  *
                  FROM products
                  JOIN category 
                  ON products.id_category = category.id_category
                  WHERE name_product = '$name_product'";
                $query= mysqli_query($this->con , $product_search);

                if(mysqli_num_rows($query) > 0){
                    return $query;
                }
                else {
                    echo '<script>alert("Không có sản phẩm ('.$name_product.') trong shop !");</script>';
                    echo '<script>window.location = "Home";</script>';
                }
            } 
    }

?>