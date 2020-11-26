@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="homepage-hero-section">
        <div class="owl-carousel full-width-carousel">
            <div id="slide-one">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h2>The Wood Court</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                            <div class="col-12 col-lg-5 hero-section-content">
                                <div class="social-media-hero">
                                    <h3>Contact Us</h3>
                                    <p>Find Us On Social Media</p>
                                    <ul>
                                        <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>
                                                    @thewoodcourt</span></a></li>
                                        <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                                        <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-two">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h2>Tiles</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                            <div class="col-12 col-lg-5 hero-section-content">
                                <div class="social-media-hero">
                                    <h3>Contact Us</h3>
                                    <p>Find Us On Social Media</p>
                                    <ul>
                                        <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>
                                                    @thewoodcourt</span></a></li>
                                        <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                                        <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-three">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h2>The Wood Court</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                            <div class="col-12 col-lg-5 hero-section-content">
                                <div class="social-media-hero">
                                    <h3>Contact Us</h3>
                                    <p>Find Us On Social Media</p>
                                    <ul>
                                        <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>
                                                    @thewoodcourt</span></a></li>
                                        <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                                        <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-four">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <h2>Outdoor</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                            <div class="col-12 col-lg-5 hero-section-content">
                                <div class="social-media-hero">
                                    <h3>Contact Us</h3>
                                    <p>Find Us On Social Media</p>
                                    <ul>
                                        <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>
                                                    @thewoodcourt</span></a></li>
                                        <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                                        <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="homepage-categories">
        <img id="homepage-categories-artistic-touch" src="{{url('public')}}/images/wood-small-quarter.png" alt="wood-small-quarter">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">Our Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/categories/wood-flooring.jpg" alt="wood-flooring">
                        <div class="p-3">
                            <h3>Wood Flooring</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#wood-flooring-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/cabinets.jpg" alt="Cabinets">
                        <div class="p-3">
                            <h3>Cabinets</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#cabinets-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/outdoor.jpg" alt="Outdoor">
                        <div class="p-3">
                            <h3>Outdoor</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#outdoor-modal">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="icon-button mr-5" href="{{route('products')}}"> <i class="fas fa-bullhorn"></i> Explore Products</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Homepage Category Modals Start -->
    <div class="modal fade category-modal" id="wood-flooring-modal" tabindex="-1" role="dialog" aria-labelledby="wood-flooring-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Wood Flooring</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                            <ul class="sub-categories-list">
                                <li data-target="hdf-floors" class="active">HDF Floors</li>
                                <li data-target="engineered-floors">Engineered Floors</li>
                                <li data-target="tiles">Tiles</li>
                                <li data-target="stairs">Stairs</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="hdf-floors">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                            <ul class="category-images-list" id="engineered-floors">
                                <li><a href="{{url('public')}}/images/categories/eng-floors-1.jpg" target="_blank"><img src="{{url('public')}}/images/categories/eng-floors-1.jpg" alt="engineered-floors"></a></li>
                                <li><a href="{{url('public')}}/images/categories/eng-floors-2.jpg" target="_blank"><img src="{{url('public')}}/images/categories/eng-floors-2.jpg" alt="engineered-floors"></a></li>
                            </ul>
                            <ul class="category-images-list" id="tiles">
                                <li><a href="{{url('public')}}/images/categories/tiles-1.jpg" target="_blank"><img src="{{url('public')}}/images/categories/tiles-1.jpg" alt="tiles"></a></li>
                                <li><a href="{{url('public')}}/images/categories/tiles-2.jpg" target="_blank"><img src="{{url('public')}}/images/categories/tiles-2.jpg" alt="tiles"></a></li>
                            </ul>
                            <ul class="category-images-list" id="stairs">
                                <li><a href="{{url('public')}}/images/categories/stairs-1.jpg" target="_blank"><img src="{{url('public')}}/images/categories/stairs-1.jpg" alt="stairs"></a></li>
                                <li><a href="{{url('public')}}/images/categories/stairs-2.jpg" target="_blank"><img src="{{url('public')}}/images/categories/stairs-2.jpg" alt="stairs"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade category-modal" id="cabinets-modal" tabindex="-1" role="dialog" aria-labelledby="cabinets-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cabinets</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                            <ul class="sub-categories-list">
                                <li data-target="kitchens" class="active">Kitchens</li>
                                <li data-target="dressings">Dressings</li>
                                <li data-target="bathroom-cabinets">Bathroom cabinets</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="kitchens">
                                <li><a href="{{url('public')}}/images/categories/kitchen-1.jpg" target="_blank"><img src="{{url('public')}}/images/categories/kitchen-1.jpg" alt="Kitchen Image"></a></li>
                                <li><a href="{{url('public')}}/images/categories/kitchen-2.jpg" target="_blank"><img src="{{url('public')}}/images/categories/kitchen-2.jpg" alt="Kitchen Image"></a></li>
                            </ul>
                            <ul class="category-images-list" id="dressings">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                            <ul class="category-images-list" id="bathroom-cabinets">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade category-modal" id="outdoor-modal" tabindex="-1" role="dialog" aria-labelledby="outdoor-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Outdoor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <p class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                            <ul class="sub-categories-list">
                                <li data-target="teak-flooring" class="active">Teak Flooring</li>
                                <li data-target="shower-units">Shower Units</li>
                                <li data-target="pergolas">Pergolas</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="teak-flooring">
                                <li><a href="{{url('public')}}/images/categories/teak-flooring-1.jpg" target="_blank"><img src="{{url('public')}}/images/categories/teak-flooring-1.jpg" alt="teak-flooring"></a></li>
                                <li><a href="{{url('public')}}/images/categories/teak-flooring-2.jpg" target="_blank"><img src="{{url('public')}}/images/categories/teak-flooring-2.jpg" alt="teak-flooring"></a></li>
                            </ul>
                            <ul class="category-images-list" id="shower-units">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                            <ul class="category-images-list" id="pergolas">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Homepage Category Modals End -->
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
        <img id="homepage-promotions-artistic-touch" src="{{url('public')}}/images/wood-small-quarter.png" alt="wood-small-quarter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-5">Promotion Collections</h2>
                    <ul class="owl-carousel owl-theme three-items-carousel">
                        <li class="item"><img src="{{url('public/')}}/images/collections/1.jpg" alt="Collections"></li>
                        <li class="item"><img src="{{url('public/')}}/images/collections/2.jpg" alt="Collections"></li>
                        <li class="item"><img src="{{url('public/')}}/images/collections/3.jpg" alt="Collections"></li>
                        <li class="item"><img src="{{url('public/')}}/images/collections/4.jpg" alt="Collections"></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-lg-5 mt-0">
                <div class="col-12 mt-lg-5 mt-0 text-center">
                    <a class="icon-button mt-lg-5 mt-0" href="{{route('products')}}"> <i class="fas fa-star"></i> View All</a>
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
                    <div class="text-center mt-5">
                        <a class="icon-button" href="{{route('products')}}"><i class="fas fa-star"></i> View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-video-cta" id="homepage-cta">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a class="text-white" href="javascript:;" id="homepage-play-video"> <i class="fas fa-play-circle fa-5x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Item Here -->

    <!-- Video Item Here -->
    <section class="about-us-description" id="homepage-aboutus-section">
        <img id="homepage-about-artistic-touch" src="{{url('public')}}/images/wood-big-half.png" alt="wood-big-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>We are the Wood Court</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="icon-button"><i class="fas fa-star"></i>About us</a>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="the alt here">
                </div>
            </div>

        </div>
    </section>
    <section class="testimonials-section">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>What People are Saying</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme full-width-carousel">
                    <div class="row slide">
                      <div class="col-lg-4 col-12">
                          <img class="user-image" src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=griOnXIMKHIAX_aSmd7&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=46adb4f80f13147af56ac65356dd21dd&oe=5FE6C96E" alt="Ahamd Elsayeed">
                          <h4 class="user-name">Ahmed Elsayeed</h4>
                      </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>Understanding for customer requirements</h3>
                                <p>The Wood Court is a trusted and professional company
                                  Understanding for customer requirements
                                  It was great to meet and know most of the Team who work their
                                  Special thanks to  Ayman and Ahmed Zahran for being so keen to deliver the best quality to ensure customer satisfaction</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image" src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=griOnXIMKHIAX_aSmd7&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=46adb4f80f13147af56ac65356dd21dd&oe=5FE6C96E" alt="Ahamd Elsayeed">
                            <h4 class="user-name">Ahmed Elsayeed</h4>
                            <p class="user-job-title">Digital Marketer Special Guy some long stuff here</p>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>This Product is Awesome!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image" src="https://placehold.it/200x200" alt="person name">
                            <h4 class="user-name">person name goes here</h4>
                            <p class="user-job-title">Digital Marketer Special Guy some long stuff here</p>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>This Product is Awesome!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="https://www.facebook.com/thewoodcourt/reviews/" target="_blank" class="icon-button"><i class="fab fa-facebook"></i> More Reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logo-parade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>Our Clients</h2>
                    <ul class="owl-carousel owl-theme multi-items-carousel">
                        <li class="item"><img src="{{url('public')}}/images/partners/arabcont.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/cook-club.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/four-seasons.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/hassan-allam.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/hilton.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/mobica.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/orascom.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/sheraton.png" alt="" title="" /></li>
                        <li class="item"><img src="{{url('public')}}/images/partners/siac.png" alt="" title="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
