@extends('layouts.front.app') 

@section('title')
 | Cart
@endsection
 
@push('body-tag')
    <Body class="shopping-cart-page">
@endpush 

@section('content')
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <article class="col-main">
                        <div class="cart">
                            <div class="page-title">
                                <h2>Checkout</h2>
                            </div>
                            <!-- BEGIN CART COLLATERALS -->
                            <div class="cart-collaterals row">
                                <div class="col-sm-12">
                                <div class="shipping">
                                    <h3>Checkout Success</h3>
                                    <div class="shipping-form">
                                        <p>Thank you for shopping. Please make a transfer by including the transaction code as a transfer news and some money as follows:</p>
                                        <p>Invoice Code : <strong>{{ $order->invoice }}</strong></p>
                                        <p>Total : <strong>Rp{{ number_format($order->grandtotal,2,",",".") }}</strong></p>
                                        <p>If you already transfer, please confirm payment at following link. Orders will be processed thereafter.</p>
                                        <p><a href="#">Confirm Payment</a></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
            </div>
        </div>
    </section>
@endsection
 
@section('scripts')
@endsection