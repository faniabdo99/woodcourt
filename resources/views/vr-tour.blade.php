@include('layout.header')
<html>
<body>
    @include('layout.navbar')
        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="d-flex justify-content-center">
                            <h1 class="static-h1">SHIFA VR TOUR</h1>
                    </div>
                </div>
            </div>
        </div>
    <section class="container p-50">
        <div class="flex-column justify-items-center align-items-center d-flex">
            <h3>Visit us, While you in your home!</h3>
            <p class="sample-text">We were able to use the 360 photography to our favour in a unique way! You can see our showroom from your smartphone or computer and check out everything we have ahead!</p>
            <iframe  class="w-100" height='500' src='https://my.matterport.com/show/?m=trid4Kk6SPS' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>
        </div>
    </section>
    @include('layout.footer')
    @include('layout.scripts')
</body>
</html>
