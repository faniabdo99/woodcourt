@include('layout.header', ['PageTitle' => 'Contact Us'])

<body>
    @include('layout.navbar')
    <!-- Page Content -->
    <section class="hero-section" id="contact-us-hero">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 hero-section-content">
                        <h1 class="text-white">Contact Us</h1>
                        <p class="text-white">The Leaders in Wood Industry</p>
                    </div>
                    <div class="col-12 col-lg-6 hero-section-content">
                      <div class="social-media-hero">
                        <h3>Contact Us</h3>
                        <p>Find Us On Social Media</p>
                        <ul>
                          <li class="facebook-li"><a href="#" target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a></li>
                          <li class="whatsapp-li"><a href="#" target="_blank "><i class="fab fa-whatsapp"></i> <span>+20 115 1411 867</span></a></li>
                          <li class="email-li"><a href="#" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <h2>Contact Information</h2>
            <p>Available 24/7 , Our team member will be happy to serve you.</p>
            <ul class="contact-information-list">
              <li>
                <i class="fas fa-envelope"></i>
                <span>
                  <a href="mailto:info@thewoodcourt.com">info@thewoodcourt.com</a>
                  <a href="mailto:admin@thewoodcourt.com">admin@thewoodcourt.com</a>
                </span>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <span>
                  <a href="mailto:info@thewoodcourt.com">0020 1154 67454</a>
                  <a href="mailto:info@thewoodcourt.com">0020 1154 67454</a>
                </span>
              </li>
              <li>
                <i class="fas fa-map-marker"></i>
                <span>
                  <a href="mailto:info@thewoodcourt.com">Map Location Goes Here Click to go to the Map</a>
                </span>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-12">
            <form class="" action="#" method="post">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <label for="name">Name:</label>
                  <input type="text" placeholder="Enter Your Name Here" name="name" id="name" required >
                </div>
                <div class="col-lg-6 col-12">
                  <label for="name">Email:</label>
                  <input type="email" placeholder="Enter Your Name Here" name="email" id="email" required >
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label for="message">Message:</label>
                  <textarea name="message" id="message" rows="8" placeholder="Enter your message here"></textarea>
                  <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
