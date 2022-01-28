<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class AdminProdectEdit extends Component
{
    use WithFileUploads;
    public $pdname;
    public $pid;
    public $price;
    public $feautured;
    public $quantity;
    public $categoryy;
    public $description;
    public $images;
    public $image;
    public $msg;
    public $product_edit;

    public function mount($id){
        $this->product_edit = Product::find($id);
        $this->pdname = $this->product_edit->name;
        $this->price = $this->product_edit->price;
        $this->categoryy = $this->product_edit->category_id ;
        $this->feautured = $this->product_edit->featured;
        $this->description = $this->product_edit->description;
        $this->quantity = $this->product_edit->quantity;
        $this->images = $this->product_edit->image;
        $this->pid = $id;
       // dd($this->product_edit);
    }

    public function editProduct(){

        $this->validate([
            'pdname' => 'required',
            'price' => 'required|numeric',
            'feautured' => 'required',
            'quantity' => 'required',
            'categoryy' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);

        $product = Product::find($this->pid);
        $product->name = $this->pdname;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->featured = $this->feautured;
        $product->quantity = $this->quantity;
        $product->category_id  = $this->categoryy;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('images', $imageName);
        $product->image = $imageName;
        $product->update();
        $this->msg = 'Update Added Successfully';


    }

    public function render(Request $request)
    {
        $category = Category::all();
        return view('livewire.admin-prodect-edit',[
            'category' => $category
        ]);
    }
}
