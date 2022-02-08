@include('layout.header', [
  'PageTitle' => 'Events',
  'Description' => 'View the latest events by The Wood Court',
  'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <!-- Page Content -->
    <section class="hero-section" id="events-hero">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-section-content">
                        <h1 class="text-white">Our Blog</h1>
                        <p class="text-white">Pergolas, Floor ... and More</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events-list">
      <div class="container">
        <div class="row">
          <div class="col-12">
          @forelse ($AllArticles as $Article)
            <div class="single-event mb-4">
              <div class="image-container">
                <img src="{{$Article->imageSrc}}" alt="{{$Article->title}}">
              </div>
              <div class="content-container">
                <h2>{{$Article->title}}</h2>
                <span class="metabox d-block mb-3">
                  <i class="fas fa-calendar"></i> {{$Article->created_at->format('d, M Y')}}
                </span>
                <p>{{$Article->description}}</p>
                <a class="icon-button" href="{{route('blog.single',$Article->slug)}}"><i class="fas fa-plus"></i> View More</a>
              </div>
            </div>
          @empty
             <p>There is no articles yet, Stay tunde!</p>
          @endforelse
          </div>
        </div>
      </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
