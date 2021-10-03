@include('layout.header', ['PageTitle' => $TheProduct->LocalTitle])

<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <section class="single-event-article">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="products-breadcrumbs">
                        <ul>
                            <li><a href="{{ route('products', ['category', $TheProduct->Category->slug]) }}">{{ $TheProduct->Category->title }}</a>
                                ></li>
                            <li><a href="{{ route('products', ['category', $TheProduct->SubCategory->slug]) }}">{{ $TheProduct->SubCategory->title }}</a>
                                ></li>
                            <li>{{ $TheProduct->LocalTitle }}</li>
                        </ul>
                    </div>
                    <h1 class="mb-2">{{ $TheProduct->LocalTitle }}</h1>
                    <span class="metabox d-block mb-3">
                        <i class="fas fa-calendar"></i> {{ $TheProduct->created_at->format('d, M Y') }}
                    </span>
                    <div class="row">
                        <div class="event-content col-2">
                            <div class="single-product-images w-100">
                                <ul class="flex-column">
                                    @forelse ($TheProduct->Gallery as $key => $Gallery)
                                        <li class="border border-light"><a href="{{ $Gallery->ImagePath }}" data-fancybox="gallery"><img src="{{ $Gallery->ThumbPath }}"></a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="col-10">
                            <a href="{{ $TheProduct->imagePath }}" data-fancybox="gallery">
                                <img class="w-100 h-75 mb-3" src="{{ $TheProduct->imagePath }}" alt="{{ $TheProduct->LocalTitle }}">
                            </a>
                        </div>

                    </div>
                    <div class="product-controls ">
                        @if (session()->get('locale') == 'ar')
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i class="fas fa-chevron-right"></i> @lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next') <i class="fas fa-chevron-left"></i></a>
                            @endif
                        @elseif(session()->get('locale') == 'en' )
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i class="fas fa-chevron-left"></i> @lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next') <i class="fas fa-chevron-right"></i></a>
                        @endif @else
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i class="fas fa-chevron-left"></i> @lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next') <i class="fas fa-chevron-right"></i></a>
                            @endif
                        @endif
                    </div>
                    <div class="event-content">
                        <div class="whatsapp-cta-product mb-5" id="other-colors-products">
                            <p>@lang('products.products_single_whats_cta_p')</p>
                        </div>
                        <div>
                            {!! $TheProduct->LocalDescrition !!}
                        </div>
                        <br>
                        <div class="whatsapp-cta-product mb-5">
                            <p>@lang('products.products_single_quote')</p>
                            <a href="https://wa.me/00201117571111?text={{ url()->current() }}" target="_blank"><i class="fab fa-whatsapp"></i> @lang('products.products_single_contact')</a>
                        </div>
                        <div class="share-product-info">
                            <p>@lang('products.products_single_share_title_1')
                                <b>{{ $TheProduct->LocalTitle }}</b> @lang('products.products_single_share_title_1')</p>
                            <a id="facebook" href="http://www.facebook.com/share.php?u={{ url()->current() }}"
                                target="_blank"><i class="fab fa-facebook"></i>
                                @lang('products.products_single_share_title_1')</a>
                            <a id="whatsapp"
                                href="https://api.whatsapp.com/send?text=Check%20This%20Product%20By%20TheWoodCourt%0D{{ url()->current() }}"
                                target="_blank"><i class="fab fa-whatsapp"></i>
                                @lang('products.products_single_share_whatsapp')</a>
                            <a id="pinterest"
                                href="https://pinterest.com/pin/create/button/?url={{ url()->current() }}"
                                target="_blank" data-pin-custom="true"><i class="fab fa-pinterest"></i>
                                @lang('products.products_single_share_pinterest')</a>
                        </div>
                        <div class="clients-reviews mt-5 mb-5">
                            <h3 class="mb-3">25 Reviews about Pine Vanity</h3>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-12 rates-list">
                                    @forelse($TheProduct->Reviews as $Review)
                                        <div class="position-relative mt-5 mb-5">
                                            <div class="rating-stars">
                                                <span>
                                                        @for ($i = 0; $i <= $Review->rate; $i++)
                                                            <i class="fas fa-star active text-danger"></i>
                                                        @endfor 
                                                        @for ($i = 0; $i <= 5 - $Review->rate; $i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor 
                                                    {{$Review->RateText}}
                                                </span>
                                            </div>
                                            <div class="rating-content">
                                                <h4>{{$Review->name}}</h4>
                                                <p>{{$Review->review}}</p>
                                            </div>
                                        </div>
                                    @empty
                                        <p>There are no reviews to this product yet.</p>
                                    @endforelse
                                </div>
                                <div class="rate-request-form col-lg-4 col-md-12">
                                    <div class="stars-box d-flex justify-content-around mb-5">
                                        <div>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div>
                                            <h3 class="m-0">{{number_format($TheProduct->Reviews->avg('rate') , 1) ?? 'NA'}}  / 5 Stars</h3>
                                                <p class="text-white m-0 font-weight-light">Based on {{$TheProduct->Reviews->count()}} Reviews</p>
                                        </div>
                                    </div>
                                    <form action="{{route('review.postNew')}}" method="post">
                                        @csrf
                                        <input hidden name="product_id" value="{{$TheProduct->id}}">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{old('name') ?? ''}}" placeholder="Please enter your name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email (Will not be published)</label>
                                            <input type="email" name="email" class="form-control" value="{{old('email') ?? ''}}" placeholder="Please enter your email (not required)">
                                        </div>
                                        <div class="form-group">
                                            <label>Rating</label>
                                                <select class="form-control p-0" name="rate" required>
                                                    <option @if(old('rate') == 5) selected @else selected @endif value="5">Very Good (5 Stars)</option>
                                                    <option @if(old('rate') == 4) selected @else @endif value="4">Good (4 Stars)</option>
                                                    <option @if(old('rate') == 3) selected @else @endif value="3">Medium (3 Stars)</option>
                                                    <option @if(old('rate') == 2) selected @else @endif value="2">Normal (2 Stars)</option>
                                                    <option @if(old('rate') == 1) selected @else @endif value="1">Bad (1 Star)</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Review</label>
                                            <textarea class="form-control" name="review" cols="30" rows="5" placeholder="Please enter your review" required>{{old('review') ?? ''}}</textarea>
                                        </div>
                                        <button type="submit" class="">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="similar-products mt-5">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-4">@lang('products.products_single_similar_produc_title')
                                        {{ $TheProduct->LocalTitle }}</h3>
                                        <div class="owl-carousel owl-theme full-width-carousel-with-nav similar-product-dir">
                                            @forelse (array_chunk($TheProduct->SimilarProducts->toArray(), 3)  as $chunk)
                                                <div class="row">
                                                    @forelse ($chunk as $SProduct)
                                                        <div class="col-lg-4">
                                                            @php
                                                                $SProduct = App\Models\Product::find($SProduct['item_id']);
                                                            @endphp
                                                            <img class="w-100 mb-2" src="{{ $SProduct->ThumbPath }}"
                                                                alt="">
                                                            <h5>{{ $SProduct->title }}</h5>
                                                            <a class="icon-button"
                                                                href="{{ route('products.single', $SProduct->slug) }}">@lang('products.products_single_similar_product_btn')</a>
                                                        </div>
                                                    @empty
                                                        <p>@lang('products.products_single_similar_product_empty_1')</p>
                                                    @endforelse
                                                </div>
                                            @empty
                                                <p>@lang('products.products_single_similar_product_empty_2')</p>
                                            @endforelse
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer')
    @include('layout.scripts')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "{{$TheProduct->LocalTitle}}",
          "image": "{{$TheProduct->ThumbPath}}",
          "description": "{{$TheProduct->description}}",
          "mpn": "TWC_{{$TheProduct->id}}",
          "sku": "TWC_{{$TheProduct->id}}",
          "brand": {
            "@type": "Thing",
            "name": "The Wood Court"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "{{rand(1,50)}}"
          }
        }
    </script>
</body>

</html>
