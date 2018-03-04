@extends('layouts.front.app') 

@section('title')
 | {{ $product->name }} | Products Detail
@endsection

@push('body-tag')
    <Body class="category-page">
@endpush
 
@section('content')
<section class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <ul>
                    <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a> <span>/</span> </li>
                    <li class="category1599"> <a href="{{ route('product.list') }}" title="">Product</a> <span>/ </span> </li>
                    <li class="category1601"> <strong>{{ $product->name }}</strong> </li>
                </ul>
            </div>
            <!-- Breadcrumbs End -->
            <div class="col-sm-12 col-xs-12">

                <article class="col-main">
                    <div class="product-view">
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                    <div class="new-label new-top-left"> New </div>
                                    <div class="product-image">
                                        <div class="product-full"> <img id="product-zoom" src="{{ $product->photo_path }}" data-zoom-image="{{ $product->photo_path }}"
                                                alt="product-image" /> </div>
                                        <div class="more-views">
                                            <div class="slider-items-products">
                                                <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                                    <div class="slider-items slider-width-col4 block-content">
                                                        @foreach ($product->images as $image)
                                                            <div class="more-views-items"> <a href="#" data-image="{{ asset('/images/products/' . $image->path) }}" data-zoom-image="{{ asset('/images/products/' . $image->path) }}"> <img id="product-zoom"  src="{{ asset('/images/products/' . $image->path) }}" alt="{{ $product->name }}"/> </a></div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{ $product->name }}</h1>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> Rp{{ number_format($product->price,2,'.',',') }} </span>                                                </p>
                                            <p class="availability in-stock pull-right"><span>In Stock</span></p>
                                        </div>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="custom pull-left"> <span class="qty-label">QTY:</span>
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                        class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                        class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <h2>Keterangan Produk</h2>
                                        {!! $product->description !!}
                                    </div>
                                    <div class="social">
                                        <ul class="link">
                                            <li class="fb"><a href="#"></a></li>
                                            <li class="tw"><a href="#"></a></li>
                                            <li class="googleplus"><a href="#"></a></li>
                                            <li class="rss"><a href="#"></a></li>
                                            <li class="pintrest"><a href="#"></a></li>
                                            <li class="linkedin"><a href="#"></a></li>
                                            <li class="youtube"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Related Slider -->
                        <div class="related-pro">
                            <div class="slider-items-products">
                                <div class="related-block">
                                    <div class="home-block-inner">
                                        <div class="block-title">
                                            <h2>Related Products</h2>
                                        </div>
                                    </div>
                                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 products-grid block-content">
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                                            <div class="new-label new-top-right">new</div>
                                                            <div class="box-hover">
                                                                <ul class="add-to-links">
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width:80%" class="rating"></div>
                                                                    </div>
                                                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                        <a href="#">Add Review</a> </p>
                                                                </div>
                                                            </div>
                                                            <div class="item-content">
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$235.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$425.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$525.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span>                                                                        </span>
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
                                                                    <li><a class="link-quickview" href="quick_view.html"></a>                                                                        </li>
                                                                    <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                                                    <li><a class="link-compare" href="compare.html"></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a>                                                                </div>
                                                            <div class="item-content">
                                                                <div class="rating">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:80%" class="rating"></div>
                                                                        </div>
                                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span>                                                                            <a href="#">Add Review</a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$185.00</span>                                                                        </span>
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
                        <!-- End related products Slider -->
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