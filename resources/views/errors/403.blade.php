@include('layout.header')
<body>
    @include('layout.navbar')
        <section class=" p-50 error-page notfound">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="d-block not-found-container">
                            <h1 class="mb-5 text-center">Oops | Access Denied </h1>
                            <div class="not-found d-block">
                                <h1>
                                    <span>4</span>
                                    <span>0</span>
                                    <span>3</span>
                                </h1>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <h4 class="mt-3">Try these other helpful links</h4>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <ul class="quick-links d-flex">
                                    <li class="mt-1"><a class="" href="{{route('home')}}">Homepage</a></li>
                                    <li class="mt-1 ml-3  "><a class="" href="{{route('about')}}">About Us</a></li>
                                    <li class="mt-1 ml-3  "><a class="" href="{{route('factory')}}">Our Factory</a></li>
                                </ul>
                                <ul class="quick-links d-flex">
                                    <li class=""><a class="" href="{{route('contact')}}">Contact Us</a></li>
                                    <li class=" ml-3  "><a class="" href="{{route('vr-tour')}}">VR Tour</a></li>
                                    <li class=" ml-3  "><a class="" href="{{route('expert-hub')}}">Expert Hub</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>

    </html>
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>

