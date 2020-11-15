@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h1>About Us</h1>
                <p class="mb-5">The Leaders in wood industry</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="about-us-description">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>We are the Wood Court</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="icon-button"><i class="fas fa-star"></i>About us</a>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="the alt here">
                </div>
            </div>

        </div>
    </section>
    <section class="testimonials-section" id="about-us-testimonials">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>What People are Saying</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme full-width-carousel">
                  <div class="row slide">
                    <div class="col-lg-4 col-12">
                      <img class="user-image" src="https://placehold.it/200x200" alt="person name">
                      <h4 class="user-name">person name goes here</h4>
                      <p class="user-job-title">Digital Marketer Special Guy some long stuff here</p>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testimonial-content">
                          <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                          <h3>This Product is Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                    </div>
                  </div>
                  <div class="row slide">
                    <div class="col-lg-4 col-12">
                      <img class="user-image" src="https://placehold.it/200x200" alt="person name">
                      <h4 class="user-name">person name goes here</h4>
                      <p class="user-job-title">Digital Marketer Special Guy some long stuff here</p>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testimonial-content">
                          <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                          <h3>This Product is Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                    </div>
                  </div>
                  <div class="row slide">
                    <div class="col-lg-4 col-12">
                      <img class="user-image" src="https://placehold.it/200x200" alt="person name">
                      <h4 class="user-name">person name goes here</h4>
                      <p class="user-job-title">Digital Marketer Special Guy some long stuff here</p>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testimonial-content">
                          <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                          <h3>This Product is Awesome!</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logo-parade" id="about-us-logo-parade">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Our Clients</h2>
            <ul class="owl-carousel owl-theme multi-items-carousel">
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
              <li class="item"><img src="https://placehold.it/150x150" alt="" title="" /></li>
            </ul>
          </div>
        </div>
      </div>

    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
