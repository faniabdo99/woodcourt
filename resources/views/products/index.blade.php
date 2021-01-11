@include('layout.header', ['PageTitle' => 'Kitchen, Floor ... and More'])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="products-section">
        <div class="dark-overlap">
            <h1>Our Products</h1>
            <p>Kitchen, Floor ... and More</p>
        </div>
    </section>
    <section id="homepage-categories" class="mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="products-sidebar mb-5">
                        <h3 class="sidebar-title">Filter By Category</h3>
                        <ul class="filter-items">
                            <li>
                              <a class="main-category-filter" href="javascript:;" data-target="all">All</a>
                            </li>
                            <li>
                                <a class="main-category-filter active" href="javascript:;" data-target="wood-flooring">Wood Flooring</a>
                                <ul class="filter-sub-items">
                                    <li><a data-target="engineered-floors" href="javascript:;">Engineered Floors</a></li>
                                    <li><a data-target="tiles" href="javascript:;">Tiles</a></li>
                                    <li><a data-target="stairs" href="javascript:;">Stairs</a></li>
                                    <li><a data-target="hdf-floors" href="javascript:;">HDF Floors</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="main-category-filter" href="javascript:;" data-target="cabinets">Cabinets</a>
                                <ul class="filter-sub-items">
                                    <li><a data-target="kitchens" href="javascript:;">Kitchens</a></li>
                                    <li><a data-target="dressings" href="javascript:;">Dressings</a></li>
                                    <li><a data-target="bathroom-cabinets" href="javascript:;">Bathroom cabinets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="main-category-filter" href="javascript:;" data-target="outdoor">Outdoor</a>
                                <ul class="filter-sub-items">
                                    <li><a href="javascript:;" data-target="teak-flooring">Teak Flooring</a></li>
                                    <li><a data-target="shower-units" href="javascript:;"> Shower Units</a></li>
                                    <li><a data-target="pergolas" href="javascript:;">Pergolas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-12" id="images-list">
                            <ul class="category-images-list active wood-flooring" id="engineered-floors">
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/1.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/1.jpg" alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/2.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/2.jpg" alt="engineered-floors-1" title="engineered-floors-2"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/3.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/3.jpg" alt="engineered-floors-1" title="engineered-floors-3"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/4.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/4.jpg" alt="engineered-floors-1" title="engineered-floors-4"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/5.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/5.jpg" alt="engineered-floors-1" title="engineered-floors-5"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/6.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/6.jpg" alt="engineered-floors-1" title="engineered-floors-6"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/7.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/7.jpg" alt="engineered-floors-1" title="engineered-floors-7"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/8.jpg" alt="engineered-floors-1" title="engineered-floors-8"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/9.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/9.jpg" alt="engineered-floors-1" title="engineered-floors-9"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/10.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/10.jpg" alt="engineered-floors-1" title="engineered-floors-10"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/11.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/11.jpg" alt="engineered-floors-1" title="engineered-floors-11"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/12.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/12.jpg" alt="engineered-floors-1" title="engineered-floors-12"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/13.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/13.jpg" alt="engineered-floors-1" title="engineered-floors-13"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/14.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/14.jpg" alt="engineered-floors-1" title="engineered-floors-14"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/15.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/15.jpg" alt="engineered-floors-1" title="engineered-floors-15"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/16.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/16.jpg" alt="engineered-floors-1" title="engineered-floors-16"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/17.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/17.jpg" alt="engineered-floors-1" title="engineered-floors-17"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/18.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/18.jpg" alt="engineered-floors-1" title="engineered-floors-18"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/19.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/19.jpg" alt="engineered-floors-1" title="engineered-floors-19"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/20.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/20.jpg" alt="engineered-floors-1" title="engineered-floors-20"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/21.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/21.jpg" alt="engineered-floors-1" title="engineered-floors-21"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/22.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/22.jpg" alt="engineered-floors-1" title="engineered-floors-22"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/23.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/23.jpg" alt="engineered-floors-1" title="engineered-floors-23"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/24.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/24.jpg" alt="engineered-floors-1" title="engineered-floors-24"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/25.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/25.jpg" alt="engineered-floors-1" title="engineered-floors-25"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/26.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/26.jpg" alt="engineered-floors-1" title="engineered-floors-26"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/27.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/27.jpg" alt="engineered-floors-1" title="engineered-floors-27"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/28.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/28.jpg" alt="engineered-floors-1" title="engineered-floors-28"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/29.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/29.jpg" alt="engineered-floors-1" title="engineered-floors-29"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/30.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/30.jpg" alt="engineered-floors-1" title="engineered-floors-30"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/31.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/31.jpg" alt="engineered-floors-1" title="engineered-floors-31"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/32.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/32.jpg" alt="engineered-floors-1" title="engineered-floors-32"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/33.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/33.jpg" alt="engineered-floors-1" title="engineered-floors-33"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/34.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/34.jpg" alt="engineered-floors-1" title="engineered-floors-34"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/35.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/35.jpg" alt="engineered-floors-1" title="engineered-floors-35"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/36.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/36.jpg" alt="engineered-floors-1" title="engineered-floors-36"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/37.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/37.jpg" alt="engineered-floors-1" title="engineered-floors-37"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/38.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/38.jpg" alt="engineered-floors-1" title="engineered-floors-38"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/39.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/39.jpg" alt="engineered-floors-1" title="engineered-floors-39"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/40.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/40.jpg" alt="engineered-floors-1" title="engineered-floors-40"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/41.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/41.jpg" alt="engineered-floors-1" title="engineered-floors-41"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/42.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/42.jpg" alt="engineered-floors-1" title="engineered-floors-42"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/43.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/43.jpg" alt="engineered-floors-1" title="engineered-floors-43"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/44.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/44.jpg" alt="engineered-floors-1" title="engineered-floors-44"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/45.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/45.jpg" alt="engineered-floors-1" title="engineered-floors-45"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/46.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/46.jpg" alt="engineered-floors-1" title="engineered-floors-46"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/47.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/47.jpg" alt="engineered-floors-1" title="engineered-floors-47"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/48.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/48.jpg" alt="engineered-floors-1" title="engineered-floors-48"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/49.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/49.jpg" alt="engineered-floors-1" title="engineered-floors-49"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/50.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/50.jpg" alt="engineered-floors-1" title="engineered-floors-50"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/51.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/51.jpg" alt="engineered-floors-1" title="engineered-floors-51"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/52.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/52.jpg" alt="engineered-floors-1" title="engineered-floors-52"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/53.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/53.jpg" alt="engineered-floors-1" title="engineered-floors-53"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/54.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/54.jpg" alt="engineered-floors-1" title="engineered-floors-54"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/55.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/55.jpg" alt="engineered-floors-1" title="engineered-floors-55"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/56.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/56.jpg" alt="engineered-floors-1" title="engineered-floors-56"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/57.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/57.jpg" alt="engineered-floors-1" title="engineered-floors-57"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/58.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/58.jpg" alt="engineered-floors-1" title="engineered-floors-58"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/59.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/59.jpg" alt="engineered-floors-1" title="engineered-floors-59"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/60.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/60.jpg" alt="engineered-floors-1" title="engineered-floors-60"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/61.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/61.jpg" alt="engineered-floors-1" title="engineered-floors-61"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/62.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/62.jpg" alt="engineered-floors-1" title="engineered-floors-62"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/63.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/63.jpg" alt="engineered-floors-1" title="engineered-floors-63"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/64.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/64.jpg" alt="engineered-floors-1" title="engineered-floors-64"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/65.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/65.jpg" alt="engineered-floors-1" title="engineered-floors-65"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/66.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/66.jpg" alt="engineered-floors-1" title="engineered-floors-66"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/67.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/67.jpg" alt="engineered-floors-1" title="engineered-floors-67"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/68.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/68.jpg" alt="engineered-floors-1" title="engineered-floors-68"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/69.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/69.jpg" alt="engineered-floors-1" title="engineered-floors-69"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/70.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/70.jpg" alt="engineered-floors-1" title="engineered-floors-70"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/71.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/71.jpg" alt="engineered-floors-1" title="engineered-floors-71"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/72.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/72.jpg" alt="engineered-floors-1" title="engineered-floors-72"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/73.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/73.jpg" alt="engineered-floors-1" title="engineered-floors-73"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/74.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/74.jpg" alt="engineered-floors-1" title="engineered-floors-74"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/75.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/75.jpg" alt="engineered-floors-1" title="engineered-floors-75"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/76.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/76.jpg" alt="engineered-floors-1" title="engineered-floors-76"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/77.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/77.jpg" alt="engineered-floors-1" title="engineered-floors-77"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/78.jpg" target="_blank"><img
                                          src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/78.jpg" alt="engineered-floors-1" title="engineered-floors-78"></a></li>
                            </ul>
                            <ul class="category-images-list" id="tiles">
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/1.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-1"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/2.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-2"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/3.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-3"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/4.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-4"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/5.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-5"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/6.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-6"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/7.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-7"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/8.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-8"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/9.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-9"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/10.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-10"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/11.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-11"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/12.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-12"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/13.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-13"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/14.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-14"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/15.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-15"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/16.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-16"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/17.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-17"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/18.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-18"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/19.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-19"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/20.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-20"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/21.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-21"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/22.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-22"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/23.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-23"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/24.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-24"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/25.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/25.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-25"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/26.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/26.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-26"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/27.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/27.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-27"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/28.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/28.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-28"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/29.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/29.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-29"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/30.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/30.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-30"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/31.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/31.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-31"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/32.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/32.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-32"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/33.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/33.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-33"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/34.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/34.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-34"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/35.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/35.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-35"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/36.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/36.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-36"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/37.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/37.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-37"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/38.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/38.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-38"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/39.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/39.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-39"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/40.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/40.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-40"></a></li>
                                <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/41.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/41.jpg"
                                          alt="engineered-floors-1" title="engineered-floors-41"></a></li>
                            </ul>
                            <ul class="category-images-list active wood-flooring" id="stairs">
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
                            <ul class="category-images-list active wood-flooring" id="hdf-floors">
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
                            <ul class="category-images-list" id="kitchens">
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/1.jpg" alt="kitchens-1"
                                          title="kitchens-1"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/2.jpg" alt="kitchens-2"
                                          title="kitchens-2"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/3.jpg" alt="kitchens-3"
                                          title="kitchens-3"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/4.jpg" alt="kitchens-4"
                                          title="kitchens-4"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/5.jpg" alt="kitchens-5"
                                          title="kitchens-5"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/6.jpg" alt="kitchens-6"
                                          title="kitchens-6"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/7.jpg" alt="kitchens-7"
                                          title="kitchens-7"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/8.jpg" alt="kitchens-8"
                                          title="kitchens-8"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/9.jpg" alt="kitchens-9"
                                          title="kitchens-9"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/10.jpg" alt="kitchens-10"
                                          title="kitchens-10"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/11.jpg" alt="kitchens-11"
                                          title="kitchens-11"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/12.jpg" alt="kitchens-12"
                                          title="kitchens-12"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/13.jpg" alt="kitchens-13"
                                          title="kitchens-13"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/14.jpg" alt="kitchens-14"
                                          title="kitchens-14"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/15.jpg" alt="kitchens-15"
                                          title="kitchens-15"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/16.jpg" alt="kitchens-16"
                                          title="kitchens-16"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/17.jpg" alt="kitchens-17"
                                          title="kitchens-17"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/18.jpg" alt="kitchens-18"
                                          title="kitchens-18"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/19.jpg" alt="kitchens-19"
                                          title="kitchens-19"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/20.jpg" alt="kitchens-20"
                                          title="kitchens-20"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/21.jpg" alt="kitchens-21"
                                          title="kitchens-21"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/22.jpg" alt="kitchens-22"
                                          title="kitchens-22"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/23.jpg" alt="kitchens-23"
                                          title="kitchens-23"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/24.jpg" alt="kitchens-24"
                                          title="kitchens-24"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/25.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/25.jpg" alt="kitchens-25"
                                          title="kitchens-25"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/26.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/26.jpg" alt="kitchens-26"
                                          title="kitchens-26"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/27.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/27.jpg" alt="kitchens-27"
                                          title="kitchens-27"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/28.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/28.jpg" alt="kitchens-28"
                                          title="kitchens-28"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/29.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/29.jpg" alt="kitchens-29"
                                          title="kitchens-29"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/30.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/30.jpg" alt="kitchens-30"
                                          title="kitchens-30"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/31.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/31.jpg" alt="kitchens-31"
                                          title="kitchens-31"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/32.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/32.jpg" alt="kitchens-32"
                                          title="kitchens-32"></a></li>
                                <li><a data-fancybox="kitchens" data-caption="" href="{{url('public')}}/images/categories/cabinets/kitchens/33.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/kitchens/33.jpg" alt="kitchens-33"
                                          title="kitchens-33"></a></li>
                            </ul>
                            <ul class="category-images-list" id="dressings">
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/1.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/2.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/3.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/4.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/5.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/6.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/7.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                                <li><a data-fancybox="dressings" data-caption="" href="{{url('public')}}/images/categories/cabinets/dressings/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/dressings/8.jpg" alt="dressings-1"
                                          title="dressings-1"></a></li>
                            </ul>
                            <ul class="category-images-list" id="bathroom-cabinets">
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/1.jpg"
                                          alt="bathroom-cabinets-1" title="bathroom-cabinets-1"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/2.jpg"
                                          alt="bathroom-cabinets-2" title="bathroom-cabinets-2"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/3.jpg"
                                          alt="bathroom-cabinets-3" title="bathroom-cabinets-3"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/4.jpg"
                                          alt="bathroom-cabinets-3" title="bathroom-cabinets-4"></a></li>
                            </ul>
                            <ul class="category-images-list outdoor" id="teak-flooring">
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
                            <ul class="category-images-list outdoor" id="shower-units">
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/1.jpg"
                                          alt="shower-units-1" title="shower-units-1"></a></li>
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/2.jpg"
                                          alt="shower-units-2" title="shower-units-2"></a></li>
                            </ul>
                            <ul class="category-images-list outdoor" id="pergolas">
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
    </section>
    <!-- Homepage Category Modals Start -->
    @include('layout.scripts')
    @include('layout.footer')
    <script type="text/javascript">
        $('.main-category-filter').click(function(){
          if($(this).data('target') == 'all'){
            $('.filter-sub-items li a').removeClass('active');
            $('.main-category-filter').removeClass('active');
            $(this).addClass('active');
            $('.category-images-list').removeClass('active');
            $('.category-images-list').addClass('active');
          }else{
            $('.category-images-list').removeClass('active');
            $('.filter-sub-items li a').removeClass('active');
            $('.main-category-filter').removeClass('active');
            $(this).addClass('active');
            $('.'+$(this).data('target')).addClass('active');
          }

        });
        $('.filter-sub-items li a').click(function() {
            $('.main-category-filter').removeClass('active');
            $('.category-images-list').removeClass('active');
            $('.filter-sub-items li a').removeClass('active');
            $(this).addClass('active');
            $('#' + $(this).data('target')).addClass('active');
        });
    </script>
</body>

</html>
