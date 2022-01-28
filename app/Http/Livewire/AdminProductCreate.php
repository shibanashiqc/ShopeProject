<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class AdminProductCreate extends Component
{
    use WithFileUploads;
    public $pdname;
    public $price;
    public $feautured;
    public $quantity;
    public $categoryy;
    public $description;
    public $image;
    public $msg;


    public function restfield(){

        $this->pdname = '';
        $this->price = '';
        $this->feautured = '';
        $this->quantity = '';
        $this->categoryy = '';
        $this->description = '';
        $this->image = '';

    }

    public function addProduct(){

        $this->validate([
            'pdname' => 'required',
            'price' => 'required|numeric',
            'feautured' => 'required',
            'quantity' => 'required',
            'categoryy' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);


        $product = new Product();
        $product->name = $this->pdname;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->featured = $this->feautured;
        $product->quantity = $this->quantity;
        $product->category_id  = $this->categoryy;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('images', $imageName);
        $product->image = $imageName;
        $product->save();
        $this->restfield();
        $this->msg = 'Product Added Successfully';
    }


    public function render()
    {
        $categorys = Category::all();
        return view('livewire.admin-product-create',[
            'category' => $categorys
        ]);
    }
}
