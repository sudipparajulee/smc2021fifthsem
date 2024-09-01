<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'package_id' => 'required',
            'no_of_people' => 'required',
            'items' => 'required',
            'booking_date' => 'required',
        ]);
    }
}
