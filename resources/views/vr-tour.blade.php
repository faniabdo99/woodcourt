@include('layout.header')
<html>
<body>
    @include('layout.navbar')
        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="d-flex justify-content-center mt-4">
                            <h1 class="static-h1">The Wood Court VR Tour</h1>
                    </div>
                </div>
            </div>
        </div>
    <section class="container p-50">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="d-flex flex-column justify-content-center mt-4">
                        <h3>Visit us, While you in your home!</h3>
                        <p class="sample-text">We were able to use the 360 photography to our favour in a unique way! You can see our showroom from your smartphone or computer and check out everything we have ahead!</p>
                        <div class=" mt-3">
                            <a class="icon-button text-center mx-auto align-self-end vr-btn my-2 w-100 " href="https://www.google.com/maps?ll=30.045257,31.199067&z=15&t=m&hl=en&gl=EG&mapclient=embed&cid=10690159015142190730" target="_blank">View Our Showroom Location</a>
                            <a class="icon-button bg-light text-dark text-center mx-auto align-self-end vr-btn my-2 w-100" href="https://my.matterport.com/show/?m=trid4Kk6SPS" target="_blank">View in Full Screen</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex justify-content-center mt-4">
                    <iframe  class="w-100" height='500' src='https://my.matterport.com/show/?m=trid4Kk6SPS' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>
                </div>
            </div>
        </div>

    </section>
    @include('layout.footer')
    @include('layout.scripts')
</body>
</html>
