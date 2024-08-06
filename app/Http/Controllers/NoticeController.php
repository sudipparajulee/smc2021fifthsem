<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('notice.index');
    }

    public function create()
    {
        return view('notice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'notice_date' => 'required',
            'title' => 'required',
            'status' => 'required'
        ]);

        Notice::create($data);
        return redirect(route('notice.index'))->with('success','Notice Created Successfully');
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
