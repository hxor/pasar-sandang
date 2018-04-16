@extends('layouts.front.app')

@section('title')
 | Products | All Product
@endsection

@push('body-tag')
    <Body class="grid-page"> 
@endpush

@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-push-3">
                {{-- <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li class="category1599"> <a href="grid.html" title="">Women</a> <span>/ </span> </li>
                        <li class="category1600"> <a href="grid.html" title="">Styliest Bag</a> <span>/</span> </li>
                        <li class="category1601"> <strong>Clutch Handbags</strong> </li>
                    </ul>
                </div>
                <!-- Breadcrumbs End -->
                <div class="page-title">
                    <h2 class="page-heading"> <span class="page-heading-title">Women</span> </h2>
                </div> --}}
                <div class="category-description std">
                    <div class="slider-items-products">
                        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                                <!-- Item -->
                                <div class="item"> <a href="#"><img alt="" src="{{ asset('assets/front/images/category-img1.jpg') }}"></a> </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="item"> <a href="#"><img alt="" src="{{ asset('assets/front/images/category-img2.jpg') }}"></a>
                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="col-main">
                    <div class="toolbar">
                        <div class="display-product-option">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    {!! $products->appends(compact('query'))->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            @foreach ($products as $product)
                                <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}" class="product-image"><img src="{{ $product->photo_path }}" alt="{{ $product->name }}"></a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a></div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span class="price">Rp{{ number_format($product->price,2,'.',',') }}</span> </span>
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
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="toolbar">
                        <div class="display-product-option">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    {!! $products->appends(compact('query'))->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
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