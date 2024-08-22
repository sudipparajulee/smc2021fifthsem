<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $banners = Banner::all();
        return view('welcome',compact('banners'));
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
