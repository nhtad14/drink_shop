<?php 

class CartModel extends DB {
    //-------------------------- Thong báo------------
    public function Addcart(){
        // session_start();

        if(isset($_GET['id'])){
        $id = $_GET['id'];
        // echo $id;

        }
        $action = (isset($_GET['action'])) ? $_GET['action'] :'add';
        // var_dump ($action);
        // session_destroy();
        // die();
        $sql = "SELECT  *
                FROM products
                JOIN category 
                ON products.id_category = category.id_category
                WHERE id_product = '$id'";
        $query = mysqli_query($this->con,$sql); 

        if($query){
        $cart = mysqli_fetch_assoc($query);
        //$i=0; 
        }
       
        $item =[
                'id'=>$cart['id_product'],
                'name'=>$cart['name_product'],
                'img'=>$cart['img_product'],
                'price'=>$cart['price'],
                'name_category'=>$cart['name_category'],
                'quantity'=>1
                ];
        // Them san pham gio hàng
        if($action =='add'){
                if(isset($_COOKIE["username"])) {
                    if(isset($_SESSION['cart'][$id])){
                        $_SESSION['cart'][$id]['quantity'] += 1;
                        echo '<script>alert("Thêm sản phẩm vào giỏ thành công!");</script>';
                    }
                    else{
                        $_SESSION['cart'][$id]=$item;
                        echo '<script>alert("Thêm sản phẩm vào giỏ thành công!");</script>';
                    }
                }else{
                    echo '<script>alert("Vui lòng đăng nhập để mua hàng!");</script>';
                }
         }
        
        if($action =='plus'){
                $_SESSION['cart'][$id]['quantity'] += 1;

            }
        // Giảm sản phẩm 
        if($action =='reduce'){
                if ($_SESSION['cart'][$id] == NULL ){
                    unset($_SESSION['cart'][$id]); 
                }
                elseif($_SESSION['cart'][$id]['quantity'] == 1){
                    unset($_SESSION['cart'][$id]); 
                }
                else{
                    $_SESSION['cart'][$id]['quantity'] -= 1;

                }
            }  
            // Xoa SP gio hang
         if($action == 'delete'){                     
                unset($_SESSION['cart'][$id]); 
                //  setcookie('cart', '', time() - 3600, '/');
                header ("location:Product");
                } 
        // echo'<pre>';
        // print_r($_SESSION['cart']);
               
        
                   
    }
}
?>