@extends('layouts.front.app') 

@section('title')
 | Confirm
@endsection
 
@push('body-tag')
    <Body class="checkout-page">
@endpush 

@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">       
        <div class="col-sm-9 col-sm-push-3">
          <article class="col-main">
            <div class="page-title">
              <h1>Confirm</h1>
            </div>
            <ol class="one-page-checkout" id="checkoutSteps">
              <li id="opc-billing" class="section allow active">
                <div class="step-title">
                  <h3>Confirm Payment</h3>
                </div>
                <div id="checkout-step-billing" class="step a-item" style="">
                        <form id="shipping-zip-form" method="post" action="{{ route('confirm.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <p>Enter your bank account and upload the receipt.</p>
                            <ul class="form-list">
                                <li>
                                    <label for="invoice">Invoice</label>
                                    <div class="input-box">
                                        <input type="text" value="" name="invoice" id="invoice" class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label for="bank">I Transfer To</label>
                                    <div class="input-box">
                                        {!! Form::select('bank', ['' => '-', 'bca' => 'BCA', 'bni' => 'BNI', 'bri' => 'BRI' ], null, ['class' => 'required-entry validate-select', 'id' => 'province_selector']) !!}
                                    </div>
                                </li>
                                <li>
                                    <label for="amount">Amount</label>
                                    <div class="input-box">
                                        <input type="number" value="" name="amount" id="amount" class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label for="name">From (Account Name)</label>
                                    <div class="input-box">
                                        <input type="text" value="" name="name" id="name" class="input-text" required>
                                    </div>
                                </li>
                                <li>
                                    <label for="note">Note</label>
                                    <div class="input-box">
                                        <textarea name="note" id="note" cols="95.5" rows="10" class="input-text"></textarea>
                                    </div>
                                </li>
                                <li>
                                    <label for="name">Receipt</label>
                                    <div class="input-box">
                                        <input type="file" name="file" id="file" class="input-text" required>
                                    </div>
                                </li>
                            </ul>
                            <div class="buttons-set11">
                                <button class="button btn-continue" title="Get a Quote" type="submit"><span>Submit</span></button>
                            </div>
                            <!--buttons-set11-->
                        </form>
                </div>
              </li>
            </ol>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
         <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="side-banner"><img src="{{ asset('assets/front/images/side-banner.jpg') }}" alt="banner"></div>
            <div class="block block-progress">
              <div class="block-title ">Your Checkout</div>
              <div class="block-content">
                <dl>
                  <dt class="complete"> Billing Address <span class="separator">|</span> <a onClick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a> </dt>
                  <dd class="complete">
                    <address>
                    John Doe<br>
                    Abc Company<br>
                    23 North Main Stree<br>
                    Windsor<br>
                    Holtsville,  New York, 00501<br>
                    United States<br>
                    T: 5465465 <br>
                    F: 466523
                    </address>
                  </dd>
                  <dt class="complete"> Shipping Address <span class="separator">|</span> <a onClick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a> </dt>
                  <dd class="complete">
                    <address>
                    John Doe<br>
                    Abc Company<br>
                    23 North Main Stree<br>
                    Windsor<br>
                    Holtsville,  New York, 00501<br>
                    United States<br>
                    T: 5465465 <br>
                    F: 466523
                    </address>
                  </dd>
                  <dt class="complete"> Shipping Method <span class="separator">|</span> <a onClick="checkout.gotoSection('shipping_method'); return false;" href="#shipping_method">Change</a> </dt>
                  <dd class="complete"> Flat Rate - Fixed <br>
                    <span class="price">$15.00</span> </dd>
                  <dt> Payment Method </dt>
                </dl>
              </div>
            </div>
          </aside>
      </div>
    </div>
</section>
@endsection
 
@section('scripts')
@endsection