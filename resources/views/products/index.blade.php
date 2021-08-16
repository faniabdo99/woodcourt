@include('layout.header', ['PageTitle' => 'Kitchen, Floor ... and More'])
<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <section class="hero-section mb-5" id="products-section">
        <div class="dark-overlap">
            <h1>
                @if(request()->route('isFiltered') != null)
                    {{ucwords(str_replace('-' , ' ' ,request()->route('filter')))}}
                @else
                    @lang('products.products_h')
                @endif
            </h1>
        </div>
    </section>
    <section class="products-page mt-5">
        <div class="container">
            <div id="products-page-filters-sidepanel" class="filters-sidepanel">
                <div class="filters-sidepanel-header">
                    <h4>All Filters</h4>
                    <span class="close-sidepanel" data-target="products-page-filters-sidepanel"><i class="fas fa-times"></i></span>
                </div>
                <div class="products-sidebar">
                    <h3 class="sidebar-title">@lang('products.products_sidebar_cat')</h3>
                    <ul class="filter-items">
                        <li><a href="{{route('products')}}">@lang('products.products_sidebar_all')</a></li>
                        @foreach ($AllCategories as $key => $Category)
                        <li>
                            <a @if(request()->route('filter') == $Category->slug) class="active" @endif href="{{route('products' , ['category' , $Category->slug])}}">{{$Category->title}}</a>
                            <ul class="filter-sub-items">
                                @forelse ($Category->SubCategories as $key => $SCategory)
                                    <li><a href="{{route('products' , ['category' , $SCategory->slug])}}" @if(request()->route('filter') == $SCategory->slug) class="active" @endif>{{$SCategory->title}}</a></li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="products-sidebar">
                    <h3 class="sidebar-title">@lang('products.products_sidebar_type')</h3>
                    <ul class="filter-items">
                        <li>
                            <ul class="filter-sub-items">
                                @foreach ($AllWoodTypes as $key => $WoodType)
                                    <li><a href="{{route('products' , ['wood-type' , $WoodType])}}" @if(request()->route('filter') == $WoodType) class="active" @endif>{{$WoodType}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <button id="filters-sidepanel-trigger" data-target="products-page-filters-sidepanel" title="Filter Products"><i class="fas fa-filter"></i> <span class="d-none d-lg-inline">Filter</span></button>
                <div class="col-lg-12 col-12">
                    <div class="row">
                        @forelse ($AllProducts as $key => $Product)
                        <div class="col-lg-3 col-12">
                            <div class="single-product-item">
                                <a href="{{route('products.single' , $Product->slug)}}">
                                    <div class="image-container" style="background:url({{$Product->ThumbPath}}) no-repeat center center;"></div>
                                    <div class="content-container">
                                        <h2>{{$Product->title}}</h2>
                                    </div>
                                    <a class="icon-button d-block w-100 text-center" href="{{route('products.single' , $Product->slug)}}">@lang('products.products_sidebar_content_btn_2')</a>
                                </a>
                            </div>
                        </div>
                        @empty
                        <p>@lang('products.products_sidebar_content_p')</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
