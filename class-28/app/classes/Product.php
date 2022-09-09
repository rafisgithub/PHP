<?php

namespace App\classes;

class Product
{
    public $product=[];
    public $products;
    public function __construct(){
        $this->product=[
            [
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New Laptop',
                'price'=>'899$',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l1.jpg',
            ],
            [
                'id'=>2,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New Laptop',
                'price'=>'899$',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l2.jpg',
            ],
            [
                'id'=>3,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New Laptop',
                'price'=>'899$',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l3.jpg',
            ],
            [
                'id'=>4,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'New mobile',
                'price'=>'899$',
                'description'=>'Best Mobile',
                'company_name'=>'Samsung',
                'image'=>'m1.jpg',
            ],
            [
                'id'=>5,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'New Mobile',
                'price'=>'899$',
                'description'=>'Best Mobile',
                'company_name'=>'Samsung',
                'image'=>'m2.jpg',
            ],
            [
                'id'=>1,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'New Laptop',
                'price'=>'899$',
                'description'=>'Best Laptop',
                'company_name'=>'Samsung',
                'image'=>'m3.jpg',
            ],
        ];
    }
    public function allProduct(){
        return $this->product;
    }
    public function productDetails($product_id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if($product['id']==$product_id){
                return $this->product;
            }

        }
    }
}