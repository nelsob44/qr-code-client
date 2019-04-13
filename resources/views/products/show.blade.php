@extends('layouts.app')

@section('content')

<h2 class="text-center">Checkout</h2>
<div class="row">

    <div class="card m-2 col-md-5" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{ $qrcode['data']['product_name'] }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">£{{ $qrcode['data']['amount'] }}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{ $qrcode['data']['company_name'] }}</h6>
          <p class="card-text"> </p>
        <a href="{{ $qrcode['data']['link']['payment_page_link'] }}" class="btn btn-primary">Pay with Paystack</a>

        </div>
    </div>

    <div class="card m-2 col-md-5" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Pay with Qrcode</h5>
          <h6 class="card-subtitle mb-2 text-muted">Scan the code below with our QRCode App</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{ $qrcode['data']['company_name'] }}</h6>
          <p class="card-text">
          <img src="{{ $qrcode['data']['link']['qrcode_link'] }}">
          </p>

    </div>

</div>
@endsection
