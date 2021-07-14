<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPPW7VJ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="position-relative w-100">
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">عن وودكورت</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">منتجاتنا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a></li>
            </ul>
        </div>
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ url('public') }}/images/logo-blue.png" alt="The Wood Court Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="getQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getQuoteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getQuoteModalLabel">Get a Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contactGetQuote') }}" method="post">
                    @csrf
                    <label>Name</label>
                    <input class="form-control" placeholder="Please Enter Your Name" type="text" name="name" required>
                    <br>
                    <label>Estimated Area (m<sup>2</sup>)</label>
                    <input class="form-control" placeholder="Please Enter Estimted Area" type="number" name="area"
                        required>
                    <br>
                    <label>Choose Product(s):</label>
                    <select class="form-control" name="product_id" multiple>
                        @forelse(getCategories() as $Category)
                            <option value="{{ $Category->title }}">{{ $Category->title }}</option>
                        @empty
                        @endforelse
                    </select>
                    <br>
                    <label>Contact Method</label>
                    <input class="form-control" placeholder="Contact Method (Email , Phone Number) " type="text"
                        name="contact_method" required>
                    <br>
                    <label>Message</label>
                    <textarea class="form-control" placeholder="Please Enter Your Message" name="message" rows="6"
                        required></textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="back-to-top"><i class="fas fa-chevron-up"></i></div>
@if (session()->has('success'))
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="alert alert-success">
                    {{ session('success') }}
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
