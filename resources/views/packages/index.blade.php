@extends('layouts.app')
@section('title')
    Packages
@endsection
@section('content')
<div class="my-10 text-right">
    <a href="{{route('packages.create')}}" class="px-4 py-2 bg-blue-600 rounded text-white">Add Package</a>
</div>
<table class="w-full text-center">
    <tr>
        <th class="border py-2">Package Name</th>
        <th class="border py-2">Description</th>
        <th class="border py-2">Price</th>
        <th class="border py-2">Action</th>
    </tr>
    @foreach($packages as $package)
    <tr>
        <td class="border py-2">{{$package->name}}</td>
        <td class="border py-2">{{$package->description}}</td>
        <td class="border py-2">{{$package->price}}</td>
        <td class="border py-2">
            <a href="{{route('packages.edit',$package->id)}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Edit</a>
            <a href="{{route('packages.destroy',$package->id)}}" onclick="return confirm('Are you sure to Delete?')" class="px-2 py-1 bg-red-600 rounded-lg text-white">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
