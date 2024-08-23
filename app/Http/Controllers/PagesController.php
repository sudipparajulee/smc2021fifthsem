<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Package;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $banners = Banner::orderBy('priority')->get();
        $packages = Package::all();
        return view('welcome',compact('banners','packages'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
