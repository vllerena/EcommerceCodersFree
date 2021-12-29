<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function show(Order $order)
    {
        $this->authorize('author', $order);
        $items = json_decode($order->content);
        return view('orders.show', compact('order', 'items'));
    }
    public function payment(Order $order)
    {
        $items = json_decode($order->content);
        return view('orders.payment', compact('order', 'items'));
    }

    public function pay(Order $order, Request $request)
    {
        $this->authorize('author', $order);
        $payment_id = $request->get('payment_id');
        $access_token = config('services.mercado_pago.token');
        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=" . $access_token);
        $response = json_decode($response);
        $status = $response->status;

        if ($status == 'approved'){
            $order->status = 2;
            $order->save();
        }

        return redirect()->route('orders.show', $order);
    }
}
