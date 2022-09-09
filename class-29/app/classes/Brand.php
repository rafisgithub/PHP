<?php


namespace App\classes;


class Brand
{

    public $brands;
    public function getBrand($id){
        $this->brands=$this->allBrand();
        foreach ($this->brands as $brand){
            if($brand['id']==$id){
                return $brand;
            }
        }
    }

    public function allBrand(){
        return [
            [
                'id'=>1,
                'name'=>'Asus',
            ],
            [
                'id'=>2,
                'name'=>'Samsung',
            ],
        ];
    }

}