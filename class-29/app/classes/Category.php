<?php


namespace App\classes;
class Category
{
    public $categories;
    public function getCategory($id){
        $this->categories=$this->allCategory();
        foreach ($this->categories as $categories){
            if($categories['id']==$id){
                return $categories;
            }
        }
    }

    public function allCategory(){
        return [
            [
                'id'=>1,
                'name'=>'Laptop',
            ],
            [
                'id'=>2,
                'name'=>'Mobile',
            ],
        ];
    }
}