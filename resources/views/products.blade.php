@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <h1>Our Products</h1>
            <p>Leaders in wood industry</p>
        </div>
    </section>
    <section id="our-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-4">Our Products</h2>
                    <p class="header-sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam tempor incididunt</p>
                    <div id="filters" class="button-group">
                        <button class="button is-checked" data-filter="*">All</button>
                        <button class="button" data-filter=".wood-flooring">Wood Flooring</button>
                        <button class="button" data-filter=".cabinets">Cabinets</button>
                        <button class="button" data-filter=".outdoor">Outdoor</button>
                    </div>
                    <div class="products-isotope">
                        <div class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/3.jpg" alt=""></div>
                        <div class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/5.jpg" alt=""></div>
                        <div class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/4.jpg" alt=""></div>
                        <div class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/2.jpg" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/2.png" alt=""></div>
                        <div class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/3.jpg" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/1.png" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/3.png" alt=""></div>
                    </div>
                    <div class="text-center mt-5">
                        <a class="icon-button" href="{{route('products')}}"><i class="fas fa-star"></i> View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
