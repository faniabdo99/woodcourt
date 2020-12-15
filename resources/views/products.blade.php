@include('layout.header', ['PageTitle' => 'Products'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="products-section">
        <div class="dark-overlap">
            <h1>Our Products</h1>
            <p>Kitchen, Floor ... and More</p>
        </div>
    </section>
    <section id="our-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-4">Our Products</h2>
                    <div id="filters" class="button-group">
                        <button class="button is-checked" data-filter="*">All</button>
                        <button class="button" data-filter=".wood-flooring">Wood Flooring</button>
                        <button class="button" data-filter=".cabinets">Cabinets</button>
                        <button class="button" data-filter=".outdoor">Outdoor</button>
                    </div>
                    <div class="products-isotope">
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/3.jpg" alt=""></a>
                        <a data-fancybox="outdoor" href="{{url('public')}}/images/categories/outdoor/shower-units/2.png" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/5.jpg" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/tiles/3.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/4.jpg" alt=""></a>
                        <a data-fancybox="outdoor" href="{{url('public')}}/images/categories/outdoor/pergolas/3.jpg" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/2.jpg" alt=""></a>
                        <a data-fancybox="cabinets" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/1.png" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/2.png" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/stairs/3.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/1.jpg" alt=""></a>
                        <a data-fancybox="cabinets" href="{{url('public')}}/images/categories/cabinets/dressings/1.png" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/1.png" alt=""></a>
                        <a data-fancybox="cabinets" href="{{url('public')}}/images/categories/cabinets/kitchens/1.png" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/3.png" alt=""></a>
                        <a data-fancybox="cabinets" href="{{url('public')}}/images/categories/cabinets/kitchens/4.png" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/4.png" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/tiles/15.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/15.jpg" alt=""></a>
                        <a data-fancybox="outdoor" href="{{url('public')}}/images/categories/outdoor/teak-flooring/10.jpg" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/10.jpg" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/22.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/22.jpg" alt=""></a>
                        <a data-fancybox="outdoor" href="{{url('public')}}/images/categories/outdoor/teak-flooring/11.jpg" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/11.jpg" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/stairs/7.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/7.jpg" alt=""></a>
                        <a data-fancybox="cabinets" href="{{url('public')}}/images/categories/cabinets/kitchens/5.png" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/5.png" alt=""></a>
                        <a data-fancybox="w-flooring" href="{{url('public')}}/images/categories/wood-flooring/tiles/19.jpg" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/19.jpg" alt=""></a>
                    </div>
                    <div class="text-center mt-5">
                        <a class="icon-button" id="load-more" href="javascript:;"><i class="fas fa-star"></i> Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>
