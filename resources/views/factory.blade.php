@include('layout.header', ['PageTitle' => 'Our Factory'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="our-factory-hero-section">
        <div class="dark-overlap">
            <h1>Our Factory</h1>
            <p>See how the beauty is made</p>
        </div>
    </section>
    <section class="about-us-description" id="homepage-aboutus-section">
        <img id="homepage-about-artistic-touch" src="{{url('public')}}/images/wood-big-half.png" alt="wood-big-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Since 1965</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/factory/standing-worker.jpg" alt="WoodCourt Factory Worker">
                </div>
            </div>
        </div>
    </section>
    <section id="our-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-4">See it in Action</h2>
                    <p class="header-sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam tempor incididunt</p>
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
