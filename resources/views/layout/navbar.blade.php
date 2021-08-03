<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPPW7VJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<header class="position-relative w-100 @lang('settings.text_align')" dir="@lang('settings.direction')">
    <div class="upper-nav">
        <div class="row">
            <ul class="@lang('settings.col_1_eng') text-left upper-nav-social-media">
                <li><a href="https://facebook.com/thewoodcourt" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://instagram.com/thewoodcourt" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
            <ul class="@lang('settongs.col_11_eng')">
                <li><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/The+Wood+Court/@30.0454492,31.1967901,17z/data=!3m1!4b1!4m5!3m4!1s0x1458413486462911:0x945b12fc41fd6e8a!8m2!3d30.0454492!4d31.1989788?hl=en" target="_blank"> @lang('navbar.navbar_location')</a></li>
                <li><i class="fas fa-phone"></i> <a href="https://api.whatsapp.com/send?phone=201117571111">0111 757 1111</a> | <a href="https://api.whatsapp.com/send?phone=201114641111">0111 464 1111</a></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:info@thewoodcourt.com">info@thewoodcourt.com</a></li>
                <li><i class="fas fa-clock"></i> <a title="Working Hours During Ramadan">@lang('navbar.navbar_clock')</a></li>
                <li class="ml-0">
                    @if(session()->get('locale') == 'ar')
                    <li><a href="{{route('switchLang' , 'en')}}"><i class="fas fa-language"></i> English</a></li>
                    @elseif(session()->get('locale') == 'en' )
                    <li><a href="{{route('switchLang' , 'ar')}}"><i class="fas fa-language"></i> العربية</a></li>
                    @else
                    <li><a href="{{route('switchLang' , 'en')}}"><i class="fas fa-language"></i> English</a></li>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{url('public')}}/images/logo-blue.png" alt="The Wood Court Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-0">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">@lang('navbar.navbar_home')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">@lang('navbar.navbar_about')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('vr-tour')}}">@lang('navbar.navbar_vr')</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{route('factory')}}">Factory</a></li> --}}
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="woodCare" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('navbar.navbar_products') <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-menu @lang('settings.text_align')" dir="@lang('settings.direction')" aria-labelledby="woodCare">
                    <a class="dropdown-item" href="{{route('products')}}">@lang('navbar.navbar_products_all')</a>
                    <a class="dropdown-item" href="{{route('products', ['category','wood-flooring'])}}">@lang('navbar.navbar_products_hardwood_floor')</a>
                    <a class="dropdown-item" href="{{route('products', ['category','cabinets'])}}">@lang('navbar.navbar_products_kitchens')</a>
                    <a class="dropdown-item" href="{{route('products', ['category','outdoor'])}}">@lang('navbar.navbar_products_outdoor')</a>
                </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('events')}}">@lang('navbar.navbar_events')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('expert-hub')}}">@lang('navbar.navbar_expert')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">@lang('navbar.navbar_contact')</a></li>
                <li class="nav-item"><a class="text-white icon-button" href="javascript:;" data-toggle="modal" data-target="#getQuoteModal">@lang('navbar.navbar_quote')</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="getQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getQuoteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="getQuoteModalLabel">@lang('navbar.navbar_quote')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('contactGetQuote')}}" method="post">
          @csrf
          <label>@lang('navbar.navbar_quote_name')</label>
          <input class="form-control" placeholder="@lang('navbar.navbar_quote_name_ph')" type="text" name="name" required>
          <br>
          <label>@lang('navbar.navbar_quote_estimated_area')</label>
          <input class="form-control" placeholder="@lang('navbar.navbar_quote_estimated_area_ph')" type="number" name="area" required>
          <br>
          <label>@lang('navbar.navbar_quote_choose_product')</label>
          <select class="form-control" name="product_id" multiple>
            @forelse(getCategories() as $Category)
              <option value="{{$Category->title}}">{{$Category->title}}</option>
            @empty
            @endforelse
          </select>
          <br>
          <label>@lang('navbar.navbar_quote_contact_method')</label>
          <input class="form-control" placeholder="@lang('navbar.navbar_quote_choose_product_ph') " type="text" name="contact_method" required>
          <br>
          <label>@lang('navbar.navbar_quote_message')</label>
          <textarea class="form-control" placeholder="@lang('navbar.navbar_quote_message_ph')" name="message" rows="6" required></textarea>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger mr-1 ml-1" data-dismiss="modal">@lang('navbar.navbar_quote_close')</button>
            <button type="submit" class="btn btn-success">@lang('navbar.navbar_quote_message_btn')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="back-to-top"><i class="fas fa-chevron-up"></i></div>
@if(session()->has('success'))
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            </div>
        </div>
    </div>
    @endif
    @if ($errors->any())
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {!! $error . '<br>' !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
