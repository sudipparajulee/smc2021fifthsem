<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return response()->json([
            'message' => 'Fetched Successfully',
            'success' => true,
            'data' => $packages
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'capacity' => 'required|integer',
        ]);

        Package::create($data);

        return response()->json([
            'message' => 'Package create fields',
            'success' => true,
        ]);
    }
}
