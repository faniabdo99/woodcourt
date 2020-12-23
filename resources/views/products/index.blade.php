@include('layout.header', ['PageTitle' => 'Kitchen, Floor ... and More'])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="products-section">
        <div class="dark-overlap">
            <h1>Our Products</h1>
            <p>Kitchen, Floor ... and More</p>
        </div>
    </section>
    <section class="products-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="products-sidebar mb-5">
                        <h3 class="sidebar-title">Filter By Category</h3>
                        <ul class="filter-items">
                            @foreach ($AllCategories as $key => $Category)
                            <li>
                                <a href="{{route('products' , ['category' , $Category->slug])}}">{{$Category->title}}</a>
                                <ul class="filter-sub-items">
                                    @forelse ($Category->SubCategories as $key => $SCategory)
                                    <li><a href="{{route('products' , ['category' , $SCategory->slug])}}">{{$SCategory->title}}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        @forelse ($AllPhotos as $key => $Photo)
                        <div class="col-lg-3 col-12">
                            <a class="single-photo" href="{{$Photo->ImagePath}}" data-fancybox="image">
                                <img src="{{$Photo->ThumbPath}}" />
                            </a>
                        </div>
                        @empty
                        <p>There is no products matches your requirments</p>
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
