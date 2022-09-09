<?php
require_once 'vendor\autoload.php';
use App\classes\Product;
use App\classes\Brand;
use App\classes\Category;

$product= new Product();
$category=new Category();
$categories=$category->allCategory();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){

        $products=$product->allProduct();
        include 'pages\home.php';
    }elseif ($_GET['page']=='details'){
        $product_id= $_GET['id'];
        $productById=$product->productDetails($product_id);
        include 'pages/details.php';

    }elseif ($_GET['page']=='category'){
        $category_id=$_GET['id'];
        $products=$product->productByCategory($category_id);
        include 'pages\category.php';
    }
}
?>