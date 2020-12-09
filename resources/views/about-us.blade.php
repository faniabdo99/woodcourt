@include('layout.header', ['PageTitle' => 'About us'])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>About Us</h1>
                        <p class="mb-5">The Leaders in Wood Industry</p>
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
                    <p class="mb-3">The Wood Court provides stylish, warm and natural feels all combined together in the perfect design execution. </p>
                    <p class="mb-3">We launched our business in 1979 as a small workshop working to a total area of less than 300 square meters, in Sayeda Zainab district in Old Cairo, as the first specialized wood flooring company in Egypt. Within a
                        few years, the founder Mr. Adel Zahran succeeded in positioning The Wood Court as the market leader in wood flooring industry. Over the years, by means of hardwork and relentless innovation, The Wood Court has become the main
                        supplier for most of projects all over Egypt.
                    </p>
                    <p class="mb-3">In 2015 we installed our production line for pergolas and outdoor units with new modern designs, colours, and finishing. This was done in addition to our cooperation with our sister company (Laregina) to produce
                        kitchens, dressing rooms and sink units.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="the alt here">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="mb-3">Now in 2020 we are operating from a 6200-square meter factory in Abo Rawash, one of the biggest industrial zones in Egypt, a 400-square meter showroom in Dokki. With over 200 technicians and engineers on board, we
                        are utilizing the latest technology in wood flooring manufacturing, finishing and installation with a dedicated after-sales team.</p>
                    <p class="mb-3">We are heavily investing our time and resources to produce the highest quality products using diamond tool equipment, laser-cutting machines, and ultraviolet finishing lines. This enables us to transform a raw
                        piece of wood into an artistic masterpiece.</p>
                    <a href="{{route('contact')}}" class="icon-button"><i class="fas fa-star"></i>Contact Us</a>
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
                    <time>2018</time> We signed a cooperation contract with "Laregina For Wood Industries" for doors & cabients products "Kitchens, Dressing Rooms, Shower Units".
                </div>
            </li>
        </ul>
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
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/1656190_10202827701874809_2086136297_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGaCL7bffawea6qicjZt7bPssM1MhgU1CCywzUyGBTUIJms3asgl_fod2bIGJEAVM1vp-KfeFhUzCl-RovzRNh_&_nc_ohc=2hkg4DRfdsEAX8MgvtO&_nc_ht=scontent.fcai19-2.fna&oh=b1aa60e2ff2958cd3346c9dc4a2cd9fd&oe=5FF3E24F"
                              alt="Nermeen Farouk Gamea">
                            <h4 class="user-name">Nermeen Farouk Gamea</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>This a company you can trust</h3>
                                <p>From quality of product, punctuality in timing an excellent service and most of all the care for thier customers. Very good value for money and professional advices that can help you in making good decisions for
                                    your home within your budget</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=griOnXIMKHIAX_aSmd7&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=46adb4f80f13147af56ac65356dd21dd&oe=5FE6C96E"
                              alt="Ahamd Elsayeed">
                            <h4 class="user-name">Ahmed Elsayeed</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>Understanding for customer requirements</h3>
                                <p>The Wood Court is a trusted and professional company
                                    Understanding for customer requirements
                                    It was great to meet and know most of the Team who work their
                                    Special thanks to Ayman and Ahmed Zahran for being so keen to deliver the best quality to ensure customer satisfaction</p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-12">
                            <img class="user-image"
                              src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/118886354_10164437672405012_8425323246923185985_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEd_NjeInee9KCPzguoMCFRbG2gr-QiG35sbaCv5CIbfmS4YpuwFevi0YcU6ZHUTJaa4LJk_XN603Id5DIFE2e4&_nc_ohc=kTTfGfx9pNwAX-82tsW&_nc_ht=scontent.fcai19-2.fna&oh=b08cd2f742cefdb96ce3bf4912b0f7f2&oe=5FF43AF7"
                              alt="Nour El Hoda Moghazy">
                            <h4 class="user-name">Nour El Hoda Moghazy</h4>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="testimonial-content">
                                <span class="small-quote-icon"><i class="fas fa-quote-right"></i></span>
                                <h3>Thank You!</h3>
                                <p>We would like to thank Wood court for their professionalism, accountability and high quality outcome. We are glad that we had the opportunity to deal with them in implementing our wonderful staircase. Thanx a lot 🙂
                                </p>
                            </div>
                            <span class="big-quote-icon"><i class="fas fa-quote-left"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logo-parade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>Our Clients</h2>
                    <ul class="owl-carousel owl-theme multi-items-carousel">
                        <img class="item" src="{{url('public')}}/images/partners/arabcont.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/cook-club.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/four-seasons.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/hassan-allam.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/hilton.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/mobica.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/orascom.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/sheraton.png" alt="" title="" />
                        <img class="item" src="{{url('public')}}/images/partners/siac.png" alt="" title="" />
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    <script type="text/javascript">
        (function() {
            'use strict';
            // define variables
            var items = document.querySelectorAll(".timeline li");
            // check if an element is in viewport
            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
            function callbackFunc() {
                for (var i = 0; i < items.length; i++) {
                    if (isElementInViewport(items[i])) {
                        items[i].classList.add("in-view");
                    }
                }
            }
            // listen for events
            window.addEventListener("load", callbackFunc);
            window.addEventListener("resize", callbackFunc);
            window.addEventListener("scroll", callbackFunc);
        })();
    </script>
    @include('layout.footer')
</body>

</html>
