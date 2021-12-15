<?php

namespace App\Http\Livewire;

use App\Models\Info\ProductAttr;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category, $subcategoria, $marca;

    public $view = "grid";

    protected $queryString = ['subcategoria', 'marca'];

    public function limpiar(){
        $this->reset(['subcategoria', 'marca', 'page']);
    }

    public function updatedSubcategoria(){
        $this->resetPage();
    }

    public function updatedMarca(){
        $this->resetPage();
    }

    public function render()
    {
        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query){
            $query->where(ProductAttr::ID, $this->category->id);
        });

        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where(ProductAttr::SLUG, $this->subcategoria);
            });
        }

        if ($this->marca) {
            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query){
                $query->where(ProductAttr::NAME, $this->marca);
            });
        }

        $products = $productsQuery->paginate(20);

        return view('livewire.category-filter', compact('products'));
    }
}
