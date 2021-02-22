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
                    <h2>Since 1979</h2>
                    <p>The Wood Court operates from a 6200-square meter factory in Abo Rawash, one of the biggest industrial zones in Egypt. With over 200 technicians and engineers on board, we are utilizing the latest technology in wood flooring manufacturing, finishing and installation with a dedicated after-sales team. We are heavily investing our time and resources to produce the highest quality products using diamond tool equipment, laser-cutting machines, and ultraviolet finishing lines. This enables us to transform a raw piece of wood into an artistic masterpiece.</p>
                    <p class="mb-3">We pride ourselves in being able to create our own products, manufactured to European standards , transforming raw wood to floors, kitchens, pergolas, and other amazing creations.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/factory/standing-worker.jpg" alt="WoodCourt Factory Worker">
                </div>
            </div>
        </div>
    </section>
    <section class="timeline">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Milestones & History</h2>
                    <ul>
                        <li>
                            <div>
                                <time>1979</time> Started our business with very low budget equipment on a-300 meters workshop.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>1984</time> Purchased new types of equipment from SCM Group, For better quality in our new extensions.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>1992</time> Expanding our working area approximately to the double.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2000</time> Moving our factory to a bigger one in abo rawash industrial zone, Giza.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2002</time> Replacing our machines and equipment with fully automated production lines.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2006</time> Purchasing new production line to produce geometric wooden tiles.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2009</time> Expanding our working area in abo rawash to approximately 6000+ square meters.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2014</time> Purchasing our brand new ultraviolet curing finishing line from Gbrdina, Italy to produce pre-finished engineered floors.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2015</time> Setting up a new production line for pergolas and outdoor units.
                            </div>
                        </li>
                        <li>
                            <div>
                                <time>2018</time> We signed a cooperation contract with "Laregina For Wood Industries" for doors & cabients products "Kitchens, Dressing Rooms, Sink Units".
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-videos-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-5">Our Videos</h2>
                    <ul class="owl-carousel owl-theme three-items-carousel">
                        <li class="item">
                            <div class="video-background-homepage" id="video-one">
                                <img src="{{url('public')}}/images/video-bg-2.jpg" title="Video Thumb" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-2"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" id="video-two">
                                <img src="{{url('public')}}/images/kitchens-video.jpg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-1"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                          <div class="video-background-homepage" id="video-three">
                              <img src="{{url('public')}}/images/1.jpeg" alt="Video Thumb">
                              <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-3"> <i class="fas fa-play-circle fa-5x"></i></a>
                          </div>
                      </li>
                      <li class="item">
                        <div class="video-background-homepage" id="video-three">
                            <img src="{{url('public')}}/images/2.jpeg" alt="Video Thumb">
                            <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-4"> <i class="fas fa-play-circle fa-5x"></i></a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="video-background-homepage" id="video-three">
                            <img src="{{url('public')}}/images/3.jpeg" alt="Video Thumb">
                            <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-5"> <i class="fas fa-play-circle fa-5x"></i></a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="video-background-homepage" id="video-three">
                            <img src="{{url('public')}}/images/4.jpeg" alt="Video Thumb">
                            <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-6"> <i class="fas fa-play-circle fa-5x"></i></a>
                        </div>
                    </li>
                    <li class="item">
                        <div class="video-background-homepage" id="video-three">
                            <img src="{{url('public')}}/images/5.jpeg" alt="Video Thumb">
                            <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-7"> <i class="fas fa-play-circle fa-5x"></i></a>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
      </section>

    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
