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
                        <div class="single-product grid-sizer transition wood-flooring" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition outdoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition wood-flooring" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition outdoor" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition wood-flooring" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                        <div class="single-product grid-sizer transition cabinets" data-category="iIndoor"><img src="https://placehold.it/300x300" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
