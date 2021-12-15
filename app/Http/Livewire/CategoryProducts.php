<?php

namespace App\Http\Livewire;

use App\Models\Info\ProductAttr;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;

    public $products = [];

    public function loadProducts()
    {
        $this->products = $this->category->products()->where(ProductAttr::STATUS, 2)->take(15)->get();
        $this->emit('glider', $this->category->id);
    }

    public function render()
    {
        return view('livewire.category-products');
    }
}
