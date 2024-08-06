@extends('layouts.app')
@section('title')
    Notices
@endsection
@section('content')
<div class="my-10 text-right">
    <a href="{{route('notice.create')}}" class="px-4 py-2 bg-blue-600 rounded text-white">Add Notice</a>
</div>

<table class="w-full text-center">
    <tr>
        <th class="border py-2">Notice Date</th>
        <th class="border py-2">Notice</th>
        <th class="border py-2">Status</th>
        <th class="border py-2">Action</th>
    </tr>
    <tr>
        <td class="border py-2">2024-08-06</td>
        <td class="border py-2">This is a new notice</td>
        <td class="border py-2">Show</td>
        <td class="border py-2">
            <a href="" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Edit</a>
            <a href="" class="px-2 py-1 bg-red-600 rounded-lg text-white">Delete</a>
        </td>
    </tr>
</table>
@endsection
