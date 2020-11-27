<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;

class Slug extends Component
{
    public $name;
    public $slug;

    public function render()
    {
        return view('livewire.slug');
    }

    public function updatedName()
    {
        $this->slug = SlugService::createSlug(Product::class, 'slug', $this->name);
    }
}
