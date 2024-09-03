<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Package;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('cart', compact('carts'));
    }

    public function store(Request $request)
    {
        $message = [
            'items.required' => 'Please select at least one item',
        ];
        $package = Package::find($request->package_id);
        $minpeople = $package->capacity * 0.2;
        $maxpeople = $package->capacity;
        $data = $request->validate([
            'package_id' => 'required',
            'no_of_people' => "required|numeric|min:$minpeople|max:$maxpeople",
            'items' => 'required',
            'booking_date' => 'required',
        ],$message);
        // $data['user_id'] = auth()->user()->id;
        $data['user_id'] = auth()->id();
        $data['status'] = 'Pending';
        $data['items'] = implode(',', $data['items']);
        Cart::create($data);

        return redirect()->route('cart.index')->with('success', 'Item added to cart');


    }
}
