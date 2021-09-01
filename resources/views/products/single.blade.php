@include('layout.header', ['PageTitle' => $TheProduct->LocalTitle])

<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <section class="single-event-article">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="products-breadcrumbs">
                        <ul>
                            <li><a
                                    href="{{ route('products', ['category', $TheProduct->Category->slug]) }}">{{ $TheProduct->Category->title }}</a>
                                ></li>
                            <li><a
                                    href="{{ route('products', ['category', $TheProduct->SubCategory->slug]) }}">{{ $TheProduct->SubCategory->title }}</a>
                                ></li>
                            <li>{{ $TheProduct->LocalTitle }}</li>
                        </ul>
                    </div>
                    <h1 class="mb-2">{{ $TheProduct->LocalTitle }}</h1>
                    <span class="metabox d-block mb-3">
                        <i class="fas fa-calendar"></i> {{ $TheProduct->created_at->format('d, M Y') }}
                    </span>
                    <a href="{{ $TheProduct->imagePath }}" data-fancybox="fd">
                        <img class="w-100 mb-3" src="{{ $TheProduct->ImagePath }}" alt="{{ $TheProduct->LocalTitle }}">
                    </a>
                    <div class="event-content">
                        <div class="single-product-images w-100">
                            <ul>
                                @forelse ($TheProduct->Gallery as $key => $Gallery)
                                    <li><a href="{{ $Gallery->ImagePath }}" data-fancybox="gallery"><img
                                                src="{{ $Gallery->ThumbPath }}"></a></li>
                                @empty

                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="product-controls ">

                        @if (session()->get('locale') == 'ar')
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i
                                        class="fas fa-chevron-right"></i>@lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next')
                                    <i class="fas fa-chevron-left"></i></a>
                            @endif
                        @elseif(session()->get('locale') == 'en' )
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i
                                        class="fas fa-chevron-left"></i>@lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next')
                                    <i class="fas fa-chevron-right"></i></a>
                        @endif @else
                            @if ($Previous != null)
                                <a href="{{ route('products.single', $Previous->slug) }}"><i
                                        class="fas fa-chevron-left"></i>@lang('products.products_single_prev')</a>
                            @endif
                            @if ($Next != null)
                                <a href="{{ route('products.single', $Next->slug) }}">@lang('products.products_single_next')
                                    <i class="fas fa-chevron-right"></i></a>
                            @endif
                        @endif
                    </div>
                    <div class="event-content">
                        <div class="whatsapp-cta-product mb-5" id="other-colors-products">
                            <p>@lang('products.products_single_whats_cta_p')</p>
                        </div>
                        {!! $TheProduct->LocalDescrition !!}
                        <div class="whatsapp-cta-product mb-5">
                            <p>@lang('products.products_single_quote')</p>
                            <a href="https://wa.me/00201117571111?text={{ url()->current() }}" target="_blank"><i
                                    class="fab fa-whatsapp"></i>@lang('products.products_single_contact')</a>
                        </div>
                        <div class="share-product-info">
                            <p>@lang('products.products_single_share_title_1')
                                <b>{{ $TheProduct->LocalTitle }}</b>@lang('products.products_single_share_title_1')</p>
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
          "brand": {
            "@type": "Thing",
            "name": "The Wood Court"
          }
        }
    </script>
</body>

</html>
