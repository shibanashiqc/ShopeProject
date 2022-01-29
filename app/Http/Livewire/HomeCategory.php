<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeCategory extends Component
{


    public $category;

    public function mount($category_name){
        //dd($category_name);
        $this->category = $category_name;

    }


    public function render()
    {
        $get_id =  Category::where('name', $this->category)->first();
        $get_product_by_cate = Product::where('category_id', $get_id->id)->get();
        //dd($get_product_by_cate);
        return view('livewire.home-category',[
            'category_name' =>  $get_id,
            'products' => $get_product_by_cate
        ])->layout('layouts.guest');
    }
}
