@include('layout.header', ['PageTitle' => 'Cabinets'])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="products-section">
        <div class="dark-overlap">
            <h1>Cabinets</h1>
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
                                <a class="main-category-filter " href="javascript:;" data-target="wood-flooring">Wood Flooring</a>
                                <ul class="filter-sub-items">
                                    <li><a data-target="engineered-floors" href="javascript:;">Engineered Floors</a></li>
                                    <li><a data-target="tiles"  href="javascript:;">Tiles</a></li>
                                    <li><a data-target="stairs" href="javascript:;">Stairs</a></li>
                                    <li><a data-target="hdf-floors"  href="javascript:;">HDF Floors</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="main-category-filter active" href="javascript:;" data-target="cabinets">Cabinets</a>
                                <ul class="filter-sub-items">
                                    <li><a data-target="kitchens" href="javascript:;">Kitchens</a></li>
                                    <li><a data-target="dressings" href="javascript:;">Dressings</a></li>
                                    <li><a data-target="bathroom-cabinets" href="javascript:;">Sink Units</a></li>
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
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/78.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/78.jpg" alt="engineered-floors-1" title="engineered-floors-78"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/79.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/79.jpg" alt="engineered-floors-79" title="engineered-floors-79"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/80.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/80.jpg" alt="engineered-floors-80" title="engineered-floors-80"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/81.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/81.jpg" alt="engineered-floors-81" title="engineered-floors-81"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/82.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/82.jpg" alt="engineered-floors-82" title="engineered-floors-82"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/83.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/83.jpg" alt="engineered-floors-83" title="engineered-floors-83"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/84.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/84.jpg" alt="engineered-floors-84" title="engineered-floors-84"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/85.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/85.jpg" alt="engineered-floors-85" title="engineered-floors-85"></a></li>
                                          <li><a data-fancybox="eng-floors" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/engineered-floors/86.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/engineered-floors/86.jpg" alt="engineered-floors-86" title="engineered-floors-86"></a></li>
                            </ul>
                            <ul class="category-images-list active wood-flooring" id="tiles">
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

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/42.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/42.jpg" alt="tiles-42" title="tiles-42"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/43.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/43.jpg" alt="tiles-43" title="tiles-43"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/44.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/44.jpg" alt="tiles-44" title="tiles-44"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/45.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/45.jpg" alt="tiles-45" title="tiles-45"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/46.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/46.jpg" alt="tiles-46" title="tiles-46"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/47.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/47.jpg" alt="tiles-47" title="tiles-47"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/48.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/48.jpg" alt="tiles-48" title="tiles-48"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/49.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/49.jpg" alt="tiles-49" title="tiles-49"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/50.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/50.jpg" alt="tiles-50" title="tiles-50"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/51.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/51.jpg" alt="tiles-51" title="tiles-51"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/52.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/52.jpg" alt="tiles-52" title="tiles-52"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/53.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/53.jpg" alt="tiles-53" title="tiles-53"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/54.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/54.jpg" alt="tiles-54" title="tiles-54"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/55.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/55.jpg" alt="tiles-55" title="tiles-55"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/56.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/56.jpg" alt="tiles-56" title="tiles-56"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/57.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/57.jpg" alt="tiles-57" title="tiles-57"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/58.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/58.jpg" alt="tiles-58" title="tiles-58"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/59.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/59.jpg" alt="tiles-59" title="tiles-59"></a></li>

                              <li><a data-fancybox="tiles" data-caption="" href="{{url('public')}}/images/categories/wood-flooring/tiles/60.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/wood-flooring/tiles/60.jpg" alt="tiles-60" title="tiles-60"></a></li>
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
                            <ul class="category-images-list cabinets" id="kitchens">
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
                            <ul class="category-images-list cabinets" id="dressings">
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
                            <ul class="category-images-list cabinets" id="bathroom-cabinets">
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/1.jpg"
                                          alt="bathroom-cabinets-1" title="bathroom-cabinets-1"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/2.jpg"
                                          alt="bathroom-cabinets-2" title="bathroom-cabinets-2"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/3.jpg"
                                          alt="bathroom-cabinets-3" title="bathroom-cabinets-3"></a></li>
                                <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/4.jpg"
                                          alt="bathroom-cabinets-3" title="bathroom-cabinets-4"></a></li>
                                        <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/5.jpg"
                                        alt="bathroom-cabinets-5" title="bathroom-cabinets-5"></a></li>
                                        <li><a data-fancybox="bathroom" data-caption="" href="{{url('public')}}/images/categories/cabinets/bathroom-cabinets/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/cabinets/bathroom-cabinets/6.jpg"
                                        alt="bathroom-cabinets-" title="bathroom-cabinets-6"></a></li>
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
                                          <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/12.jpg"
                                            alt="teak-flooring-12" title="teak-flooring-12"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/13.jpg"
                                            alt="teak-flooring-13" title="teak-flooring-13"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/14.jpg"
                                            alt="teak-flooring-14" title="teak-flooring-14"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/15.jpg"
                                            alt="teak-flooring-15" title="teak-flooring-15"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/16.jpg"
                                            alt="teak-flooring-16" title="teak-flooring-16"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/17.jpg"
                                            alt="teak-flooring-17" title="teak-flooring-17"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/18.jpg"
                                            alt="teak-flooring-18" title="teak-flooring-18"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/19.jpg"
                                            alt="teak-flooring-19" title="teak-flooring-19"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/20.jpg"
                                            alt="teak-flooring-20" title="teak-flooring-20"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/21.jpg"
                                            alt="teak-flooring-21" title="teak-flooring-21"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/22.jpg"
                                            alt="teak-flooring-22" title="teak-flooring-22"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/23.jpg"
                                            alt="teak-flooring-23" title="teak-flooring-23"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/24.jpg"
                                            alt="teak-flooring-24" title="teak-flooring-24"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/25.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/25.jpg"
                                            alt="teak-flooring-25" title="teak-flooring-25"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/26.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/26.jpg"
                                            alt="teak-flooring-26" title="teak-flooring-26"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/27.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/27.jpg"
                                            alt="teak-flooring-27" title="teak-flooring-27"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/28.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/28.jpg"
                                            alt="teak-flooring-28" title="teak-flooring-28"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/29.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/29.jpg"
                                            alt="teak-flooring-29" title="teak-flooring-29"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/30.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/30.jpg"
                                            alt="teak-flooring-30" title="teak-flooring-30"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/31.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/31.jpg"
                                            alt="teak-flooring-31" title="teak-flooring-31"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/32.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/32.jpg"
                                            alt="teak-flooring-32" title="teak-flooring-32"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/33.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/33.jpg"
                                            alt="teak-flooring-33" title="teak-flooring-33"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/34.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/34.jpg"
                                            alt="teak-flooring-34" title="teak-flooring-34"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/35.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/35.jpg"
                                            alt="teak-flooring-35" title="teak-flooring-35"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/36.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/36.jpg"
                                            alt="teak-flooring-36" title="teak-flooring-36"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/37.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/37.jpg"
                                            alt="teak-flooring-37" title="teak-flooring-37"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/38.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/38.jpg"
                                            alt="teak-flooring-38" title="teak-flooring-38"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/39.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/39.jpg"
                                            alt="teak-flooring-39" title="teak-flooring-39"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/40.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/40.jpg"
                                            alt="teak-flooring-40" title="teak-flooring-40"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/41.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/41.jpg"
                                            alt="teak-flooring-41" title="teak-flooring-41"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/42.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/42.jpg"
                                            alt="teak-flooring-42" title="teak-flooring-42"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/43.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/43.jpg"
                                            alt="teak-flooring-43" title="teak-flooring-43"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/44.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/44.jpg"
                                            alt="teak-flooring-44" title="teak-flooring-44"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/45.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/45.jpg"
                                            alt="teak-flooring-45" title="teak-flooring-45"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/46.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/46.jpg"
                                            alt="teak-flooring-46" title="teak-flooring-46"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/47.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/47.jpg"
                                            alt="teak-flooring-47" title="teak-flooring-47"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/48.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/48.jpg"
                                            alt="teak-flooring-48" title="teak-flooring-48"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/49.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/49.jpg"
                                            alt="teak-flooring-49" title="teak-flooring-49"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/50.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/50.jpg"
                                            alt="teak-flooring-50" title="teak-flooring-50"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/51.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/51.jpg"
                                            alt="teak-flooring-51" title="teak-flooring-51"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/52.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/52.jpg"
                                            alt="teak-flooring-52" title="teak-flooring-52"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/53.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/53.jpg"
                                            alt="teak-flooring-53" title="teak-flooring-53"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/54.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/54.jpg"
                                            alt="teak-flooring-54" title="teak-flooring-54"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/55.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/55.jpg"
                                            alt="teak-flooring-55" title="teak-flooring-55"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/56.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/56.jpg"
                                            alt="teak-flooring-56" title="teak-flooring-56"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/57.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/57.jpg"
                                            alt="teak-flooring-57" title="teak-flooring-57"></a></li>
                                                                        <li><a data-fancybox="teak" data-caption="" href="{{url('public')}}/images/categories/outdoor/teak-flooring/58.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/teak-flooring/58.jpg"
                                            alt="teak-flooring-58" title="teak-flooring-58"></a></li>
                            </ul>
                            <ul class="category-images-list outdoor" id="shower-units">
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/1.jpg"
                                          alt="shower-units-1" title="shower-units-1"></a></li>
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/2.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/2.jpg"
                                          alt="shower-units-2" title="shower-units-2"></a></li>
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/3.jpg"
                                alt="shower-units-3" title="shower-units-3"></a></li>
                                <li><a data-fancybox="shower" data-caption="" href="{{url('public')}}/images/categories/outdoor/shower-units/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/shower-units/4.jpg"
                                    alt="shower-units-4" title="shower-units-4"></a></li>
                            </ul>
                            <ul class="category-images-list outdoor" id="pergolas">
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/1.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/1.jpg" alt="pergolas-1"
                                          title="pergolas-1"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/3.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/3.jpg" alt="pergolas-3"
                                          title="pergolas-3"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/4.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/4.jpg" alt="pergolas-4"
                                          title="pergolas-4"></a></li>
                                <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/5.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/5.jpg" alt="pergolas-5"
                                          title="pergolas-5"></a></li>
                                          <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/6.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/6.jpg" alt="pergolas-6"
                                            title="pergolas-6"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/7.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/7.jpg" alt="pergolas-7"
                                            title="pergolas-7"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/8.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/8.jpg" alt="pergolas-8"
                                            title="pergolas-8"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/9.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/9.jpg" alt="pergolas-9"
                                            title="pergolas-9"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/10.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/10.jpg" alt="pergolas-10"
                                            title="pergolas-10"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/11.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/11.jpg" alt="pergolas-11"
                                            title="pergolas-11"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/12.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/12.jpg" alt="pergolas-12"
                                            title="pergolas-12"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/13.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/13.jpg" alt="pergolas-13"
                                            title="pergolas-13"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/14.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/14.jpg" alt="pergolas-14"
                                            title="pergolas-14"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/15.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/15.jpg" alt="pergolas-15"
                                            title="pergolas-15"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/16.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/16.jpg" alt="pergolas-16"
                                            title="pergolas-16"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/17.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/17.jpg" alt="pergolas-17"
                                            title="pergolas-17"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/18.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/18.jpg" alt="pergolas-18"
                                            title="pergolas-18"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/19.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/19.jpg" alt="pergolas-19"
                                            title="pergolas-19"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/20.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/20.jpg" alt="pergolas-20"
                                            title="pergolas-20"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/21.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/21.jpg" alt="pergolas-21"
                                            title="pergolas-21"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/22.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/22.jpg" alt="pergolas-22"
                                            title="pergolas-22"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/23.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/23.jpg" alt="pergolas-23"
                                            title="pergolas-23"></a></li>
                                                                        <li><a data-fancybox="pergolas" data-caption="" href="{{url('public')}}/images/categories/outdoor/pergolas/24.jpg" target="_blank"><img src="{{url('public')}}/images/thumbs/outdoor/pergolas/24.jpg" alt="pergolas-24"
                                            title="pergolas-24"></a></li>
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
