@include('layout.header', [
  'PageTitle' => 'Our Factory',
  'Description' => 'See how the beauty is made',
  'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="our-factory-hero-section">
        <div class="dark-overlap">
            <h1>Our Factory</h1>
            <p>See how the beauty is made</p>
        </div>
    </section>
    <section class="about-us-description" id="homepage-aboutus-section">
        <img id="homepage-about-artistic-touch" src="{{url('public')}}/images/wood-big-half.png" alt="wood-big-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>Since 1965</h2>
                    <p>The Wood Court operates from a 6200-square meter factory in Abo Rawash, one of the biggest industrial zones in Egypt. With over 200 technicians and engineers on board, we are utilizing the latest technology in wood flooring manufacturing, finishing and installation with a dedicated after-sales team. We are heavily investing our time and resources to produce the highest quality products using diamond tool equipment, laser-cutting machines, and ultraviolet finishing lines. This enables us to transform a raw piece of wood into an artistic masterpiece.</p>
                    <p class="mb-3">We pride ourselves in being able to create our own products, manufactured to European standards , transforming raw wood to floors, kitchens, pergolas, and other amazing creations.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/factory/standing-worker.jpg" alt="WoodCourt Factory Worker">
                </div>
            </div>
        </div>
    </section>

    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
