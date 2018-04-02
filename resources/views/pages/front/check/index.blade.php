@extends('layouts.front.app') 

@section('title')
 | Check Order
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
              <h1>Check Order</h1>
            </div>
            <ol class="one-page-checkout" id="checkoutSteps">
              <li id="opc-billing" class="section allow active">
                <div class="step-title">
                  <h3>Checking out your order</h3>
                </div>
                <div id="checkout-step-billing" class="step a-item" style="">
                        <form id="shipping-zip-form" method="post" action="{{ route('check.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <p>Put your invoice code in this field and find the information.</p>
                            <ul class="form-list">
                                <li>
                                    <label for="invoice">Invoice</label>
                                    <div class="input-box">
                                        <input type="text" value="" name="invoice" id="invoice" class="input-text" required>
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
            
            <div class="testimonials">
                <div class="ts-testimonial-widget">
                    <div class="slider-items-products">
                        <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                            <div class="slider-items slider-width-col4 fadeInUp owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="holder">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes
                                        fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna.
                                        Aliquam erat volutpat...</p>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="thumb">
                                        <div class="customer-img"> <img src="{{ asset('assets/front/images/photo1.jpg') }}" alt="Saraha Smith">                                                </div>
                                        <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Saraha Smith</a></strong> <span>Happy Customer</span>                                                </div>
                                    </div>
                                </div>
                                <div class="holder">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes
                                        fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna.
                                        Aliquam erat volutpat...</p>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="thumb">
                                        <div class="customer-img"> <img src="{{ asset('assets/front/images/photo.jpg') }}" alt="Stephen Doe"> </div>
                                        <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Stephen Doe</a></strong> <span>Happy Customer</span>                                                </div>
                                    </div>
                                </div>
                                <div class="holder">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes
                                        fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna.
                                        Aliquam erat volutpat...</p>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="thumb">
                                        <div class="customer-img"> <img src="{{ asset('assets/front/images/photo1.jpg') }}" alt="Mark doe"> </div>
                                        <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Mark doe</a></strong> <span>Happy Customer</span>                                                </div>
                                    </div>
                                </div>
                                <div class="holder">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes
                                        fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna.
                                        Aliquam erat volutpat...</p>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="thumb">
                                        <div class="customer-img"> <img src="{{ asset('assets/front/images/photo.jpg') }}" alt="John Doe"> </div>
                                        <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">John Doe</a></strong> <span>Happy Customer</span>                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="our-features-box">
                    <div class="row">
                        <div class="col-lg-12 space">
                            <div class="feature-box first"> <span class="fa fa-truck"></span>
                                <div class="content">
                                    <h3>Worldwide Delivery</h3>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 space">
                            <div class="feature-box"> <span class="fa fa-headphones"></span>
                                <div class="content">
                                    <h3>Help Center</h3>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 space">
                            <div class="feature-box"> <span class="fa fa-share"></span>
                                <div class="content">
                                    <h3>Easy RETURNS</h3>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 space">
                            <div class="feature-box last"> <span class="fa fa-phone"></span>
                                <div class="content">
                                    <h3>Helpline +0800 567 345</h3>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
      </div>
    </div>
</section>
@endsection
 
@section('scripts')
@endsection