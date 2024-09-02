<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class CartController extends Controller
{
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


    }
}
