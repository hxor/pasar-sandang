@extends('layouts.front.app') 

@section('title')
 | About Us
@endsection
 
@push('body-tag')
    <Body class="about-us-page">
@endpush 

@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-sm-push-3">
            <article class="col-main">
            <div class="page-title">
                <h2>About Us</h2>
            </div>
            <div class="static-contain">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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