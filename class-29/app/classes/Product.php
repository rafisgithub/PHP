<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Brand;

class Product
{
    public $product=[];
    public $res=[];
    public $products;
    public $category;
    public $categoryById;
    public $brand;

    public $brandById;
    public function __construct()
    {
        $this->product=[
            [
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New laptop',
                'price'=>'1200000',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l1.jpg'
            ],
            [
                'id'=>2,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New laptop',
                'price'=>'1200000',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l2.jpg'
            ],
            [
                'id'=>3,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>'New laptop',
                'price'=>'1200000',
                'description'=>'Best Laptop',
                'company_name'=>'Asus',
                'image'=>'l3.jpg'
            ],
            [
                'id'=>4,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>'New laptop',
                'price'=>'1200000',
                'description'=>'Best Mobile',
                'company_name'=>'Samsung',
                'image'=>'m1.jpg'
            ],
            [
                'id'=>5,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>'New Moboile',
                'price'=>'1200000',
                'description'=>'Best Laptop',
                'company_name'=>'Samsung',
                'image'=>'m2.jpg'
            ],
            [
                'id'=>6,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>'New Mobile',
                'price'=>'1200000',
                'description'=>'Best Mobile',
                'company_name'=>'Samsung',
                'image'=>'m3.jpg'
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
                $this->category=new Category();
                $this->categoryById=$this->category->getCategory($product['category_id']);
                $product['category_name']=$this->categoryById['name'];

                $this->brand=new Brand();
                $this->brandById=$this->brand->getBrand($product['brand_id']);
                $product['brand_name']=$this->brandById['name'];
                return $product;
            }
        }

    }
    public function productByCategory($id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if($product['category_id']==$id){
                array_push($this->res,$product);
            }
        }
        return $this->res;
    }

}