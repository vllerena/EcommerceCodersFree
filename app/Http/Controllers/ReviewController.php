<?php

namespace App\Http\Controllers;

use App\Models\Info\ReviewAttr;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $request->validate([
            ReviewAttr::COMMENT => 'required | min:5',
            ReviewAttr::RATING => 'required | integer | min:1 | max:5'
        ]);
        $product->reviews()->create([
           ReviewAttr::COMMENT => $request->comment,
           ReviewAttr::RATING => $request->rating,
           ReviewAttr::USER_ID => auth()->id(),
        ]);

        session()->flash('flash.banner', 'Tú reseña se agrego con éxito');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }
}
