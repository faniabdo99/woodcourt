@include('layout.header', ['PageTitle' => $TheProduct->title])
<body>
    @include('layout.navbar')
    <section class="single-event-article">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="mb-2">{{$TheProduct->title}}</h1>
            <span class="metabox d-block mb-3">
              <i class="fas fa-calendar"></i> {{$TheProduct->created_at->format('d, M Y')}}
            </span>
            <a href="{{$TheProduct->imagePath}}" data-fancybox="fd">
              <img class="w-100 mb-3" src="{{$TheProduct->ImagePath}}" alt="{{$TheProduct->title}}">
            </a>
            <div class="product-controls">
              @if($Previous != null)
                <a href="{{route('products.single' , $Previous->slug)}}"><i class="fas fa-chevron-left"></i> Previous Product</a>
              @endif
              @if($Next != null)
                <a href="{{route('products.single' , $Next->slug)}}">Next Product <i class="fas fa-chevron-right"></i></a>
              @endif
            </div>
            <div class="event-content">
              {!! $TheProduct->description !!}
              <div class="single-product-images">
                <h3>More Images For : {{$TheProduct->title}}</h3>
                <ul>
                  @forelse ($TheProduct->Gallery as $key => $Gallery)
                    <li><a href="{{$Gallery->ImagePath}}" data-fancybox="gallery"><img src="{{$Gallery->ThumbPath}}" ></a></li>
                  @empty

                  @endforelse
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layout.scripts')
</body>
</html>
