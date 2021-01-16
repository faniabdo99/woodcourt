@include('layout.header', ['PageTitle' => 'Events'])
<body>
    @include('layout.navbar')
    <!-- Page Content -->
    <section class="hero-section" id="events-hero">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-section-content">
                        <h1 class="text-white">Our Events</h1>
                        <p class="text-white">Kitchen, Floor ... and More</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events-list">
      <div class="container">
        <div class="row">
          <div class="col-12">
          @forelse ($AllEvents as $Event)
            <div class="single-event mb-4">
              <div class="image-container">
                <img src="{{$Event->imageSrc}}" alt="{{$Event->title}}">
              </div>
              <div class="content-container">
                <h2>{{$Event->title}}</h2>
                <span class="metabox d-block mb-3">
                  <i class="fas fa-calendar"></i> {{$Event->created_at->format('d, M Y')}}
                </span>
                <p>{{$Event->description}}</p>
                <a class="icon-button" href="{{route('events.single',$Event->slug)}}"><i class="fas fa-plus"></i> View More</a>
              </div>
            </div>
          @empty
          @endforelse
          </div>
        </div>
      </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
