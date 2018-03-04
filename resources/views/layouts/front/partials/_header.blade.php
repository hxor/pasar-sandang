<header>
    <div class="header-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
                    <div class="toplinks">
                        <div class="links">
                            <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </div>
                            <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a> </div>
                            <div class="login"><a href="about_us.html"><span class="hidden-xs"> About Us </span></a> </div>
                        </div>
                    </div>
                    <!-- End Header Top Links -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                <!-- Header Logo -->
                <div class="logo"> <a title="Magento Commerce" href="{{ url('/') }}"><img alt="Magento Commerce" src="{{ asset('assets/front/images/logo.png') }}"> </a>                    </div>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
                <div class="search-box">
                    <form id="search_mini_form" action="{{ route('product.list') }}" method="get">
                        <!-- Autocomplete End code -->
                        <input id="search" type="text" name="q" placeholder="Cari produk lainnya..." class="searchbox" maxlength="128">
                        <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                </div>
                <div class="top-cart-contain">
                    <!-- Top Cart -->
                    <div class="mini-cart">
                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"><span class="price hidden-xs">Shopping Cart</span> <span class="cart_count hidden-xs">2 Items/ $4580</span> </a>                            </div>
                        <div>
                            <div class="top-cart-content">
                                <!--block-subtitle-->
                                <ul class="mini-products-list" id="cart-sidebar">
                                    <li class="item first">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit"
                                                        title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>                                                    </div>
                                                <!--access--><strong>1</strong> x <span class="price">$179.99</span>
                                                <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item last">
                                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit"
                                                        title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>                                                    </div>
                                                <!--access--><strong>1</strong> x <span class="price">$80.00</span>
                                                <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!--actions-->
                                <div class="actions">
                                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                                    <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Cart -->
                    <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                        <input value="" type="hidden">
                        <input id="enable_module" value="1" type="hidden">
                        <input class="effect_to_cart" value="1" type="hidden">
                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                    </div>
                </div>
                <!-- mgk wishlist -->
            </div>
        </div>
    </div>
    <nav class="hidden-xs">
        <div class="nav-container">
            <div class="col-md-3 col-xs-12 col-sm-3">
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><i class="fa fa-navicon"></i> All Categories</h3>
                        </div>
                        <div class="mega-menu-category">
                            <ul class="nav">
                                <li class="nosub"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                                @foreach (App\Models\Category::where('parent_id', null)->get() as $category)
                                    @if ($category->childs()->count() > 0)
                                        <li> <a href="{{ url('/category/' . $category->slug) }}"><i class="fa fa-th-list"></i> {{ $category->title }}</a>
                                            <div class="wrap-popup column1">
                                                <div class="popup">
                                                    <ul class="nav">
                                                        @foreach ($category->childs as $child)
                                                            <li><a href="{{ url('/category/' . $child->slug) }}">{{ $child->slug }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <li class="nosub">
                                            <a href="{{ url('/category/' . $category->slug) }}">
                                                <i class="fa fa-th-list"></i> {{ $category->title }}
                                            </a>
                                        </li>
                                    @endif  
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features box -->
            <div class="our-features-box hidden-xs">
                <div class="features-block">
                    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block"> 
                        <a href="{{ url('/') }}">Home</a> 
                        <a href="{{ route('product.list') }}">Shop</a>                      
                        <span>Pesan online atau bisa hubungi kami di (+1800) 000 8808</span> 
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>