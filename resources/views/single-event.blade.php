@include('layout.header', ['PageTitle' => 'Contact Us'])
<body>
    @include('layout.navbar')
    <section class="single-event-article">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <h1 class="mb-2">{{$TheEvent->title}}</h1>
            <span class="metabox d-block mb-3">
              <i class="fas fa-calendar"></i> {{$TheEvent->created_at->format('d, M Y')}}
            </span>
            <p class="description">{{$TheEvent->description}}</p>
            <img class="w-100 mb-3" src="{{$TheEvent->imageSrc}}" alt="{{$TheEvent->title}}">
            <div class="event-content">
              {!! $TheEvent->content !!}
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="single-event-article-sidebar" id="latest-events">
              <h2>Latest Events</h2>
              <ul>
                <li><a href="#">The Event title is herer boys</a></li>
                <li><a href="#">The Event title is herer boys</a></li>
                <li><a href="#">The Event title is herer boys</a></li>
                <li><a href="#">The Event title is herer boys</a></li>
                <li><a href="#">The Event title is herer boys</a></li>
              </ul>
            </div>
            <div class="single-event-article-sidebar" id="keep-in-touch">
              <h2>Keep in Touch</h2>
                <ul>
                  <li class="facebook-li"><a href="#" target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a></li>
                  <li class="whatsapp-li"><a href="#" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                  <li class="email-li"><a href="#" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
