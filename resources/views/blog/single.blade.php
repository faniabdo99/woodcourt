@include('layout.header', [
  'PageTitle' => $TheArticle->title,
  'Description' => $TheArticle->description,
  'ogImage' => $TheArticle->imageSrc,
  'ogType' => 'Website'
])
<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=1265405060460063&autoLogAppEvents=1" nonce="2rvG1ypI"></script>
    @include('layout.navbar')
    <section class="single-event-article">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <h1 class="mb-2">{{$TheArticle->title}}</h1>
            <span class="metabox d-block mb-3">
              <i class="fas fa-calendar"></i> {{$TheArticle->created_at->format('d, M Y')}}
            </span>
            <p class="description">{{$TheArticle->description}}</p>
            <img class="w-100 mb-3" src="{{$TheArticle->imageSrc}}" alt="{{$TheArticle->title}}">
            <div class="event-content">
              {!! $TheArticle->content !!}
              <div class="fb-comments" data-href="https://thewoodcourt.com/blog" data-width="100%" data-numposts="20"></div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="single-event-article-sidebar" id="latest-events">
              <h2>Latest Articles</h2>
              <ul>
                @forelse ($LatestArticles as $Article)
                <li><a href="{{route('blog.single', $Article->slug)}}">{{$Article->title}}</a></li>
                @empty
                  <li>Stay Tuned for Our Latest Articles!</li>
                @endforelse
              </ul>
            </div>
            <div class="single-event-article-sidebar" id="keep-in-touch">
              <h2>Keep in Touch</h2>
                <ul>
                  <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a></li>
                  <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>0111 757 1111</span></a></li>
                  <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                  <li class="youtube-li"><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank "><i class="fab fa-youtube"></i> <span>The Wood Court</span></a></li>
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