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
                                <h2>Shopping Cart</h2>
                            </div>
                            <div class="table-responsive">
                                <fieldset>
                                    <table class="data-table cart-table" id="shopping-cart-table">
                                        <colgroup>
                                            <col width="1">
                                            <col>
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                            <col width="1">
                                        </colgroup>
                                        <thead>
                                            <tr class="first last">
                                                <th rowspan="1">&nbsp;</th>
                                                <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                <th rowspan="1"></th>
                                                <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                                <th class="a-center" rowspan="1">Qty</th>
                                                <th colspan="1" class="a-center">Subtotal</th>
                                                <th class="a-center" rowspan="1">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="first last">
                                                <td class="a-right last" colspan="50">
                                                    <button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping"
                                                        type="button">
                                                        <span>Continue Shopping</span>
                                                    </button>
                                                    <a href="{{ route('cart.destroy') }}">
                                                        <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach (Cart::content() as $item)
                                            <tr class="first odd">
                                                <td class="image">
                                                <a class="product-image" title="{{ $item->name }}" href="{{ route('product.detail', $item->options->slug) }}">
                                                        <img width="75" alt="{{ $item->name }}" src="{{ $item->options->photo }}">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h2 class="product-name"> <a href="{{ route('product.detail', $item->options->slug) }}">{{ $item->name }}</a> </h2>
                                                </td>
                                                <td class="a-center">
                                                    <a title="Edit item parameters" class="edit-bnt" href="#configure/id/15945/">
                                                    </a>
                                                </td>
                                                <td class="a-right">
                                                    <span class="cart-price"> <span class="price">Rp{{ number_format($item->price,2,",",".") }}</span> </span>
                                                </td>
                                                {!! Form::open(['route' => ['cart.update', $item->rowId], 'method' => 'PUT', 'class' => 'form-inline']) !!}
                                                <td class="a-center movewishlist">
                                                    {!! Form::number('qty', $item->qty, ['class' => 'input-text qty']) !!}
                                                </td>
                                                <td class="a-right movewishlist">
                                                    <span class="cart-price"> <span class="price">Rp{{ number_format($item->subtotal,2,",",".") }}</span> </span>
                                                </td>
                                                <td class="a-center last">

                                                    <button type="submit" class="btn btn-info btn-sm">
                                                        <span class="glyphicon glyphicon-refresh"></span>
                                                    </button>
                                                    {!! Form::close() !!}
                                                    {!! Form::open(['route' => ['cart.delete', $item->rowId], 'method' => 'DELETE', 'id' => 'cart-delete']) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm js-submit-confirm">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                        <!-- BEGIN CART COLLATERALS -->
                        <div class="cart-collaterals row">
                            <div class="col-sm-4">
                            
                            </div>
                            <div class="col-sm-4">
                            
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
                                    <td colspan="1" class="a-left" style=""><strong>Grand Total</strong></td>
                                    <td class="a-right" style=""><strong><span class="price">Rp{{ Cart::total() }}</span></strong></td>
                                    </tr>
                                </tfoot>
                               
                                </table>
                                <ul class="checkout">
                                <li>
                                    <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
                                </li>
                                <br>
                                </ul>
                            </div>
                            <!--inner--> 
                            
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