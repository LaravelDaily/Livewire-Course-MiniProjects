<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Editmodal extends Component
{
    public $showModal = false;
    public $product;

    protected $rules = [
        'product.name' => 'required',
        'product.price' => 'required',
    ];

    public function render()
    {
        return view('livewire.editmodal', ['products' => Product::all()]);
    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->product = Product::find($productId);
    }

    public function save()
    {
        $this->product->save();
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }
}
