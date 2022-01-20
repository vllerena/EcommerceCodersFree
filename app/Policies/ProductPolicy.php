<?php

namespace App\Policies;

use App\Models\Info\ProductAttr;
use App\Models\Info\ReviewAttr;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Order;
use App\Models\Info\OrderAttr;

class ProductPolicy
{
    use HandlesAuthorization;

    public function review(User $user, Product $product)
    {
        $reviews = $product->reviews()->where(ReviewAttr::USER_ID, $user->id)->count();

        if ($reviews){
            return false;
        }

        $orders = Order::where(OrderAttr::USER_ID, $user->id)->select(OrderAttr::CONTENT)->get()->map(function ($order){
            return json_decode($order->content, true);
        });

        $products = $orders->collapse();

        return $products->contains(ProductAttr::ID, $product->id);
    }
}
