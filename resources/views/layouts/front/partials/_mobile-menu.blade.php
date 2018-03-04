<div id="mobile-menu">
    <ul>
        <li>
            <div class="mm-search">
                <form id="search1" name="search">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                        </div>
                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li><a href="{{ url('/') }}">Home</a> </li>
        @foreach (App\Models\Category::where('parent_id', null)->get() as $category)
            @if ($category->childs()->count() > 0)
                <li> <a href="{{ url('/' . $category->slug) }}"> {{ $category->title }}</a>
                    <ul class="nav">
                        @foreach ($category->childs as $child)
                            <li><a href="{{ url('/' . $child->slug) }}">{{ $child->slug }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li><a href="{{ url('/' . $category->slug) }}">{{ $category->title }}</a> </li>
            @endif  
        @endforeach
    </ul>
    <div class="top-links">
        <ul class="links">
            <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
            <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
            <li class="last"><a title="About Us" href="about_us.html"><span>About Us</span></a> </li>
        </ul>
    </div>
</div>