@extends('layouts.app')
@section('title')
    Orders
@endsection
@section('content')
    <table class="w-full text-center">
        <tr>
            <th class="border py-2">S.N.</th>
            <th class="border py-2">User</th>
            <th class="border py-2">Status</th>
            <th class="border py-2">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td class="border py-2">{{$order->id}}</td>
            <td class="border py-2">{{$order->user_id}}</td>
            <td class="border py-2">{{$order->status}}</td>
            <td class="border py-2">
                <a href="" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
