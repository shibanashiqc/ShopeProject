<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class AdminDashboard extends Component
{

    public $category;


    public function addCategory(){

        // dd($this->category);
        $validate = $this->validate([
            'category' => 'required',
        ]);
    }

    public function render()
    {
        $total_category = Category::all()->count();
        $total_product = Product::all()->count();
        return view('livewire.admin-dashboard',[
            'total_cate' => $total_category,
            'total_prod' => $total_product,
        ]);
    }
}
