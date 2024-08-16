<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banners.index', compact('banners'));
    }

    public function create()
    {
        return view('banners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required',
            'title' => 'required',
            'photopath' => 'required|image',
        ]);

        //store the image
        $photo = $request->file('photopath');
        $photoname = time() . '.' . $photo->extension();
        $photo->move(public_path('images/banners'), $photoname);
        $data['photopath'] = $photoname;

        Banner::create($data);
        return redirect()->route('banners.index')->with('success', 'Banner created successfully');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
