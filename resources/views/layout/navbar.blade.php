<header class="position-relative w-100">
    <div class="upper-nav">
        <div class="row">
            <ul class="col-1 text-left upper-nav-social-media">
                <li><a href="https://facebook.com/thewoodcourt" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://instagram.com/thewoodcourt" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
            <ul class="col-11">
                <li><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/The+Wood+Court/@30.0454492,31.1967901,17z/data=!3m1!4b1!4m5!3m4!1s0x1458413486462911:0x945b12fc41fd6e8a!8m2!3d30.0454492!4d31.1989788?hl=en"
                    target="_blank"> 81 El-Hussein St, Dokki, Giza</a></li>
                <li><i class="fas fa-phone"></i> <a href="https://api.whatsapp.com/send?phone=201117571111">0111 757 1111</a></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:info@thewoodcourt.com">info@thewoodcourt.com</a></li>
                <li><i class="fas fa-clock"></i> <a>SAT-THU 10:00 - 22:00</a></li>
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="woodCare" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wood Care <i class="fas fa-chevron-down"></i></a>
                   <div class="dropdown-menu" aria-labelledby="woodCare">
                     <a class="dropdown-item" href="/events/how-to-take-care-of-your-wood-floors#a">Hardwood Floor</a>
                     <a class="dropdown-item" href="/events/how-to-take-care-of-your-wood-floors#b">Kitchens and Cabinets</a>
                     <a class="dropdown-item" href="/events/how-to-take-care-of-your-wood-floors#c">Outdoor Wood Flooring & Pergolas</a>
                   </div>
                 </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{route('factory')}}">Factory</a></li> --}}
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="woodCare" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products <i class="fas fa-chevron-down"></i></a>
                   <div class="dropdown-menu" aria-labelledby="woodCare">
                     <a class="dropdown-item" href="{{route('category.wood-flooring')}}">Hardwood Floor</a>
                     <a class="dropdown-item" href="{{route('category.cabinets')}}">Kitchens and Cabinets</a>
                     <a class="dropdown-item" href="{{route('category.outdoor')}}">Outdoor Wood Flooring & Pergolas</a>
                   </div>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="woodCare" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Expert Hub <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="woodCare">
                      <a class="dropdown-item" href="{{route('expert-hub')}}#FAQs">F.A.Qs</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#wood-care">Wood Care</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#installation-methods">Installation Methods</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#hardwood-flooring">Finish Techniques</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#engineered-hardwood">Wood Species</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#outdoor-woodcare">Technical Data Sheet</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#woodcare-kitchen">Engineered Wood Techniques</a>
                      <a class="dropdown-item" href="{{route('expert-hub')}}#choose-suitable">Top 3 Blog Articles and see more</a>
                    </div>
                  </li>
                <li class="nav-item"><a class="nav-link" href="{{route('events')}}">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
                @endauth
                {{-- <li class="nav-item"><a class="nav-link" href="#">Promotions Collection</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li> --}}
            </ul>
        </div>
    </nav>
</header>
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
