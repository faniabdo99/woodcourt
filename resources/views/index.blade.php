@include('layout.header', ['PageTitle' => 'Very Cool Site'])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <h1>The Wood Court <br> Title</h1>
            <p class="mb-5">The Leaders in wood industry</p>
            <a class="icon-button mr-5" href="#"> <i class="fas fa-star"></i> About us</a>
            <a href="#" class="text-white">Our Categories</a>
        </div>
    </section>
    <section id="homepage-categories">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">Our Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition">
                        <div class="p-3">
                            <h3>category title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition">
                        <div class="p-3">
                            <h3>category title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition">
                        <div class="p-3">
                            <h3>category title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="icon-button mr-5" href="#"> <i class="fas fa-bullhorn"></i> Explore Categories</a>
                </div>
            </div>
        </div>
    </section>
    <section id="homepage-cta">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Why Us?</h2>
                        <p class="mb-5">Why Not?</p>
                        <a class="icon-button" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="homepage-promotions">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-5">Promotion Collections</h2>
                    <ul class="owl-carousel owl-theme three-items-carousel">
                        <li class="item"><img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition"></li>
                        <li class="item"><img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition"></li>
                        <li class="item"><img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition"></li>
                        <li class="item"><img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition"></li>
                        <li class="item"><img src="{{url('public/')}}/images/about-us-descrition.jpg" alt="about-us-descrition"></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 mt-5 text-center">
                    <a class="icon-button mt-5" href="{{route('about')}}"> <i class="fas fa-star"></i> View All</a>
                </div>
            </div>
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
                        <button class="button" data-filter=".indoor">Indoor</button>
                        <button class="button" data-filter=".outdoor">Outdoor</button>
                        <button class="button" data-filter=".w-stairs">Wooden Stairs</button>
                    </div>
                    <div class="products-isotope">
                      <div class="single-product grid-sizer transition indoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition outdoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition indoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition outdoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition w-stairs" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition indoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition w-stairs" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                      <div class="single-product grid-sizer transition w-stairs" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                    </div>
                    <div class="text-center mt-5">
                      <a class="icon-button" href="#"><i class="fas fa-star"></i> View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
