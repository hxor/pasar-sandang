@extends('layouts.front.app')

@push('body-tag')
    <Body class="cms-index-index cms-home-page">
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-4 col-sm-3 hidden-xs">
            <div class="side-banner"><img src="{{ asset('assets/front/images/side-banner.jpg') }}" alt="banner"></div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 home-slider">
            <div id="thm-slideshow" class="thm-slideshow slider-block">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                    <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                        <ul>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('assets/front/images/slide-img1.jpg') }}">
                                <img src="{{ asset('assets/front/images/slide-img1.jpg') }}" alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                    data-bgrepeat='no-repeat' />
                                <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Todays Deals</span> </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fairy Style</span> </div>
                                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna, nunc, tincidunt, augue, augue facilisis facilisis.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                                </div>
                            </li>
                            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('assets/front/images/slide-img2.jpg') }}">
                                <img src="{{ asset('assets/front/images/slide-img2.jpg') }}" alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                    data-bgrepeat='no-repeat' />
                                <div class="info">
                                    <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Womens Day</span> </div>
                                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Hottest Deal</div>
                                    <div class='tp-caption Title sft  tp-resizeme small_text' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone'
                                        data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                        style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Buy Now</a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-push-3">
                <div style="overflow:hidden">
                    <div class="figure banner-with-effects effect-sadie1 banner-width  with-button" style="background-color:#ffffff"><img src="{{ asset('assets/front/images/watch.jpg') }}" alt="">
                        <div class="figcaption">
                            <div class="banner-content left top"><span style="color: #cccccc; font-size: 12px; letter-spacing:1px; font-weight:600">DIGITAL LIFE</span><br>
                                <span style="font-size: 24px; color: #ffffff;">Slim, smart and <br style="color: #ffffff; font-size: 24px;">
                    beautiful</span></div>
                        </div>
                        <a href="" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a></div>
                    <div class="figure banner-with-effects effect-sadie1 banner-width  with-button" style="background-color:#ffffff"><img src="{{ asset('assets/front/images/shoes-banner.jpg') }}" alt="">
                        <div class="figcaption">
                            <div class="banner-content left top"><b><span style="color: #444444; font-size: 12px; letter-spacing:1px">TODAYS OFFER</span></b><br>
                                <span style="color: #000000; font-size: 24px; padding-top:5px">Men's shoes <br style="color: #000000; font-size: 24px;">
                    collection</span></div>
                        </div>
                        <a href="#" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a></div>
                </div>
                <div class="content-page">
                    <!-- featured category -->
                    <div class="category-product">
                        <div class="navbar nav-menu">
                            <div class="navbar-collapse">
                                <div class="new_title">
                                    <h2>New Products</h2>
                                </div>
                                {{--  <ul class="nav navbar-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">Women</a></li>
                                    <li class=" "><a data-toggle="tab" href="#tab-2">Swimwear</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" class="active">Clothing</a></li>
                                </ul>  --}}
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <div class="product-bestseller">
                            <div class="product-bestseller-content">
                                <div class="product-bestseller-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        @if (App\Models\Product::where('stock', true)->count() > 0)
                                            <div class="tab-panel active">
                                                <div class="category-products">
                                                    <ul class="products-grid">
                                                        @foreach (App\Models\Product::where('stock', true)->orderBy('created_at', 'DESC')->limit(4)->get() as $product)
                                                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                                                <div class="item-inner">
                                                                    <div class="item-img">
                                                                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="{{ route('product.detail',$product->slug) }}"> <img alt="{{ $product->name }}" src="{{ $product->photo_path }}"> </a>
                                                                            <div class="new-label new-top-left">new</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-info">
                                                                        <div class="info-inner">
                                                                            <div class="item-title"> <a title="Retis lapen casen" href=""> {{ $product->name }} </a></div>
                                                                            <div class="item-content">
                                                                                <div class="item-price">
                                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">Rp{{ number_format($product->price,2,'.',',') }}</span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="action">
                                                                                    <form action="{{ route('cart.add') }}" method="post">
                                                                                        {{ csrf_field() }}
                                                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                                        <input type="hidden" name="quantity" value=1>
                                                                                        <button class="button btn-cart" type="submit" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End  Item inner-->
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @else
                                            <div class="tab-panel" id="tab-4" style="left: 11px;"> No Products Found !! </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-banner"> <a href="#"><img alt="Banner" src="{{ asset('assets/front/images/banner-img.png') }}"></a> </div>
                <!-- bestsell slider -->
                <div class="bestsell-pro">
                    <div>
                        <div class="slider-items-products">
                            <div class="bestsell-block">
                                <div class="block-title">
                                    <h2>Best Sellers</h2>
                                </div>
                                <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid block-content">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="new-label new-top-left">new</div>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="new-label new-top-left">new</div>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$115.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                            </div>
                                                        <div class="item-content">
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$175.00</span>                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-pro-block">
                    <div class="slider-items-products">
                        <div class="new-arrivals-block">
                            <div class="block-title">
                                <h2>Featured Product</h2>
                            </div>
                            <div id="new-arrivals-slider" class="product-flexslider hidden-buttons">
                                <div class="home-block-inner"> </div>
                                <div class="slider-items slider-width-col4 products-grid block-content">
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="new-label new-top-left">new</div>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:80%" class="rating"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$185.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="new-label new-top-left">new</div>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$235.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$335.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                            <li><a class="link-compare" href="compare.html"></a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                        </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div style="width:80%" class="rating"></div>
                                                                </div>
                                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                    <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span>                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <div>
                    <div class="sideoffer-banner">
                        <a href="#" title="Side Offer Banner">
            
            <img class="hidden-xs" src="{{ asset('assets/front/images/custom-slide1.jpg') }}" alt="Side Offer Banner"></a>
                    </div>
                </div>
                <div class="hot-deal">
                    <ul class="products-grid">
                        <li class="right-space two-height item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="{{ asset('assets/front/products-images/product1.jpg') }}" alt="Retis lapen casen"> </a>
                                        <div class="hot-label hot-top-left">Hot Deal</div>
                                        <div class="box-hover">
                                            <ul class="add-to-links">
                                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                <li><a class="link-compare" href="compare.html"></a> </li>
                                            </ul>
                                        </div>
                                        <div class="box-timer">
                                            <div class="countbox_1 timer-grid"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Retis lapen casen </a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a>                                                        </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>Add to Cart</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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
                <div class="featured-add-box">
                    <div class="featured-add-inner"> <a href="#"> <img src="{{ asset('assets/front/images/bottom_banner.jpg') }}" alt="f-img"></a>
                        <div class="banner-content">
                            <div class="banner-text">Electronic's</div>
                            <div class="banner-text1">20% off</div>
                            <p>limited time offer</p>
                            <a href="#" class="view-bnt">Shop now</a> </div>
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
<!-- Latest Blog -->
<div class="container">
    <div class="row">
        <div class="blog-outer-container">
            <div class="block-title">
                <h2>Latest Blog</h2>
            </div>
            <div class="blog-inner">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img1.jpg') }}"> </a>                        </div>
                    <div class="blog-preview_info">
                        <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                            <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
                        </ul>
                        <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats
                            vitaes nemo minima rerums unsers sadips.</div>
                        <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img3.jpg') }}"> </a>                        </div>
                    <div class="blog-preview_info">
                        <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                            <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
                        </ul>
                        <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats
                            vitaes nemo minima rerums unsers sadips.</div>
                        <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img2.jpg') }}"> </a>                        </div>
                    <div class="blog-preview_info">
                        <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                            <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                            <li><i class="fa fa-clock-o"></i><span class="day">25</span> <span class="month">Jan</span></li>
                        </ul>
                        <div class="blog-preview_desc">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.
                            Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</div>
                        <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Latest Blog -->
