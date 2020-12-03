@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="homepage-hero-section">
        <div class="owl-carousel full-width-carousel">
            <div id="slide-one">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="text-center col-12">
                                <h2>Kitchens</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-two">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="text-center col-12">
                                <h2>Tiles</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-three">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="text-center col-12">
                                <h2>Stairs</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slide-four">
                <div class="dark-overlap">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="text-center col-12">
                                <h2>Outdoor</h2>
                                <p class="mb-5">The Leaders in wood industry</p>
                                <a class="icon-button mr-lg-5 mr-0" href="{{route('about')}}"> <i class="fas fa-star"></i> About us</a>
                                <a href="{{route('products')}}" class="text-white">Our Products</a>
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
                        <img src="{{url('public/')}}/images/categories/cabinets.jpg" alt="Cabinets">
                        <div class="p-3">
                            <h3>Cabinets</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#cabinets-modal">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <img src="{{url('public/')}}/images/categories/outdoor.jpg" alt="Outdoor">
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
                                <li data-target="engineered-floors" class="active">Engineered Floors</li>
                                <li data-target="tiles">Tiles</li>
                                <li data-target="stairs">Stairs</li>
                                <li data-target="hdf-floors">HDF Floors</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-12">
                            <ul class="category-images-list" id="hdf-floors">
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                                <li><img src="https://placehold.it/150x150" alt=""></li>
                            </ul>
                            <ul class="category-images-list active" id="engineered-floors">
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-2" title="engineered-floors-2"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-3" title="engineered-floors-3"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-4" title="engineered-floors-4"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-5" title="engineered-floors-5"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/6.jpg" alt="engineered-floors-6" title="engineered-floors-6"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-7" title="engineered-floors-7"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-8" title="engineered-floors-8"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-9" title="engineered-floors-9"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-10" title="engineered-floors-10"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-11" title="engineered-floors-11"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-12" title="engineered-floors-12"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-13" title="engineered-floors-13"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/14.jpg" alt="engineered-floors-14" title="engineered-floors-14"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/15.jpg" alt="engineered-floors-15" title="engineered-floors-15"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/16.jpg" alt="engineered-floors-16" title="engineered-floors-16"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/17.jpg" alt="engineered-floors-17" title="engineered-floors-17"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/18.jpg" alt="engineered-floors-18" title="engineered-floors-18"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/19.jpg" alt="engineered-floors-19" title="engineered-floors-19"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/20.jpg" alt="engineered-floors-20" title="engineered-floors-20"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/21.jpg" alt="engineered-floors-21" title="engineered-floors-21"></a></li>
                              <li><a data-fancybox="eng-floors" data-caption="Enf floors" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/22.jpg" alt="engineered-floors-22" title="engineered-floors-22"></a></li>
                            </ul>
                            <ul class="category-images-list" id="tiles">
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/1.jpg" alt="tiles-1" title="tiles-1"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/2.jpg" alt="tiles-2" title="tiles-2"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/3.jpg" alt="tiles-3" title="tiles-3"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/4.jpg" alt="tiles-4" title="tiles-4"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/5.jpg" alt="tiles-5" title="tiles-5"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/6.jpg" alt="tiles-6" title="tiles-6"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/7.jpg" alt="tiles-7" title="tiles-7"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/8.jpg" alt="tiles-8" title="tiles-8"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/9.jpg" alt="tiles-9" title="tiles-9"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/10.jpg" alt="tiles-10" title="tiles-10"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/11.jpg" alt="tiles-11" title="tiles-11"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/12.jpg" alt="tiles-12" title="tiles-12"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/13.jpg" alt="tiles-13" title="tiles-13"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/14.jpg" alt="tiles-14" title="tiles-14"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/15.jpg" alt="tiles-15" title="tiles-15"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/16.jpg" alt="tiles-16" title="tiles-16"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/17.jpg" alt="tiles-17" title="tiles-17"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/18.jpg" alt="tiles-18" title="tiles-18"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/19.jpg" alt="tiles-19" title="tiles-19"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/20.jpg" alt="tiles-20" title="tiles-20"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/21.jpg" alt="tiles-21" title="tiles-21"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/22.jpg" alt="tiles-22" title="tiles-22"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/23.jpg" alt="tiles-23" title="tiles-23"></a></li>
                              <li><a data-fancybox="tiles" data-caption="Tiles Caption Here" href="{{url('public')}}/images/categories/wood-flooring/tiles/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/24.jpg" alt="tiles-24" title="tiles-24"></a></li>
                            </ul>
                            <ul class="category-images-list" id="stairs">
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/1.jpg" alt="stairs-1" title="stairs-1"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/2.jpg" alt="stairs-2" title="stairs-2"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/3.jpg" alt="stairs-3" title="stairs-3"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/4.jpg" alt="stairs-4" title="stairs-4"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/5.jpg" alt="stairs-5" title="stairs-5"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/6.jpg" alt="stairs-6" title="stairs-6"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/7.jpg" alt="stairs-7" title="stairs-7"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/8.jpg" alt="stairs-8" title="stairs-8"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/9.jpg" alt="stairs-9" title="stairs-9"></a></li>
                              <li><a data-fancybox="stairs" data-caption="Stairs Caption" href="{{url('public')}}/images/categories/wood-flooring/stairs/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/stairs/10.jpg" alt="stairs-10" title="stairs-10"></a></li>
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
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/1.png" alt="kitchens-1" title="kitchens-1"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/2.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/2.png" alt="kitchens-2" title="kitchens-2"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/3.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/3.png" alt="kitchens-3" title="kitchens-3"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/4.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/4.png" alt="kitchens-4" title="kitchens-4"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/5.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/5.png" alt="kitchens-5" title="kitchens-5"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/6.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/6.png" alt="kitchens-6" title="kitchens-6"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/7.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/7.png" alt="kitchens-7" title="kitchens-7"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/8.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/8.png" alt="kitchens-8" title="kitchens-8"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/9.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/9.png" alt="kitchens-9" title="kitchens-9"></a></li>
                              <li><a data-fancybox="kitchens" data-caption="Kitchens Caption here" href="{{url('public')}}/images/categories/cabinets/kitchens/10.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/10.png" alt="kitchens-10" title="kitchens-10"></a></li>
                            </ul>
                            <ul class="category-images-list" id="dressings">
                              <li><a data-fancybox="dressings" data-caption="Cabinets Caption" href="{{url('public')}}/images/categories/cabinets/dressings/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/1.png" alt="dressings-1" title="dressings-1"></a></li>
                            </ul>
                            <ul class="category-images-list" id="bathroom-cabinets">
                              <li><a data-fancybox="bathroom" data-caption="Bathroom caption here" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/1.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/1.png" alt="bathroom-cabinets-1" title="bathroom-cabinets-1"></a></li>
                              <li><a data-fancybox="bathroom" data-caption="Bathroom caption here" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/2.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/2.png" alt="bathroom-cabinets-2" title="bathroom-cabinets-2"></a></li>
                              <li><a data-fancybox="bathroom" data-caption="Bathroom caption here" href="{{url('public')}}/images/categories/cabinets\bathroom-cabinets/3.png" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets\bathroom-cabinets/3.png" alt="bathroom-cabinets-3" title="bathroom-cabinets-3"></a></li>
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
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/1.jpg" alt="teak-flooring-1" title="teak-flooring-1"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/2.jpg" alt="teak-flooring-2" title="teak-flooring-2"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/3.jpg" alt="teak-flooring-3" title="teak-flooring-3"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/4.jpg" alt="teak-flooring-4" title="teak-flooring-4"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/5.jpg" alt="teak-flooring-5" title="teak-flooring-5"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/6.jpg" alt="teak-flooring-6" title="teak-flooring-6"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/7.jpg" alt="teak-flooring-7" title="teak-flooring-7"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/8.jpg" alt="teak-flooring-8" title="teak-flooring-8"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/9.jpg" alt="teak-flooring-9" title="teak-flooring-9"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/10.jpg" alt="teak-flooring-10" title="teak-flooring-10"></a></li>
                                <li><a data-fancybox="teak" data-caption="Teak floors caption" href="{{url('public')}}/images/categories/outdoor/teak-flooring/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/11.jpg" alt="teak-flooring-11" title="teak-flooring-11"></a></li>
                            </ul>
                            <ul class="category-images-list" id="shower-units">
                              <li><a data-fancybox="shower" data-caption="shower caption" href="{{url('public')}}/images/categories/outdoor/shower-units/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/1.jpg" alt="shower-units-1" title="shower-units-1"></a></li>
                              <li><a data-fancybox="shower" data-caption="shower caption" href="{{url('public')}}/images/categories/outdoor/shower-units/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/2.jpg" alt="shower-units-2" title="shower-units-2"></a></li>
                            </ul>
                            <ul class="category-images-list" id="pergolas">
                              <li><a data-fancybox="pergolas" data-caption="pergolas caption here" href="{{url('public')}}/images/categories/outdoor/pergolas/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/1.jpg" alt="pergolas-1" title="pergolas-1"></a></li>
                              <li><a data-fancybox="pergolas" data-caption="pergolas caption here" href="{{url('public')}}/images/categories/outdoor/pergolas/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/2.jpg" alt="pergolas-2" title="pergolas-2"></a></li>
                              <li><a data-fancybox="pergolas" data-caption="pergolas caption here" href="{{url('public')}}/images/categories/outdoor/pergolas/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/3.jpg" alt="pergolas-3" title="pergolas-3"></a></li>
                              <li><a data-fancybox="pergolas" data-caption="pergolas caption here" href="{{url('public')}}/images/categories/outdoor/pergolas/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/4.jpg" alt="pergolas-4" title="pergolas-4"></a></li>
                              <li><a data-fancybox="pergolas" data-caption="pergolas caption here" href="{{url('public')}}/images/categories/outdoor/pergolas/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/5.jpg" alt="pergolas-5" title="pergolas-5"></a></li>
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
                       <a class="single-product grid-sizer transition wood-flooring" href="{{url('public')}}/images/products/3.jpg" data-fancybox data-caption="Caption for single image">
                        	<img src="{{url('public')}}/images/products/3.jpg" alt="شمف فثءف" />
                        </a>
                        <a href="{{url('public')}}/images/products/5.jpg" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/5.jpg" alt=""></a>
                        <a href="{{url('public')}}/images/products/4.jpg" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/4.jpg" alt=""></a>
                        <a href="{{url('public')}}/images/products/2.jpg" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition outdoor"><img src="{{url('public')}}/images/products/2.jpg" alt=""></a>
                        <a href="{{url('public')}}/images/products/2.png" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/2.png" alt=""></a>
                        <a href="{{url('public')}}/images/products/1.jpg" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition wood-flooring"><img src="{{url('public')}}/images/products/1.jpg" alt=""></a>
                        <a href="{{url('public')}}/images/products/1.png" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/1.png" alt=""></a>
                        <a href="{{url('public')}}/images/products/3.png" data-fancybox="products" data-caption="Caption Here" class="single-product grid-sizer transition cabinets"><img src="{{url('public')}}/images/products/3.png" alt=""></a>
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
