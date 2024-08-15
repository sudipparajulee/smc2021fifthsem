@extends('layouts.app')
@section('title')
    Banners
@endsection
@section('content')
<table class="w-full text-center">
    <tr>
        <th class="border py-2">Order</th>
        <th class="border py-2">Picture</th>
        <th class="border py-2">Title</th>
        <th class="border py-2">Action</th>
    </tr>
    @foreach($banners as $banner)
    <tr>
        <td class="border py-2">{{$banner->priority}}</td>
        <td class="border py-2">{{$banner->photopath}}</td>
        <td class="border py-2">{{$banner->title}}</td>
        <td class="border py-2">
            <a href="{{route('banners.edit',$banner->id)}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Edit</a>
            <a href="{{route('banners.destroy',$banner->id)}}" class="px-2 py-1 bg-red-600 rounded-lg text-white" onclick="return confirm('Are you sure to Delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