@endsection
 
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/front/js/countdown.js') }}"></script>
<script type='text/javascript'>
    jQuery(document).ready(function() {
    jQuery('#rev_slider_4').show().revolution({
    dottedOverlay: 'none',
    delay: 5000,
    startwidth: 850,
    startheight: 428,
    hideThumbs: 200,
    thumbWidth: 200,
    thumbHeight: 50,
    thumbAmount: 2,
    navigationType: 'thumb',
    navigationArrows: 'solo',
    navigationStyle: 'round',
    touchenabled: 'on',
    onHoverStop: 'on',
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    spinner: 'spinner0',
    keyboardNavigation: 'off',
    navigationHAlign: 'center',
    navigationVAlign: 'bottom',
    navigationHOffset: 0,
    navigationVOffset: 20,
    soloArrowLeftHalign: 'left',
    soloArrowLeftValign: 'center',
    soloArrowLeftHOffset: 20,
    soloArrowLeftVOffset: 0,
    soloArrowRightHalign: 'right',
    soloArrowRightValign: 'center',
    soloArrowRightHOffset: 20,
    soloArrowRightVOffset: 0,
    shadow: 0,
    fullWidth: 'on',
    fullScreen: 'off',
    stopLoop: 'off',
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: 'off',
    autoHeight: 'off',
    forceFullWidth: 'on',
    fullScreenAlignForce: 'off',
    minFullScreenHeight: 0,
    hideNavDelayOnMobile: 1500,
    hideThumbsOnMobile: 'off',
    hideBulletsOnMobile: 'off',
    hideArrowsOnMobile: 'off',
    hideThumbsUnderResolution: 0,
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    fullScreenOffsetContainer: ''
    });
    });
</script>
<!-- Hot Deals Timer 1-->
<script type="text/javascript">
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
    ddiff = new Date((dnow1) - (dthen1));
    else
    ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);
    
    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);
</script>
@endsection