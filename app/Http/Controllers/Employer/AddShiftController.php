<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Shifts;
use Illuminate\Http\Request;

class AddShiftController extends Controller
{
    public function create()
    {
    	return view('orders.create');
    }

    public function store(Request $request)
    {
        $shift = Shift::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
        ]);

        foreach ($request->orderProducts as $product) {
            $shift->products()->attach($product['product_id'],
                ['quantity' => $product['quantity']]);
        }

        return 'Order stored successfully!';
    }
}
