@include('layout.header', ['PageTitle' => 'Kitchen, Floor ... and More'])

<body>
    @include('layout.navbar')
    <section class="one hero-section" id="homepage-hero-section">
        <div class="owl-carousel full-width-carousel">
            <div>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="section1 col-lg-6 col-6">
                              <img class="logo-img  " src="{{url('public')}}/images/logo-black.png" >
                                <h2>Kitchens</h2>
                              <!--  <p class="mb-5">Kitchen, Floor ... and More</p> -->
                                <p class="p-title" style="color:#0D8287">Products</p>
                                <p class="description mb-5">All-natural wood flooring & Fiberboard (HDF) you will need in</br> one place. Classic, Modern, Country, Vintage, Contemporary and</br> much more even custom designs</p>


                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="#" class="another-botton ">Our Products</a>
                                <div class="end-img w-50">
                                  <img src="{{url('public')}}/images/wood-small-quarter.png">
                                </div>
                            </div>

                            <div id="slide-one" class="col-lg-6 col-12">
                                <div class="overlay ">
                                    </div>
                            </div>


                        </div>
                    </div>
            </div>
            <div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="section1 col-lg-6 col-6">
                                <img class="logo-img" src="{{url('public')}}/images/logo-black.png" alt="">
                                <h2>Engineered Floors</h2>

                                <p class="p-title"  style="color:#0D8287">Products</p>
                                <p class="description mb-5">All-natural wood flooring & Fiberboard (HDF) you will need in</br> one place. Classic, Modern, Country, Vintage, Contemporary and</br> much more even custom designs</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="#" class="another-botton ">Our Products</a>
                                <div class="end-img w-50">
                                  <img src="{{url('public')}}/images/wood-small-quarter.png">
                                </div>
                            </div>
                            <div id="slide-two" class="col-lg-6 col-12">
                              <div class="overlay ">
                                  </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="section1 col-lg-6 col-6">
                                <img class="logo-img" src="{{url('public')}}/images/logo-black.png" alt="">
                                <h2>Stairs</h2>

                                <p class="p-title"  style="color:#0D8287">Products</p>
                                <p class="description mb-5">All-natural wood flooring & Fiberboard (HDF) you will need in</br> one place. Classic, Modern, Country, Vintage, Contemporary and</br> much more even custom designs</p>

                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                  <a href="#" class="another-botton ">Our Products</a>
                                <div class="end-img w-50">
                                  <img src="{{url('public')}}/images/wood-small-quarter.png">
                                </div>
                            </div>
                            <div id="slide-three" class="col-lg-6 col-12">
                              <div class="overlay ">
                                  </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="section1 col-lg-6 col-6">
                                <img class="logo-img" src="{{url('public')}}/images/logo-black.png" alt="">
                                <h2>Outdoor</h2>


                                <p class="p-title"  style="color:#0D8287">Products</p>
                                <p class="description mb-5">All-natural wood flooring & Fiberboard (HDF) you will need in</br> one place. Classic, Modern, Country, Vintage, Contemporary and</br> much more even custom designs</p>

                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="#" class="another-botton ">Our Products</a>
                                <div class="end-img w-50">
                                  <img src="{{url('public')}}/images/wood-small-quarter.png">
                                </div>
                            </div>
                            <div id="slide-four" class="col-lg-6 col-12">
                              <div class="overlay ">
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
                    <h2 class="section-title">Our Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <img src="{{url('public/')}}/images/categories/wood-flooring.jpg" alt="wood-flooring">
                        <div class="p-3">
                            <h3>Wood Flooring</h3>
                            <p>All-natural wood flooring & Fiberboard (HDF) you will need in one place. Classic, Modern, Country, Vintage, Contemporary and much more even custom designs</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#wood-flooring-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <img src="{{url('public/')}}/images/categories/cabinets.jpg" alt="Cabinets">
                        <div class="p-3">
                            <h3>Cabinets</h3>
                            <p>Not just a wide variety of materials (natural & artificial) but also we help you to design your kitchen and dressing room with the most storage areas and easy-access. Designed by highly-reputed interior designers</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#cabinets-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card h-100">
                        <img src="{{url('public/')}}/images/categories/outdoor.jpg" alt="Outdoor">
                        <div class="p-3">
                            <h3>Outdoor</h3>
                            <p>Nowadays, after quarantine we all realaized the importance of our private ourdoors, Gte the best out of your farden or backyard. See our Pergolas & Outdoor flooring new designs</p>
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
                            <p class="category-description">All-natural wood flooring & Fiberboard (HDF) you will need in one place. Classic, Modern, Country, Vintage, Contemporary and much more even custom designs</p>
                            <ul class="sub-categories-list">
                                <li data-target="engineered-floors" class="active">Engineered Floors</li>
                                <li data-target="tiles">Tiles</li>
                                <li data-target="stairs">Stairs</li>
                                <li data-target="hdf-floors">HDF Floors</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list" id="hdf-floors">
                                <li>
                                    <p>Coming Soon ...</p>
                                </li>
                            </ul>
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
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/6.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/6.jpg" alt="engineered-floors-6" title="engineered-floors-6"></a></li>
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
                            <p class="category-description">Not just a wide variety of materials (natural & artificial) but also we help you to design your kitchen and dressing room with the most storage areas and easy-access. Designed by
                                highly-reputed interior designers</p>
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
                            <p class="category-description">Nowadays, after quarantine we all realaized the importance of our private ourdoors, Gte the best out of your farden or backyard. See our Pergolas & Outdoor flooring new designs</p>
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
                    <div class="col-12">
                        <h2>Why Us?</h2>
                        <div class="row why-us-cards">
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-team-leader"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Market Leaders</h3>
                                    <p class="why-us-card-short-description">40 years ago, till now we are thankfully enjoying a very good reputation, this didn't come out of thin...</p>
                                    <p class="why-us-card-description">40 years ago, till now we are thankfully enjoying a very good reputation, this didn't come out of thin air, hard-working, trained human resources & investing in new technologies
                                        are factors which made us the market leaders</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-experience"></i>
                                    </div>
                                    <h3 class="why-us-card-title">40 Years of Experience</h3>
                                    <p class="why-us-card-short-description">Over more than 40 years of hard work, We had a great experience in designing, manufactur....</p>
                                    <p class="why-us-card-description">Over more than 40 years of hard work, we had a great experience in designing, manufacturing & installation of various projects, in addition to the most important part, finishing.
                                        We achieve the best results including resolving any challenges smoothly without errors.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-construction-and-tools"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Trained Human Resources</h3>
                                    <p class="why-us-card-short-description">Over the years we built great teams for sales, customer care, production & installation, buildi...</p>
                                    <p class="why-us-card-description">Over the years we built great teams for sales, customer care, production & installation. Building such well-trained and creative professionals doesn't happen in a couple of years,
                                        it took so much time and effort</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-budget"></i>
                                    </div>
                                    <h3 class="why-us-card-title">No Hidden Costs</h3>
                                    <p class="why-us-card-short-description">Don't worry, we don't have any hidden fees, every single pound is agreed on from day one.</p>
                                    <p class="why-us-card-description">Don't worry, we don't have any hidden fees, every single pound is agreed on from day one</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-affordable"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Affordable Pricing</h3>
                                    <p class="why-us-card-short-description">High quality, reasonable prices are very hard to find anywhere else, contact us and book a visit to...</p>
                                    <p class="why-us-card-description">High quality, reasonable prices are very hard to find anywhere else, contact us and book a visit to see how can we fit perfect work within your budget</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-moisture-wicking-fabric"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Moisture Free</h3>
                                    <p class="why-us-card-short-description">All our wood is moisture-free, we don't depend on air drying as we have our own kiln dryers to ensure...</p>
                                    <p class="why-us-card-description">All our wood is moisture-free, we don't depend on air drying as we have our own kiln dryers to ensure wood humidity level before manufacturing. As humidity is the most important
                                        factor affecting your final product, this is a critical process that we ensure is done successfully.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-no-bugs"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Insects Free</h3>
                                    <p class="why-us-card-short-description">In the year 2008, we had a good deal with the Egyptian ministry of agriculture to send their specialized wood insect...</p>
                                    <p class="why-us-card-description">In the year 2008, we had a good deal with the Egyptian ministry of agriculture to send their specialized wood insect control team to our factory to ensure all wood are
                                        insect-free.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-gear"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Quick and Easy Installation</h3>
                                    <p class="why-us-card-short-description">One of the most challenging jobs is renewing your wood floors whi...</p>
                                    <p class="why-us-card-description">One of the most challenging jobs is renewing your wood floors while your family is existing in the home, now you can purchase engineered floors from the wood court which is ready
                                        to be installed on the same day, and walk on it instantly.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-clean"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Easy Clean</h3>
                                    <p class="why-us-card-short-description">Either your wood floor or your kitchen from the wood court is the easiest to clean, our fourth-generation...</p>
                                    <p class="why-us-card-description">Either your wood floor or your kitchen from the wood court is the easiest to clean, our fourth-generation finish materials are awesome, easy to be clean & clear from stains and
                                        dust, very hard to react with most home dirties.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-fast-delivery"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Delivery in Time</h3>
                                    <p class="why-us-card-short-description">We pay back 1% for every week after delivery time in case of not delivering in time, just in time delivery...</p>
                                    <p class="why-us-card-description">We pay back 1% for every week after delivery time in case of not delivering in time, just in time delivery is not our goal, we seek to deliver your items before delivery time!.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-log"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Anti-Scratch</h3>
                                    <p class="why-us-card-short-description">Some of our finishes are scratch-resistant, such as UV-finish for wood floors & polyethylene finishes for kitchens ..</p>
                                    <p class="why-us-card-description">Some of our finishes are scratch-resistant, such as UV-finish for wood floors & polyethylene finishes for kitchens. We also use HPI high-pressure laminate as anti scratch boards
                                        for kitchens & dressing rooms.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-mute-volume-control"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Sound Proof</h3>
                                    <p class="why-us-card-short-description">Hearing the drummy sound when walking on wood floors is very annoying, ask for glue-down...</p>
                                    <p class="why-us-card-description">Hearing the drummy sound when walking on wood floors is very annoying, ask for glue-down floors or floating engineered floors to ensure soundless steps.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-debt"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Life-Lasting Stains</h3>
                                    <p class="why-us-card-short-description">When you need to stain your natural wood floors or your kitchen to have a nice color matching your home decor...</p>
                                    <p class="why-us-card-description">When you need to stain your natural wood floors or your kitchen to have a nice color matching your home decor, don't be afraid of stain disappearing from heavy traffic areas, our
                                        stains are all high quality and & life-lasting even with heavy use.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-guarantee"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Life Time Guarantee</h3>
                                    <p class="why-us-card-short-description">When purchasing from "The Wood Court" for any natural flooring, either floor or cabinets, you...</p>
                                    <p class="why-us-card-description">When purchasing from "The Wood Court" for any natural flooring, either floor or cabinets, you obtain a lifetime guarantee against manufacturing or installation faults or defects.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-flag"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Pre Finished Products</h3>
                                    <p class="why-us-card-short-description">Some of our wood flooring products can be shipped pre-finished, no dust during installation, ready to walk on instantly...</p>
                                    <p class="why-us-card-description">Some of our wood flooring products can be shipped pre-finished, no dust during installation, ready to walk on instantly after installation, all our cabinets (Kitchen or Dressing)
                                        is shipped finished and packed with care.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Customer Support</h3>
                                    <p class="why-us-card-short-description">Whatever, Whenever you purchase from The Wood Court our wide customer care team will always be here to ...</p>
                                    <p class="why-us-card-description">Whatever, Whenever you purchase from The Wood Court our wide customer care team will always be here to support and solve problems.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-green-earth"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Environment Friendly</h3>
                                    <p class="why-us-card-short-description">All our products are environment friendly, we don't use any harmful material, starting...</p>
                                    <p class="why-us-card-description">All our products are environment friendly, we don't use any harmful material, starting from fiberboards, glue, nails ending with chemical adhesive and finishing materials.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="why-us-card">
                                    <div class="why-us-icon-container">
                                        <i class="flaticon-equalizer"></i>
                                    </div>
                                    <h3 class="why-us-card-title">Custom Designs</h3>
                                    <p class="why-us-card-short-description">We do any custom designs, in addition to our wide variety of pre-made designs, we also accept...</p>
                                    <p class="why-us-card-description">We do any custom designs, in addition to our wide variety of pre-made designs. We also accept either editing existing designs or creating new ones.</p>
                                </div>
                            </div>
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
                            <img src="{{url('public/')}}/images/collections/1.jpg" alt="Collections">
                            <div class="content-container">
                                <h3>Item Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="@getbootstrap">Place Your Order</a>
                            </div>
                        </li>
                        <li class="item">
                            <span class="item-flag new">New</span>
                            <img src="{{url('public/')}}/images/collections/1.jpg" alt="Collections">
                            <div class="content-container">
                                <h3>Item Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="@getbootstrap">Place Your Order</a>
                            </div>
                        </li>
                        <li class="item">
                            <span class="item-flag sale">20% Off</span>
                            <img src="{{url('public/')}}/images/collections/1.jpg" alt="Collections">
                            <div class="content-container">
                                <h3>Item Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="place-order-button" href="javascript:;" data-toggle="modal" data-target="#PlaceOrderModal" data-name="Item Title">Place Your Order</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal fade" id="PlaceOrderModal" tabindex="-1" role="dialog" aria-labelledby="PlaceOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="PlaceOrderModalLabel">Place Your Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                            <input class="icon-button" type="submit" value="Send Request">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-videos-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="video-background-homepage" id="video-one">
                        <img src="https://placehold.it/300x250" alt="Video Thumb">
                        <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-1"> <i class="fas fa-play-circle fa-5x"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <h2>Video Title Here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="icon-button youtube-button" href="#"><i class="fab fa-youtube"></i> Watch on Yout Tube</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <h2>Video Title Here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="icon-button youtube-button" href="#"><i class="fab fa-youtube"></i> Watch on Yout Tube</a>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="video-background-homepage" id="video-one">
                        <img src="https://placehold.it/300x250" alt="Video Thumb">
                        <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-2"> <i class="fas fa-play-circle fa-5x"></i></a>
                    </div>
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
                    <div class="col-6 col-lg-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="1500" data-speed="1000" data-refresh-interval="50"></span>+<br>
                                Premade<br>Designs
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="3000" data-speed="1000" data-refresh-interval="50"></span>+<br>
                                Customers & Projects
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-chart-area"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="2000" data-speed="1000" data-refresh-interval="50"></span>+<br>
                                Square Meter<br>Per Year
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="60" data-speed="1000" data-refresh-interval="50"></span>+<br>
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
                    <a href="{{route('about')}}" class="icon-button"><i class="fas fa-star"></i>About us</a>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="the alt here">
                </div>
            </div>

        </div>
    </section>
    <section class="testimonials-section" id="about-us-testimonials">
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
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/1656190_10202827701874809_2086136297_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGaCL7bffawea6qicjZt7bPssM1MhgU1CCywzUyGBTUIJms3asgl_fod2bIGJEAVM1vp-KfeFhUzCl-RovzRNh_&_nc_ohc=2hkg4DRfdsEAX8MgvtO&_nc_ht=scontent.fcai19-2.fna&oh=b1aa60e2ff2958cd3346c9dc4a2cd9fd&oe=5FF3E24F"
                              alt="Nermeen Farouk Gamea">
                            <h4 class="user-name">Nermeen Farouk Gamea</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>This a company you can trust</h3>
                                <p>From quality of product, punctuality in timing an excellent service and most of all the care for thier customers. Very good value for money and professional advices that can help you in making good decisions for
                                    your home within your budget</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=griOnXIMKHIAX_aSmd7&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=46adb4f80f13147af56ac65356dd21dd&oe=5FE6C96E"
                              alt="Ahamd Elsayeed">
                            <h4 class="user-name">Ahmed Elsayeed</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>Understanding for customer requirements</h3>
                                <p>The Wood Court is a trusted and professional company
                                    Understanding for customer requirements
                                    It was great to meet and know most of the Team who work their
                                    Special thanks to Ayman and Ahmed Zahran for being so keen to deliver the best quality to ensure customer satisfaction</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/118886354_10164437672405012_8425323246923185985_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEd_NjeInee9KCPzguoMCFRbG2gr-QiG35sbaCv5CIbfmS4YpuwFevi0YcU6ZHUTJaa4LJk_XN603Id5DIFE2e4&_nc_ohc=kTTfGfx9pNwAX-82tsW&_nc_ht=scontent.fcai19-2.fna&oh=b08cd2f742cefdb96ce3bf4912b0f7f2&oe=5FF43AF7"
                              alt="Nour El Hoda Moghazy">
                            <h4 class="user-name">Nour El Hoda Moghazy</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>Thank You!</h3>
                                <p>We would like to thank Wood court for their professionalism, accountability and high quality outcome. We are glad that we had the opportunity to deal with them in implementing our wonderful staircase. Thanx a lot 🙂
                                </p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
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
                        <img class="item" src="{{url('public')}}/images/partners/arabcont.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/cook-club.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/four-seasons.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/hassan-allam.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/hilton.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/mobica.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/orascom.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/sheraton.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/siac.png" alt="" title="" />
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
