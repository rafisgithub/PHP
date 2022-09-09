<?php
require_once 'vendor\autoload.php';
use App\classes\Student;
use App\classes\Product;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
       $student= new Student();
      $students= $student->studentsInf();
      include 'pages\home.php';

    }else if($_GET['page']=='about'){
        include 'pages/about.php';

    }else if($_GET['page']=='product'){
       $product=new Product();
       $products=$product->allProduct();
       include 'pages\product.php';

    }else if($_GET['page']=='product-details'){
       $product_id=$_GET['id'];
      $product= new Product();
      $pro=$product->productDetails($product_id);
      include 'pages\product-details.php';
    }
}
?>