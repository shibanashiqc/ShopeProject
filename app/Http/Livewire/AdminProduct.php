<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class AdminProduct extends Component
{
    use WithPagination;
    public function delete($id){

       $find = Product::find($id);
       $find->delete();
      // dd($find);
    }


    public function render()
    {
        $product = Product::paginate(10);
        return view('livewire.admin-product',[
            'products' => $product
        ]);
    }
}
