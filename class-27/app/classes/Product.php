<?php

namespace App\classes;

class Product
{
    public $product=[];
    public $allp;
    public $res=[];
    public function __construct(){
        $this->product=[
            [
                'id'=>1,
                'name'=>'New Laptop',
                'price'=>'130000',
                'description'=>'Best Laptop',
                'company_name'=>'Apple',
                'image'=>'L1.jpg',
            ],
            [
                'id'=>2,
                'name'=>'New Laptop',
                'price'=>'130000',
                'description'=>'Best Laptop',
                'company_name'=>'Apple',
                'image'=>'L2.jpg',
            ],
            [
                'id'=>3,
                'name'=>'New Laptop',
                'price'=>'130000',
                'description'=>'Best Laptop',
                'company_name'=>'Apple',
                'image'=>'L3.jpg',
            ],

        ];
    }
    public function allProduct(){
        return $this->product;
    }
    public function productDetails($product_id){
           $this->allp=$this->allProduct();
           foreach ($this->allp as $item){
              if($item['id']==$product_id){
                  array_push($this->res,$item);
              }
           }
           return $this->res;
    }

}