<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ProductComponent extends Component
{


    public function render()
    {
        $products = Category::with('products')->get();
       // dd($products);
        return view('livewire.product-component',[
            'category' => $products,
        ]);
    }
}
