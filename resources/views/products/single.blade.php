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
            <div class="event-content">
              <div class="single-product-images w-100">
                <ul>
                  @forelse ($TheProduct->Gallery as $key => $Gallery)
                  <li><a href="{{$Gallery->ImagePath}}" data-fancybox="gallery"><img src="{{$Gallery->ThumbPath}}" ></a></li>
                  @empty
                  
                  @endforelse
                </ul>
              </div>
            </div>
            <div class="product-controls">
              @if($Previous != null)
                <a href="{{route('products.single' , $Previous->slug)}}"><i class="fas fa-chevron-left"></i> Previous Product</a>
              @endif
              @if($Next != null)
                <a href="{{route('products.single' , $Next->slug)}}">Next Product <i class="fas fa-chevron-right"></i></a>
              @endif
            </div>
            <div class="event-content">
              <div class="whatsapp-cta-product mb-5" id="other-colors-products">
                <p>OTHER COLORS ARE AVAILABLE UPON REQUEST<br>
                The Wood Court offers a large variety of colors for each product line.</p>
              </div>
              {!! $TheProduct->description !!}
              <div class="whatsapp-cta-product mb-5">
                <p>GET A QOUTE ABOUT THIS PRODUCT</p>
                <a href="https://wa.me/00201115751111?text={{url()->current()}}" target="_blank"><i class="fab fa-whatsapp"></i> Contact Us</a>
              </div>
              <div class="share-product-info">
                <p>Share <b>{{$TheProduct->title}}</b> with your friends:</p>
                <a id="facebook" href="http://www.facebook.com/share.php?u={{url()->current()}}" target="_blank"><i class="fab fa-facebook"></i> Share</a>
                <a id="whatsapp" href="https://api.whatsapp.com/send?text=Check%20This%20Product%20By%20TheWoodCourt%0D{{url()->current()}}" target="_blank"><i class="fab fa-whatsapp"></i> Send</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layout.footer')
    @include('layout.scripts')
</body>
</html>
