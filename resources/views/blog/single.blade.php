@include('layout.header', [
  'PageTitle' => $TheArticle->title,
  'Description' => $TheArticle->description,
  'ogImage' => $TheArticle->imageSrc,
  'ogType' => 'Website'
])
<body>
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
              <div id="disqus_thread"></div>
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
    <script>
      /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
      /*
      var disqus_config = function () {
      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */
      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://the-wood-court.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
      })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    @include('layout.footer')
</body>
</html>