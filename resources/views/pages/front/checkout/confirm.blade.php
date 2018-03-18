@extends('layouts.front.app') 

@section('title')
 | Confirm
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
                        <div class="my-account">
                            <div class="page-title">
                            <h2>My Shopping Cart</h2>
                            </div>
                            <div class="dashboard">
                            <div class="welcome-msg"> <strong>Hello, {{ session()->get('checkout.address.name') }}</strong>
                                <p>Please check your item before pay this transaction. Make sure you have select the items that you need.</p>
                            </div>
                            <div class="recent-orders">
                                <div class="title-buttons"><strong>Items</strong></div>
                                <div class="table-responsive">
                                <table class="data-table" id="my-orders-table">
                                    <col>
                                    <col>
                                    <col>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <thead>
                                    <tr class="first last">
                                        <th></th>
                                        <th>Product</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (Cart::content() as $item)
                                    <tr class="">
                                        <td>
                                            <a class="product-image" title="{{ $item->name }}" href="{{ route('product.detail', $item->options->slug) }}">
                                                <img width="75" alt="{{ $item->name }}" src="{{ $item->options->photo }}">
                                            </a>
                                        </td>
                                        <td>
                                            <p class="product-name"> <a href="{{ route('product.detail', $item->options->slug) }}">{{ $item->name }}</a> </p>
                                        </td>
                                        <td><span class="price">Rp{{ number_format($item->price,2,",",".") }}</span></td>
                                        <td>{{ $item->qty }}</td>
                                        <td><span class="price">Rp{{ number_format($item->subtotal,2,",",".") }}</span></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>

                            <!-- BEGIN CART COLLATERALS -->
                            <div class="cart-collaterals row">
                                <div class="col-sm-8">
                                        <div class="box-account">
                                                <div class="page-title">
                                                <h2>Buyer Information</h2>
                                                </div>
                                                <div class="">
                                                        <p>{{ session()->get('checkout.address.name') }}<br>
                                                            {{ session()->get('checkout.address.phone') }}<br>
                                                            {{ session()->get('checkout.address.detail') }}<br>
                                                            {{ session()->get('checkout.address.postcode') }}<br>
                                                        </div>
                                            </div>
                                </div>
                                <div class="totals col-sm-4">
                                <h3>Shopping Cart Total</h3>
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                    <colgroup>
                                    <col>
                                    <col width="1">
                                    </colgroup>
                                    <tfoot>
                                        <tr>
                                            <td colspan="1" class="a-left" style=""><strong>Shipping Fee</strong></td>
                                            <td class="a-right" style=""><strong><span class="price">Rp{{ number_format(session()->get('chekcout.address.fee'),2,",",".") }}</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="a-left" style=""><strong>Total Price</strong></td>
                                            <td class="a-right" style=""><strong><span class="price">Rp{{ Cart::total() }}</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="a-left" style=""><strong>Grand Total</strong></td>
                                            <td class="a-right" style=""><strong><span class="price">Rp{{ number_format((int)str_replace('.', '', Cart::total()) + session()->get('chekcout.address.fee'),2,",",".") }}</span></strong></td>
                                        </tr>
                                    </tfoot>
                                    
                                    </table>
                                    <ul class="checkout">
                                    <li>
                                        <a href="{{ route('checkout.order') }}" onclick="event.preventDefault();
                                        document.getElementById('checkout-form').submit();">
                                            <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Process</span></button>
                                        </a>

                                        <form id="checkout-form" action="{{ route('checkout.order') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <br>
                                    </ul>
                                </div>
                                <!--inner--> 
                                
                                </div>
                            </div>
                           
                            </div>
                        </div>
                        
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
 
@section('scripts')
@endsection