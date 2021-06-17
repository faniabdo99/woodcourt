@include('layout.header')
<body>
    @include('layout.navbar')
        <section class=" p-50 error-page notfound">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mb-5">404 - The Page Can't Be Found</h1>
                            <h3>The page you are looking for is not available on this url, This could happened by a broken link or deleted content</h3>
                        </div>
                        <div class="slider_text mt-3 mb-5">
                        </div>
                        <h3 class="mt-3">You Can Go To :</h3>
                        <div class="d-flex ">
                            <ul class="quick-links d-flex flex-column mr-5">
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('about')}}" target="_blank">About Us</a></li>
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('contact')}}" target="_blank">Contact Us</a></li>
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('factory')}}" target="_blank">Our Factory</a></li>
                            </ul>
                            <ul class="quick-links d-flex flex-column">
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('home')}}" target="_blank">Homepage</a></li>
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('vr-tour')}}" target="_blank">VR Tour</a></li>
                                <li class="mt-1 mb-4"><a class="icon-button d-lg-inline d-block text-center mx-auto" href="{{route('expert-hub')}}" target="_blank">Expert Hub</a></li>
                            </ul>
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

