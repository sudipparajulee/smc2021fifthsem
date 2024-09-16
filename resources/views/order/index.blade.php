@extends('layouts.app')
@section('title')
    Orders
@endsection
@section('content')
    <table class="w-full text-center">
        <tr>
            <th class="border py-2">S.N.</th>
            <th class="border py-2">User</th>
            <th class="border py-2">Package</th>
            <th class="border py-2">Total Amount</th>
            <th class="border py-2">Status</th>
            <th class="border py-2">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td class="border py-2">{{$loop->iteration}}</td>
            <td class="border py-2">{{$order->user->name}}</td>
            <td class="border py-2">{{$order->package->name}}</td>
            <td class="border py-2">{{$order->total_price}}</td>
            <td class="border py-2">{{$order->status}}</td>
            <td class="border py-2">
                <a href="{{route('orders.status',[$order->id,'Pending'])}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Pending</a>
                <a href="{{route('orders.status',[$order->id,'Confirmed'])}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Confirmed</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
