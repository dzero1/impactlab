<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;

class OrderController extends Controller
{

    /**
     * API to create a new order 
     * 
     * @url /api/orders
     * @method POST
     * */
    public function create(Request $request)
    {
        $request->validate([
            'customer' => ['required', 'exists:customers,id'],
            'notes' => ['string', 'nullable', 'max:500'],
            'products' => ['required', 'array'],
            'products.*' => ['required', 'exists:products,id'],
            'quantities' => ['required', 'array'],
            'quantities.*' => ['required', 'exists:products,id'],
        ]);

        // Create new order
        $order = Order::create([
            'customer_id' => $request->input('customer'),
            'notes' => $request->input('notes'),
        ]);

        // Create order products
        foreach ($request->input('products') as $key => $product) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product,
                'quantity' => $request->input('quantities')[$key],
            ]);
        }

        return response()->json($request->all());
    }
}
