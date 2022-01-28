<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategory extends Component
{
    use WithPagination;
    public $msg, $msgx;
    public $c_id, $data, $c_name;
    public $ca_name;
    public $edit_page = false;
    public $createpage = false;


    public function createCategory(){
    $this->edit_page = false;

       $create = new Category();
       $create->name = $this->ca_name;
       $create->save();

        $this->msgx = 'Created Successfully';
        $this->createpage = false;

    }

    public function createpage(){
        $this->createpage = true;

    }


    public function editCategory(){
        $find = Category::find($this->c_id);
        $find->name = $this->c_name;
        $find->save();
        $this->msg = 'Edited Successfully';
        $this->edit_page = false;
    }

    public function editpage($id){
        $this->createpage = false;
        $this->c_id = $id;
        $this->data = Category::find($id);
        $this->c_name = $this->data->name;
        //dd($find);
        $this->edit_page = true;
    }




    public function delete($id){
        $find = Category::find($id);
        $find->delete();
    }


    public function render()
    {
        $category = Category::paginate(10);
        return view('livewire.admin-category',[
            'category' => $category,
        ]);
    }
}
