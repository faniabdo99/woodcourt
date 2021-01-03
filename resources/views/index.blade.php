@include('layout.header', ['PageTitle' => 'Kitchen, Floor ... and More'])

<body>
    @include('layout.navbar')
    <section class="homepage-hero-section" id="homepage-hero-section">
        <div class="owl-carousel full-width-carousel">
            <div class="container-fluid">
                <div class="row">
                    <div class="pt-5 content-section col-lg-4 col-12">
                        <h2>Welcome to <img class="d-lg-inline d-none w-auto" height="80" src="{{url('public')}}/images/logo-black.png" alt="The Wood Court Logo"> <img class="d-lg-none d-inline w-auto" height="80"
                              src="{{url('public')}}/images/logo-white.png" alt="The Wood Court Logo"></h2>
                        <p class="description mb-5">The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood
                            and engineered wood to make your life more comfortable.</p>
                        <a class="icon-button" href="#homepage-categories"> <i class="fas fa-star"></i> Our Products</a>
                        <img class="end-img d-lg-block d-none" src="{{url('public')}}/images/wood-small-quarter.png">
                    </div>
                    <div id="slide-three" class="col-lg-8 col-12 homepage-herosection-bg-image">
                        <div class="overlay"></div> <!-- Mobile Applicable Only -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class=" content-section col-lg-4 col-12">
                        <img class="logo-img d-lg-block d-none" src="{{url('public')}}/images/logo-black.png" alt="The Wood Court Logo">
                        <img class="logo-img d-lg-none d-block" src="{{url('public')}}/images/logo-white.png" alt="The Wood Court Logo">
                        <p class="p-category">Products</p>
                        <h2>Kitchens</h2>
                        <p class="description mb-5">Not just a wide variety of materials (natural & artificial), we also help you to design the kitchen befitting your personality, with the most storage areas and easy-access. Designed by
                            highly-reputed interior designers.</p>
                        <a class="icon-button" href="#homepage-categories"> <i class="fas fa-star"></i> Our Products</a>
                        <img class="end-img d-lg-block d-none" src="{{url('public')}}/images/wood-small-quarter.png">
                    </div>
                    <div id="slide-one" class="col-lg-8 col-12 homepage-herosection-bg-image">
                        <div class="overlay"></div> <!-- Mobile Applicable Only -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class=" content-section col-lg-4 col-12">
                        <img class="logo-img d-lg-block d-none" src="{{url('public')}}/images/logo-black.png" alt="The Wood Court Logo">
                        <img class="logo-img d-lg-none d-block" src="{{url('public')}}/images/logo-white.png" alt="The Wood Court Logo">
                        <p class="p-category">Products</p>
                        <h2>Engineered Floors</h2>
                        <p class="description mb-5">All the natural engineered wood flooring & fiberboard (HDF) you will need in one place. Classic, Modern, Country, Vintage, Contemporary, and even custom designs.</p>
                        <a class="icon-button" href="#homepage-categories"> <i class="fas fa-star"></i> Our Products</a>
                        <img class="end-img d-lg-block d-none" src="{{url('public')}}/images/wood-small-quarter.png">
                    </div>
                    <div id="slide-two" class="col-lg-8 col-12 homepage-herosection-bg-image">
                        <div class="overlay"></div> <!-- Mobile Applicable Only -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class=" content-section col-lg-6 col-12">
                        <img class="logo-img d-lg-block d-none" src="{{url('public')}}/images/logo-black.png" alt="The Wood Court Logo">
                        <img class="logo-img d-lg-none d-block" src="{{url('public')}}/images/logo-white.png" alt="The Wood Court Logo">
                        <p class="p-category">Products</p>
                        <h2>Outdoor</h2>
                        <p class="description mb-5">Nowadays with quarantine we all realized the importance and value of our private outdoor spaces. Get the best out of your garden, balcony, backyard, and more. See our Pergolas & Outdoor flooring new
                            designs.</p>
                        <a class="icon-button mr-lg-5 mr-0" href="#homepage-categories"> <i class="fas fa-star"></i> Our Products</a>
                        <img class="end-img d-lg-block d-none" src="{{url('public')}}/images/wood-small-quarter.png">
                    </div>
                    <div id="slide-four" class="col-lg-6 col-12 homepage-herosection-bg-image">
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
                    <h2 class="section-title">Our Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <a href="javascript:;" data-toggle="modal" data-target="#wood-flooring-modal">
                            <div class="category-card-bg" id="wood-flooring"></div>
                        </a>
                        <div class="p-3">
                            <a href="javascript:;" data-toggle="modal" data-target="#wood-flooring-modal">
                                <h3>Wood Flooring</h3>
                            </a>
                            <p>All-natural wood flooring & Fiberboard (HDF) you will need in one ...</p>
                            <a href="javascript:;" class="view-more-link" data-toggle="modal" data-target="#wood-flooring-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <a href="javascript:;" data-toggle="modal" data-target="#cabinets-modal">
                            <div class="category-card-bg" id="cabinets"></div>
                        </a>
                        <div class="p-3">
                            <a href="javascript:;" data-toggle="modal" data-target="#cabinets-modal">
                                <h3>Cabinets</h3>
                            </a>
                            <p>Not just a wide variety of materials (natural & artificial) but also ...</p>
                            <a href="javascript:;" class="view-more-link" data-toggle="modal" data-target="#cabinets-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <a href="javascript:;" data-toggle="modal" data-target="#outdoor-modal">
                            <div class="category-card-bg" id="outdoor"></div>
                        </a>
                        <div class="p-3">
                            <a href="javascript:;" data-toggle="modal" data-target="#outdoor-modal">
                                <h3>Outdoor</h3>
                            </a>
                            <p>Nowadays, after quarantine we all realaized the importance of our private...</p>
                            <a href="javascript:;" class="view-more-link" data-toggle="modal" data-target="#outdoor-modal">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="icon-button mr-lg-0 d-lg-inline d-block text-center" href="{{route('products')}}"> <i class="fas fa-bullhorn"></i> Explore Products</a>
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
                            <p class="category-description">All the natural engineered wood flooring & fiberboard (HDF) you will need in one place. Classic, Modern, Country, Vintage, Contemporary, and even custom designs.</p>
                            <ul class="sub-categories-list">
                                <li data-target="engineered-floors" class="active">Engineered Floors</li>
                                <li data-target="tiles">Tiles</li>
                                <li data-target="stairs">Stairs</li>
                                <li data-target="hdf-floors">HDF Floors</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="engineered-floors">
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/14.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/14.jpg" alt="engineered-floors-14" title="engineered-floors-14"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/15.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/15.jpg" alt="engineered-floors-15" title="engineered-floors-15"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/16.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/16.jpg" alt="engineered-floors-16" title="engineered-floors-16"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/17.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/17.jpg" alt="engineered-floors-17" title="engineered-floors-17"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/18.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/18.jpg" alt="engineered-floors-18" title="engineered-floors-18"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/19.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/19.jpg" alt="engineered-floors-19" title="engineered-floors-19"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/20.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/20.jpg" alt="engineered-floors-20" title="engineered-floors-20"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/21.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/21.jpg" alt="engineered-floors-21" title="engineered-floors-21"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/22.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/22.jpg" alt="engineered-floors-22" title="engineered-floors-22"></a></li>
                            </ul>
                            <ul class="category-images-list" id="tiles">
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/1.jpg" alt="tiles-1"
                                          title="tiles-1"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/2.jpg" alt="tiles-2"
                                          title="tiles-2"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/3.jpg" alt="tiles-3"
                                          title="tiles-3"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/4.jpg" alt="tiles-4"
                                          title="tiles-4"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/5.jpg" alt="tiles-5"
                                          title="tiles-5"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/6.jpg" alt="tiles-6"
                                          title="tiles-6"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/7.jpg" alt="tiles-7"
                                          title="tiles-7"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/8.jpg" alt="tiles-8"
                                          title="tiles-8"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/9.jpg" alt="tiles-9"
                                          title="tiles-9"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/10.jpg" alt="tiles-10"
                                          title="tiles-10"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/11.jpg" alt="tiles-11"
                                          title="tiles-11"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/12.jpg" alt="tiles-12"
                                          title="tiles-12"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/13.jpg" alt="tiles-13"
                                          title="tiles-13"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/14.jpg" alt="tiles-14"
                                          title="tiles-14"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/15.jpg" alt="tiles-15"
                                          title="tiles-15"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/16.jpg" alt="tiles-16"
                                          title="tiles-16"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/17.jpg" alt="tiles-17"
                                          title="tiles-17"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/18.jpg" alt="tiles-18"
                                          title="tiles-18"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/19.jpg" alt="tiles-19"
                                          title="tiles-19"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/20.jpg" alt="tiles-20"
                                          title="tiles-20"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/21.jpg" alt="tiles-21"
                                          title="tiles-21"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/22.jpg" alt="tiles-22"
                                          title="tiles-22"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/23.jpg" alt="tiles-23"
                                          title="tiles-23"></a></li>
                                <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/24.jpg" alt="tiles-24"
                                          title="tiles-24"></a></li>
                            </ul>
                            <ul class="category-images-list" id="stairs">
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/1.jpg" alt="stairs-1"
                                          title="stairs-1"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/2.jpg" alt="stairs-2"
                                          title="stairs-2"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/3.jpg" alt="stairs-3"
                                          title="stairs-3"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/4.jpg" alt="stairs-4"
                                          title="stairs-4"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/5.jpg" alt="stairs-5"
                                          title="stairs-5"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/6.jpg" alt="stairs-6"
                                          title="stairs-6"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/7.jpg" alt="stairs-7"
                                          title="stairs-7"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/8.jpg" alt="stairs-8"
                                          title="stairs-8"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/9.jpg" alt="stairs-9"
                                          title="stairs-9"></a></li>
                                <li><a data-fancybox="stairs" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/stairs/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/10.jpg"
                                          alt="stairs-10" title="stairs-10"></a></li>
                            </ul>
                            <ul class="category-images-list" id="hdf-floors">
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/1.jpg" alt="hdf-1"
                                          title="hdf-1"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/2.jpg" alt="hdf-2"
                                          title="hdf-2"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/3.jpg" alt="hdf-3"
                                          title="hdf-3"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/4.jpg" alt="hdf-4"
                                          title="hdf-4"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/5.jpg" alt="hdf-5"
                                          title="hdf-5"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/6.jpg" alt="hdf-6"
                                          title="hdf-6"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/7.jpg" alt="hdf-7"
                                          title="hdf-7"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/8.jpg" alt="hdf-8"
                                          title="hdf-8"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/9.jpg" alt="hdf-9"
                                          title="hdf-9"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/10.jpg" alt="hdf-10"
                                          title="hdf-10"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/11.jpg" alt="hdf-11"
                                          title="hdf-11"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/12.jpg" alt="hdf-12"
                                          title="hdf-12"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/13.jpg" alt="hdf-13"
                                          title="hdf-13"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/14.jpg" alt="hdf-14"
                                          title="hdf-14"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/15.jpg" alt="hdf-15"
                                          title="hdf-15"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/16.jpg" alt="hdf-16"
                                          title="hdf-16"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/17.jpg" alt="hdf-17"
                                          title="hdf-17"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/18.jpg" alt="hdf-18"
                                          title="hdf-18"></a></li>
                                <li><a data-fancybox="hdf" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/hdf/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/hdf/19.jpg" alt="hdf-19"
                                          title="hdf-19"></a></li>
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
                            <p class="category-description">Not just a wide variety of materials (natural & artificial), we also help you to design the kitchen, sink units, and dressings befitting your personality. With the most storage areas and
                                easy-access. Designed by highly-reputed interior designers.</p>
                            <ul class="sub-categories-list">
                                <li data-target="kitchens" class="active">Kitchens</li>
                                <li data-target="dressings">Dressings</li>
                                <li data-target="bathroom-cabinets">Bathroom cabinets</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="kitchens">
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/1.png" alt="kitchens-1"
                                          title="kitchens-1"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/2.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/2.png" alt="kitchens-2"
                                          title="kitchens-2"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/3.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/3.png" alt="kitchens-3"
                                          title="kitchens-3"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/4.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/4.png" alt="kitchens-4"
                                          title="kitchens-4"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/5.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/5.png" alt="kitchens-5"
                                          title="kitchens-5"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/6.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/6.png" alt="kitchens-6"
                                          title="kitchens-6"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/7.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/7.png" alt="kitchens-7"
                                          title="kitchens-7"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/8.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/8.png" alt="kitchens-8"
                                          title="kitchens-8"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/9.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/9.png" alt="kitchens-9"
                                          title="kitchens-9"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/10.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/10.png" alt="kitchens-10"
                                          title="kitchens-10"></a></li>
                            </ul>
                            <ul class="category-images-list" id="dressings">
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/1.png" alt="dressings-1"
                                          title="dressings-1"></a></li>
                            </ul>
                            <ul class="category-images-list" id="bathroom-cabinets">
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/1.png"
                                          alt="bathroom-cabinets-1" title="bathroom-cabinets-1"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/2.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/2.png"
                                          alt="bathroom-cabinets-2" title="bathroom-cabinets-2"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/3.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/3.png"
                                          alt="bathroom-cabinets-3" title="bathroom-cabinets-3"></a></li>
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
                            <p class="category-description">Nowadays with quarantine we all realized the importance and value of our private outdoor spaces. Get the best out of your garden, balcony, backyard, and more. See our Pergolas & Outdoor
                                flooring new designs.</p>
                            <ul class="sub-categories-list">
                                <li data-target="teak-flooring" class="active">Teak Flooring</li>
                                <li data-target="shower-units">Shower Units</li>
                                <li data-target="pergolas">Pergolas</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list active" id="teak-flooring">
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/1.jpg"
                                          alt="teak-flooring-1" title="teak-flooring-1"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/2.jpg"
                                          alt="teak-flooring-2" title="teak-flooring-2"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/3.jpg"
                                          alt="teak-flooring-3" title="teak-flooring-3"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/4.jpg"
                                          alt="teak-flooring-4" title="teak-flooring-4"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/5.jpg"
                                          alt="teak-flooring-5" title="teak-flooring-5"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/6.jpg"
                                          alt="teak-flooring-6" title="teak-flooring-6"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/7.jpg"
                                          alt="teak-flooring-7" title="teak-flooring-7"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/8.jpg"
                                          alt="teak-flooring-8" title="teak-flooring-8"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/9.jpg"
                                          alt="teak-flooring-9" title="teak-flooring-9"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/10.jpg"
                                          alt="teak-flooring-10" title="teak-flooring-10"></a></li>
                                <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/11.jpg"
                                          alt="teak-flooring-11" title="teak-flooring-11"></a></li>
                            </ul>
                            <ul class="category-images-list" id="shower-units">
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/1.jpg"
                                          alt="shower-units-1" title="shower-units-1"></a></li>
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/2.jpg"
                                          alt="shower-units-2" title="shower-units-2"></a></li>
                            </ul>
                            <ul class="category-images-list" id="pergolas">
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/1.jpg" alt="pergolas-1"
                                          title="pergolas-1"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/2.jpg" alt="pergolas-2"
                                          title="pergolas-2"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/3.jpg" alt="pergolas-3"
                                          title="pergolas-3"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/4.jpg" alt="pergolas-4"
                                          title="pergolas-4"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/5.jpg" alt="pergolas-5"
                                          title="pergolas-5"></a></li>
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
                    <h2 class="col-12 d-block">Why Us?</h2>
                    <div class="col-lg-7 col-12">
                        <div class="row why-us-cards-toggler">
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="market-leaders">
                                    <div class="why-us-icon-container"><i class="flaticon-team-leader"></i></div>
                                    <h3 class="why-us-card-title">Market Leaders</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="experience">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-experience"></i>
                                    </div>
                                    <h3 class="why-us-card-title">40 Years of Experience</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="trained-human-resources">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-construction-and-tools"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Trained Human Resources</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="no-hidden-costs">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-budget"></i>
                                    </div>
                                    <h3 class="why-us-card-title">No Hidden Costs</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="affordable-pricing">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-affordable"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Affordable Pricing</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="moisture-free">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-moisture-wicking-fabric"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Moisture Free</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="insect-free">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-no-bugs"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Insects Free</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="quick-and-easy-installation">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-gear"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Quick Installation</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="easy-clean">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-clean"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Easy Clean</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="delivery-in-time">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-fast-delivery"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Delivery in Time</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="anti-scratch">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-log"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Anti-Scratch</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="sound-proof">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-mute-volume-control"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Sound Proof</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="life-lasting-stains">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-debt"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Life-Lasting Stains</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="lifetime-guarantee">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-guarantee"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Life Time Guarantee</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="pre-finished">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-flag"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Pre Finished Products</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="customer-support">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Customer Support</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3 offset-lg-0 offset-3">
                                <div class="why-us-card why-us-single-toggler" data-target="env-friendly">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-green-earth"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Environment Friendly</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-3">
                                <div class="why-us-card why-us-single-toggler" data-target="custom-designs">
                                    <div class="why-us-icon-container ">
                                        <a class="why-us-card-toggler" data-target="card-heading-one"> <i class="flaticon-equalizer"></i> </a>
                                    </div>
                                    <h3 class="why-us-card-title">Custom Designs</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="why-us-card-content">
                            <div class="why-us-card active" id="market-leaders">
                                <div class="why-us-icon-container"><i class="flaticon-team-leader"></i></div>
                                <h3 class="why-us-card-title">Market Leaders</h3>
                                <p class="why-us-card-description">40 years ago, till now we are thankfully enjoying a very good reputation, this didn't come out of thin air, hard-working, trained human resources & investing in new technologies are
                                    factors which made us the market leaders</p>
                            </div>
                            <div class="why-us-card" id="experience">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-experience"></i>
                                </div>
                                <h3 class="why-us-card-title">40 Years of Experience</h3>
                                <p class="why-us-card-description">Over more than 40 years of hard work, we had a great experience in designing, manufacturing & installation of various projects, in addition to the most important part, finishing.
                                    We achieve the best results including resolving any challenges smoothly without errors.</p>
                            </div>
                            <div class="why-us-card" id="trained-human-resources">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-construction-and-tools"></i>
                                </div>
                                <h3 class="why-us-card-title">Trained Human Resources</h3>
                                <p class="why-us-card-description">Over the years we built great teams for sales, customer care, production & installation. Building such well-trained and creative professionals doesn't happen in a couple of years,
                                    it took so much time and effort</p>
                            </div>
                            <div class="why-us-card" id="no-hidden-costs">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-budget"></i>
                                </div>
                                <h3 class="why-us-card-title">No Hidden Costs</h3>
                                <p class="why-us-card-description">Don't worry, we don't have any hidden fees, every single pound is agreed on from day one</p>
                            </div>
                            <div class="why-us-card" id="affordable-pricing">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-affordable"></i>
                                </div>
                                <h3 class="why-us-card-title">Affordable Pricing</h3>
                                <p class="why-us-card-description">High quality, reasonable prices are very hard to find anywhere else, contact us and book a visit to see how can we fit perfect work within your budget</p>
                            </div>
                            <div class="why-us-card" id="moisture-free">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-moisture-wicking-fabric"></i>
                                </div>
                                <h3 class="why-us-card-title">Moisture Free</h3>
                                <p class="why-us-card-description">All our wood is moisture-free, we don't depend on air drying as we have our own kiln dryers to ensure wood humidity level before manufacturing. As humidity is the most important
                                    factor affecting your final product, this is a critical process that we ensure is done successfully.</p>
                            </div>
                            <div class="why-us-card" id="insect-free">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-no-bugs"></i>
                                </div>
                                <h3 class="why-us-card-title">Insects Free</h3>
                                <p class="why-us-card-description">In the year 2008, we had a good deal with the Egyptian ministry of agriculture to send their specialized wood insect control team to our factory to ensure all wood are
                                    insect-free.</p>
                            </div>
                            <div class="why-us-card" id="quick-and-easy-installation">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-gear"></i>
                                </div>
                                <h3 class="why-us-card-title">Quick and Easy Installation</h3>
                                <p class="why-us-card-description">One of the most challenging jobs is renewing your wood floors while your family is existing in the home, now you can purchase engineered floors from the wood court which is ready
                                    to be installed on the same day, and walk on it instantly.</p>
                            </div>
                            <div class="why-us-card" id="easy-clean">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-clean"></i>
                                </div>
                                <h3 class="why-us-card-title">Easy Clean</h3>
                                <p class="why-us-card-description">Either your wood floor or your kitchen from the wood court is the easiest to clean, our fourth-generation finish materials are awesome, easy to be clean & clear from stains and
                                    dust, very hard to react with most home dirties.</p>
                            </div>
                            <div class="why-us-card" id="delivery-in-time">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-fast-delivery"></i>
                                </div>
                                <h3 class="why-us-card-title">Delivery in Time</h3>
                                <p class="why-us-card-description">We pay back 1% for every week after delivery time in case of not delivering in time, just in time delivery is not our goal, we seek to deliver your items before delivery time!.
                                </p>
                            </div>
                            <div class="why-us-card" id="anti-scratch">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-log"></i>
                                </div>
                                <h3 class="why-us-card-title">Anti-Scratch</h3>
                                <p class="why-us-card-description">Some of our finishes are scratch-resistant, such as UV-finish for wood floors & polyethylene finishes for kitchens. We also use HPI high-pressure laminate as anti scratch boards
                                    for kitchens & dressing rooms.</p>
                            </div>
                            <div class="why-us-card" id="sound-proof">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-mute-volume-control"></i>
                                </div>
                                <h3 class="why-us-card-title">Sound Proof</h3>
                                <p class="why-us-card-description">Hearing the drummy sound when walking on wood floors is very annoying, ask for glue-down floors or floating engineered floors to ensure soundless steps.</p>
                            </div>
                            <div class="why-us-card" id="life-lasting-stains">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-debt"></i>
                                </div>
                                <h3 class="why-us-card-title">Life-Lasting Stains</h3>
                                <p class="why-us-card-description">When you need to stain your natural wood floors or your kitchen to have a nice color matching your home decor, don't be afraid of stain disappearing from heavy traffic areas, our
                                    stains are all high quality and & life-lasting even with heavy use.</p>
                            </div>
                            <div class="why-us-card" id="lifetime-guarantee">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-guarantee"></i>
                                </div>
                                <h3 class="why-us-card-title">Life Time Guarantee</h3>
                                <p class="why-us-card-description">When purchasing from "The Wood Court" for any natural flooring, either floor or cabinets, you obtain a lifetime guarantee against manufacturing or installation faults or defects.
                                </p>
                            </div>
                            <div class="why-us-card" id="pre-finished">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-flag"></i>
                                </div>
                                <h3 class="why-us-card-title">Pre Finished Products</h3>
                                <p class="why-us-card-description">Some of our wood flooring products can be shipped pre-finished, no dust during installation, ready to walk on instantly after installation, all our cabinets (Kitchen or Dressing)
                                    is shipped finished and packed with care.</p>
                            </div>
                            <div class="why-us-card" id="customer-support">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-customer-service"></i>
                                </div>
                                <h3 class="why-us-card-title">Customer Support</h3>
                                <p class="why-us-card-description">Whatever, Whenever you purchase from The Wood Court our wide customer care team will always be here to support and solve problems.</p>
                            </div>
                            <div class="why-us-card" id="env-friendly">
                                <div class="why-us-icon-container">
                                    <i class="flaticon-green-earth"></i>
                                </div>
                                <h3 class="why-us-card-title">Environment Friendly</h3>
                                <p class="why-us-card-description">All our products are environment friendly, we don't use any harmful material, starting from fiberboards, glue, nails ending with chemical adhesive and finishing materials.</p>
                            </div>
                            <div class="why-us-card" id="custom-designs">
                                <div class="why-us-icon-container ">
                                    <a class="why-us-card-toggler" data-target="card-heading-one"> <i class="flaticon-equalizer"></i> </a>
                                </div>
                                <h3 class="why-us-card-title">Custom Designs</h3>
                                <p class="why-us-card-description ">We do any custom designs, in addition to our wide variety of pre-made designs. We also accept either editing existing designs or creating new ones.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="products-list" id="homepage-promotions">
        <img id="homepage-promotions-artistic-touch" src="{{url('public')}}/images/wood-small-quarter.png" alt="wood-small-quarter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-5">Limited Edition</h2>
                    <ul class="owl-carousel owl-theme three-items-carousel">
                        <li class="item">
                            <span class="item-flag limited">Limited</span>
                            <div class="limited-edition-bg" id="live-egd"></div>
                            <div class="content-container">
                                <h3>Live-edge</h3>
                                <p>The most luxurious desks make their own statements! Limited and absolutely unique.</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="LE-Desks" data-modal-title="Live-Edge">View More</a>
                                <div class="limited-images-list">
                                    <ul class="category-images-list">
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <span class="item-flag limited">Limited</span>
                            <div class="limited-edition-bg" id="lighting-accessories"></div>
                            <div class="content-container">
                                <h3>Lighting Accessories</h3>
                                <p>Light up your room or office with a modern and elegant touch made from genuine wood.</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="LE-Lights" data-modal-title="Lighting Accessories">View More</a>
                                <div class="limited-images-list">
                                    <ul class="category-images-list">
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <span class="item-flag sale">Customizable</span>
                            <div class="limited-edition-bg" id="business-cards"></div>
                            <div class="content-container">
                                <h3>Business Cards</h3>
                                <p>Unique laser-cut business cards are a powerful way to be remembered. Order yours now.</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="LE-Cards" data-modal-title="Business Cards">View More</a>
                                <div class="limited-images-list">
                                    <ul class="category-images-list">
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <span class="item-flag sale">Limited</span>
                            <div class="limited-edition-bg" id="satined-coasters"></div>
                            <div class="content-container">
                                <h3>Exotice Wood Coasters</h3>
                                <p>The touch and feel of genuine wood is irreplaceable. Accentuate your tables with nature.</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="LE-Coasters" data-modal-title="Exotice Wood Coasters">View More</a>
                                <div class="limited-images-list">
                                    <ul class="category-images-list">
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                                        <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                                  src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal fade" id="PlaceOrderModal" tabindex="-1" role="dialog" aria-labelledby="PlaceOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="PlaceOrderModalLabel">View More</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <form action="{{route('contactLimitedEdition')}}" method="post" id="place-order-modal-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Please enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email / Phone Number:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Please enter your phone number or email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message: (Optional)</label>
                                        <textarea class="form-control" name="message" placeholder="Enter any additional details here"></textarea>
                                    </div>
                                    <input type="hidden" name="item_name">
                                    <input type="hidden" name="form_location" value="Limited Edition">
                                    <input class="icon-button p-2" type="submit" value="Send Request">
                                </form>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div id="limited-edition-modal-images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-videos-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="video-background-homepage" id="video-one">
                        <img src="{{url('public')}}/images/video-bg-2.jpg" alt="Video Thumb">
                        <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-2"> <i class="fas fa-play-circle fa-5x"></i></a>
                    </div>
                    <h2>Kitchen, floor… and more</h2>
                    <p>The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwood and engineered wood to make
                        your life more comfortable.</p>
                    <a class="icon-button youtube-button d-lg-inline d-none" href="https://www.youtube.com/watch?v=Jf1MzF_yKw4" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video-background-homepage mb-3" id="video-one">
                        <img src="{{url('public')}}/images/kitchens-video.jpg" alt="Video Thumb">
                        <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-1"> <i class="fas fa-play-circle fa-5x"></i></a>
                    </div>
                    <h2>Luxurious cabinets & pergolas</h2>
                    <p>Could your kitchen use a makeover? Our creative design team is known for pushing the market in terms of design variety and innovation, constantly creating new designs. When creating a kitchen, we keep in mind the people
                        spending the most time in it</p>
                    <a class="icon-button youtube-button d-lg-inline d-none" href="https://www.youtube.com/watch?v=BNBKAmk72us" target="_blank"><i class="fab fa-youtube"></i> Watch on YouTube</a>
                </div>
            </div>
        </div>
    </section>
    <section class="our-achievements">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-heading">Our Achievements</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="1500" data-speed="3000"></span>+<br>
                                Premade<br>Designs
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="3000" data-speed="3000"></span>+<br>
                                Customers & Projects
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-chart-area"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="2000" data-speed="3000"></span>+<br>
                                Square Meter<br>Per Year
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="60" data-speed="3000"></span>+<br>
                                Trained Workers &<br>Engineers
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-description" id="homepage-aboutus-section">
        <img id="homepage-about-artistic-touch" src="{{url('public')}}/images/wood-big-half.png" alt="wood-big-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>We are <span><img height="50" src="{{url('public')}}/images/logo-black.png"></span></h2>
                    <p>Looking for a company to purchase your wood floors, kitchen, dressing room or pergolas?
                    </p>
                    <p class="mb-3">The Wood Court is servicing and supplying a vastly growing number of projects for business and private residences in Egypt since 1979. We provide quality work, and help you achieve the most effective improvement
                        you can make for your home or business with reasonable and affordable prices.
                    </p>
                    <a href="{{route('about')}}" class="icon-button d-lg-inline d-block text-center mx-auto"><i class="fas fa-star"></i>About us</a>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="the alt here">
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-section" id="about-us-testimonials">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2>What People are Saying</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/1656190_10202827701874809_2086136297_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGaCL7bffawea6qicjZt7bPssM1MhgU1CCywzUyGBTUIJms3asgl_fod2bIGJEAVM1vp-KfeFhUzCl-RovzRNh_&_nc_ohc=2hkg4DRfdsEAX8MgvtO&_nc_ht=scontent.fcai19-2.fna&oh=b1aa60e2ff2958cd3346c9dc4a2cd9fd&oe=5FF3E24F"
                                  alt="Nermeen Farouk Gamea">
                                <h4>Nermeen Farouk Gamea</h4>
                                <p><b>This a company you can trust</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    From quality of product, punctuality in timing an excellent service and most of all the care for thier customers. Very good value for money and professional advices that can help you in making good decisions for
                                    your home within your budget
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/nermeen.gamea/posts/10217173194183151" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-1/p200x200/44939937_10156744823066197_8268768276318781440_o.jpg?_nc_cat=101&ccb=2&_nc_sid=7206a8&_nc_eui2=AeFtfuZpQwFnPzuGj_LHm0pf1ImCAuL3REvUiYIC4vdES6Pv3aquD0D41qzie7n2zH2yvNQbJ12PucabW8riJMdw&_nc_ohc=9uwcM0_GvrYAX8fDc_Z&_nc_ht=scontent.fcai19-2.fna&tp=6&oh=25eca657db9c59bc1e1d326de0e71544&oe=6000636F"
                                  alt="Mostafa Morsy">
                                <h4 class="user-name">Mostafa Morsy</h4>
                                <p><b>Excellent</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    excellent excution for the staircase, was amazed by their fast preformance and work ethics. personally recommend them to everyone.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mostafa.morsy.777/posts/10156559288731197" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/118886354_10164437672405012_8425323246923185985_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEd_NjeInee9KCPzguoMCFRbG2gr-QiG35sbaCv5CIbfmS4YpuwFevi0YcU6ZHUTJaa4LJk_XN603Id5DIFE2e4&_nc_ohc=kTTfGfx9pNwAX-82tsW&_nc_ht=scontent.fcai19-2.fna&oh=b08cd2f742cefdb96ce3bf4912b0f7f2&oe=5FF43AF7"
                                  alt="Nour El Hoda Moghazy">
                                <h4 class="user-name">Nour El Hoda Moghazy</h4>
                                <p><b>Thank You!</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    We would like to thank Wood court for their professionalism, accountability and high quality outcome. We are glad that we had the opportunity to deal with them in implementing our wonderful staircase. Thanx a lot
                                    🙂
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/nour.e.moghazy/posts/10160800194125012" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/42769399_10160789597560705_1908439254501949440_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHt_60BwNqQ0Feu6OhghsHq6Ufo_PUIbxLpR-j89QhvEuBzFH2dZ8d0cnBIBtdqhfEvEkKgAtotgf4kXe7sZxLo&_nc_ohc=8GNmZF9lfgEAX9WF1li&_nc_ht=scontent.fcai19-2.fna&oh=2f844594a54776a67bad430a3b149c64&oe=5FFF5BF2"
                                  alt="Mahmoud Yassin">
                                <h4 class="user-name">Mahmoud Yassin</h4>
                                <p><b>Highly recommended</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Great work and craftsmanship, high quality, excellent installation and customer service. The whole process was smooth and professional. I would like to thank Eng. Ayman and the whole team for the lovely
                                    experience.Great work. Highly recommended.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mahmoud.yassin.355/posts/10164069054960705" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=uOHOXViAAnMAX_EwJ9x&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=4432765fab302244fb12e2fab7ed3d84&oe=60163F6E"
                                  alt="Ahamd Elsaeed">
                                <h4>Ahmed Elsaeed</h4>
                                <p><b>Understanding for customer requirements</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    The Wood Court is a trusted and professional company Understanding for customer requirements It was great to meet and know most of the Team who work their Special thanks to Ayman and Ahmed Zahran for being so keen
                                    to deliver the best quality to ensure customer satisfaction
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ahmed.elsaeed.1293/posts/10156688368036508" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/12278773_890299487691675_91894851637444196_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeH3Ni5rcYx80WbjUHEaiCBu_I6zWf9-cET8jrNZ_35wRJ9C0v7eDgvUlI25Igz9PawxyU1rlxarmt4TH1zIbpd7&_nc_ohc=BXrU_ylJy4EAX84eV8k&_nc_ht=scontent.fcai19-2.fna&oh=b7a548bcffe949c9f3bc1b94cfe33a74&oe=5FFE09E1"
                                  alt="Mohamed Mahdy">
                                <h4 class="user-name">Mohamed Mahdy</h4>
                                <p><b>One of best companies that you can deal with</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    The wood court is one of best companies that you can deal with. Quality, accountability and dedication for their customers. If you wanna buy wooden floor, then you should visit the wood court. They're doing great
                                    job.... and special thanks to Eng. Ayman..
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.mahdy.543/posts/1742895592432056" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/121068749_2758247604451140_7307803230761064677_n.jpg?_nc_cat=102&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEq1Jj3d9zaY9UtCvy_0yj6VS3XQqB_75FVLddCoH_vkSFF_w28Jz5-RJHJhLZ3hqAks-3F8VK1gysUCpO6RV_0&_nc_ohc=HBaC26iOWbwAX_n_dGl&_nc_ht=scontent.fcai19-2.fna&oh=1b8f653145d64e99b2cc9f3a427a0980&oe=5FFF18BB"
                                alt="Jana Zahran">
                              <h4 class="user-name">Jana Zahran</h4>
                                <p><b>Really good prices and many many many designs</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Really good prices and many many many designs, I did not find such beautiful designs any where else
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/jana.zahran.16/posts/2221871918088714" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/22852120_10155164399803865_3547450112766542621_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFyXzJvhEWlOrRZmtHpE7dlqBcm-S5JKXeoFyb5LkkpdwHQa9aYXuT_N8r3_Db4tmv56N-hEDGNWjp5UZWAkto0&_nc_ohc=4Cp0NKLKKLkAX-SiBzA&_nc_ht=scontent.fcai19-2.fna&oh=5f24c4b016d24fc759de2ee4e6fec692&oe=5FFF778C"
                                alt="Mohamed Sheesh">
                              <h4 class="user-name">Mohamed Sheesh</h4>
                                <p><b>Dealing with The Wood Court has been the only bright</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Dealing with The wood court has been the only bright, fair and hassle free part of decorating my apartment. Eng Ayman has been honest straightforward and he delivered what he promised. I strongly recommend his
                                    technical expertise and high quality products to everyone.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/MoeSheesh/posts/10157866238008865" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/13754219_281356118890899_2735041485464602213_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGGCxwT4SZFkNtYNE-TcmbcbrWk3zcldOZutaTfNyV05lpP4eFBoubYKjTgbMn94JZrHevU23guulzEqGYPyv0A&_nc_ohc=WwX-V9Zmh4oAX9VCRNP&_nc_ht=scontent.fcai19-2.fna&oh=dd6292455073efe8780b83a891ca1d68&oe=600001D9"
                                alt="Aly El Badrawy">
                              <h4 class="user-name">Aly El Badrawy</h4>
                                <p><b>Strongly recommended</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Delivery at agreed upon time, excellent quality, very good after sale service..Strongly recommended
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/permalink.php?story_fbid=716832455343261&id=100010495395854" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent-hbe1-1.xx.fbcdn.net/v/t1.0-1/p200x200/84082222_10212267300236772_3039547938767372288_o.jpg?_nc_cat=108&ccb=2&_nc_sid=7206a8&_nc_eui2=AeEiCBzfxE0onuFiJQbFntIskmeIEhGbh3aSZ4gSEZuHdkln2iU9Z9sf1W5PDq8_gsaTh8AobWijQ-4mhfd-BrI4&_nc_ohc=woKtuP4FPUAAX82vqwy&_nc_ht=scontent-hbe1-1.xx&tp=6&oh=a63d459d4b4774a1166298331a16f53d&oe=600BB932"
                                alt="Amira Khidr">
                              <h4 class="user-name">Amira Khidr</h4>
                                <p><b>اضافة حقيقة و جميلة للديكور في مصر</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    البوست ده تحية لفنان حقيقي و أنا شايفة انه فضل يطور بشغله بمنتهى التفاني لحد ما وصل مستوى الأرضيات الباركيه الخشب الطبيعي لمستوى مكنش من كم سنة نحلم نشوفه بمصر من ناحية الجودة و التصميمات اللي دايماً جديدة و مبهرة و
                                    المعاملة المحترمة مع العملاء سواء بالسعر أو المواعيد
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image" src="{{url('public/images')}}/user.png" alt="Noha Nagied">
                              <h4 class="user-name">Noha Nagied</h4>
                                <p><b>شغل جميل</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    من الشغل الجميل اللي شفتو في معرض La Casa 4/2018
                                    شغل WoodCourt و اللي عامل تصميم لباركيه طبيعي Patchwork ألوان و مونو <br>
                                    الشغل تحفة جداً التصميمات جميلة الألوان راقية و شيك و التايل على بعضه اضافة مميزة و عامل فرق خاصة ان الباركيه من الخامات الكلاسيكية اللي من قيمتها و أصالتها و التغيير فيها و الاضافة اليها مش سهل <br>
                                    شابو على الأفكار بره الصندوق <br>
                                    keep up the good work!
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                              <img class="user-image" src="{{url('public/images')}}/user.png" alt="Rania Salem">
                              <h4 class="user-name">Rania Salem</h4>
                                <p><b>السلم ده قصة تانية خالص</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    مهما تكلمت و شكرت في The Wood Court الكلام هيكون غير منصف ... مواعيد محترمة و التزام و دقة في الشغل ... و أسعار مناسبة جداً م/أيمن زهران عملي فيلا في الشيخ زايد ... ريسبشن و غرف وسلم و خشب تيك للتراث ... و السلم ده
                                    قصة تانية خالص بجد حاجة تجنن ... أنا مشس هحكي كتير الصور بتتكلم <br>
                                    فعلاً شكراً وود كورت و شكراً أيمن زهران على الشغل المحترم
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-rating">
            <h3>Rated 4.8/5 Stars According to 125 Customers</h3>
            <a class="reviews-button" href="https://www.facebook.com/thewoodcourt/reviews/" target="_blank"><i class="fab fa-facebook"></i> View All Reviews</a>
        </div>
    </section>
    <section class="logo-parade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>Our Clients</h2>
                    <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/dip-n-dip.jpeg" alt="Dip & Dip"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/holiday-inn.png" alt="Holiday Inn"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/nbe.png" alt="National Bank of Egypt"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/iwan.png" alt="IWAN"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/arabcont.png" alt="arabcont"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cook-club.png" alt="Cooks Club"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/amer.png" alt="Amer Group"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/four-seasons.png" alt="Four Seasons"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/hassan-allam.png" alt="Hassan Allam"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/hilton.png" alt="Hilton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/sura.jpg" alt="Sura"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/rixos.png" alt="Rixos"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/mazloum.png" alt="Mazloum"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/mobica.png" alt="Mobica"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/siac.png" alt="Siac"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cib.png" alt="CIB"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/sheraton.png" alt="Sheraton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/arena.png" alt="Arena"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/presendcy.jpg" alt="EG Presidency"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cabient.png" alt="EG Cabinet"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/leagueofarabstates.png" alt="League of Arab States"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cairo_governorate.png" alt="Cairo Governorate"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/parlement.jpg" alt="EG Parliament"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/emmar.png" alt="EMMAR"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/elab.jpg" alt="ELAB"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/khamayl.png" alt="Khamayl"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/shorta.png" alt="Nadi al Shorta"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cairo-airport.png" alt="Nadi al Shorta"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/beni_suef_governorate.png" alt="benisuef"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/coop.jpg" alt="benisuef"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/suez.jpg" alt="suez"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/profit-chouex.png" alt="Profit Chouex"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
