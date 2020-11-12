<header class="fixed-top">
    <div class="upper-nav">
        <ul>
            <li><i class="fas fa-map-marker"></i> <a href="https://www.google.com/maps/place/The+Wood+Court/@30.0454492,31.1967901,17z/data=!3m1!4b1!4m5!3m4!1s0x1458413486462911:0x945b12fc41fd6e8a!8m2!3d30.0454492!4d31.1989788?hl=en" target="_blank"> 81 El-Hussein St, Dokki, Giza</a></li>
            <li><i class="fas fa-phone"></i> <a href="https://api.whatsapp.com/send?phone=201117571111">0111 757 1111</a></li>
            <li><i class="fas fa-envelope"></i> <a href="mailto:info@thewoodcourt.com">info@thewoodcourt.com</a></li>
        </ul>
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
                <li class="nav-item"><a class="nav-link" href="#">Promotions Collection</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('events')}}">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('products')}}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li> --}}
            </ul>
        </div>
    </nav>
</header>

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
