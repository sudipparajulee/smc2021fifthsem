@extends('header')
@section('content')
    <div class="grid grid-cols-4 gap-10 px-24 mt-10">
        <div class="col-span-3 grid grid-cols-3 gap-10 border-r">
            <div>
                <img src="https://esewa.com.np/common/images/esewa_logo.png" alt="" class="w-2/3 bg-green-600 p-4 rounded-lg">
                <input type="radio" name="payment">
            </div>

            <div>
                <img src="https://esewa.com.np/common/images/esewa_logo.png" alt="" class="w-2/3 bg-green-600 p-4 rounded-lg">
                <input type="radio" name="payment">
            </div>


            <div>
                <img src="https://esewa.com.np/common/images/esewa_logo.png" alt="" class="w-2/3 bg-green-600 p-4 rounded-lg">
                <input type="radio" name="payment">
            </div>

        </div>
        <div>
            <h2 class="font-bold text-xl">Summary</h2>
            <div class="mt-5">
                <p>Total Amount</p>
                <p class="font-bold">Rs. {{ $totalprice }}</p>
                <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
                    <input type="text" id="amount" name="amount" value="{{$totalprice}}" required>
                    <input type="text" id="tax_amount" name="tax_amount" value ="0" required>
                    <input type="text" id="total_amount" name="total_amount" value="{{$totalprice}}" required>
                    <input type="text" id="transaction_uuid" name="transaction_uuid"required>
                    <input type="text" id="product_code" name="product_code" value ="EPAYTEST" required>
                    <input type="text" id="product_service_charge" name="product_service_charge" value="0" required>
                    <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
                    <input type="text" id="success_url" name="success_url" value="https://esewa.com.np" required>
                    <input type="text" id="failure_url" name="failure_url" value="https://google.com" required>
                    <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
                    <input type="text" id="signature" name="signature" required>
                    <input value="Submit" type="submit">
                    </form>
            </div>
        </div>
    </div>

    @php
        $transaction_uuid = uniqid();
        $product_code = "EPAYTEST";
        $data = "total_amount=".$totalprice.",transaction_uuid=".$transaction_uuid.",product_code=".$product_code;
        $secret = "8gBm/:&EnhH.1/q";
        $s = hash_hmac('sha256', $data, $secret, true);
        $signature = base64_encode($s);
    @endphp

    <script>
        document.getElementById('transaction_uuid').value = "{{ $transaction_uuid }}";
        document.getElementById('signature').value = "{{ $signature }}";
    </script>
@endsection
