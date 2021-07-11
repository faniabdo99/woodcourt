@include('layout.header', [
  'PageTitle' => 'Contact us',
  'Description' => 'Available 24/7 , Our team member will be happy to serve you',
  'ogType' => 'Website'
])
<body class="text-right" dir="rtl">
    @include('layout.landing-nav')
    <!-- Page Content -->
    <section class="hero-section" id="arabic-landing-hero">
        <div class="dark-overlap">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-12">
                <h1>أفخم الأرضيات و المطابخ الخشبية</h1>
                <p class="mb-5">عروض مميزة و تقسيط على 60 شهر</p>
                <a class="icon-button" href="#">معرفة المزيد</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section id="our-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <img src="{{url('public')}}/images/landing-page/6.jpg" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <h2>منتجات داخلية (Indoors)</h2>
                    <p>كل الأرضيات الخشبية الطبيعية وألواحHDF   لتي ستحتاجها في مكان واحد. تصاميم كلاسيكية وحديثة وطبيعية وعتيقة ومعاصرة وحتى مخصصة.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h2>منتجات داخلية (Indoors)</h2>
                    <p>مع الظروف الاستثنائية الحالية، أدركنا جميعًا أهمية وقيمة مساحاتنا
 الخارجية الخاصة. استغل حديقتك أو شرفتك أو فناءك الخلفي أفضل استغلال.
 اسأل عن تصاميمنا الجديدة للبرجولات والأرضيات الخارجية.</p>
                </div>
                <div class="col-lg-5 col-12">
                    <img src="{{url('public')}}/images/landing-page/5.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-heading mb-5">معرض الصور</h2>
                    <div class="button-group filter-button-group">
                        <button data-filter="*">عرض الكل</button>
                        <button data-filter=".indoors">داخلي</button>
                        <button data-filter=".outdoors">خارجي</button>
                    </div>
                    <div class="grid">
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/1.jpg"><img src="{{url('public')}}/images/landing-page/thumb/1.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/2.jpg"><img src="{{url('public')}}/images/landing-page/thumb/2.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/3.jpg"><img src="{{url('public')}}/images/landing-page/thumb/3.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/4.jpg"><img src="{{url('public')}}/images/landing-page/thumb/4.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/5.jpg"><img src="{{url('public')}}/images/landing-page/thumb/5.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/6.jpg"><img src="{{url('public')}}/images/landing-page/thumb/6.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/7.jpg"><img src="{{url('public')}}/images/landing-page/thumb/7.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/8.jpg"><img src="{{url('public')}}/images/landing-page/thumb/8.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/9.jpg"><img src="{{url('public')}}/images/landing-page/thumb/9.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/10.jpg"><img src="{{url('public')}}/images/landing-page/thumb/10.jpg" alt=""></a></div>
                        <div class="grid-item indoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/11.jpg"><img src="{{url('public')}}/images/landing-page/thumb/11.jpg" alt=""></a></div>
                        <div class="grid-item outdoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/12.jpg"><img src="{{url('public')}}/images/landing-page/thumb/12.jpg" alt=""></a></div>
                        <div class="grid-item outdoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/13.jpg"><img src="{{url('public')}}/images/landing-page/thumb/13.jpg" alt=""></a></div>
                        <div class="grid-item outdoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/14.jpg"><img src="{{url('public')}}/images/landing-page/thumb/14.jpg" alt=""></a></div>
                        <div class="grid-item outdoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/15.jpg"><img src="{{url('public')}}/images/landing-page/thumb/15.jpg" alt=""></a></div>
                        <div class="grid-item outdoors"><a data-fancybox="gallery" href="{{url('public')}}/images/landing-page/16.jpeg"><img src="{{url('public')}}/images/landing-page/thumb/16.jpg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-woodcourt">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h2>عن وودكورت</h2>
                    <p>توفر شركة وودكورت إحساسا أنيقاً و طبيعياً في منتجاتها التي تتنوع ما بين
                        أرضيات خشبية , مطابخ, خشب خارجي للحدائق وسلالم و برجولات. يهتم مصممينا
                         بأدق  التفاصيل للحصول على أفضل نتائج ممكنة , كما نقوم بإنتاج تصاميم خاصة
                         بحسب طلبات العملاء.</p>
                    <p>تقوم وودكورت بتخديم عدد كبير من المشاريع التجارية و الممتلكات الشخصية منذ
                        عام 1979 نفخر بتقديمنا جودة عالية كما هو واضح في مراجعات العملاء على مدى
                        السنين</p>
                    <a class="icon-button" href="#">معرفة المزيد</a>
                    <a class="sub-button" href="#">عرض مراجعات المستخدمين</a>
                </div>
                <div class="col-lg-5 col-12">
                    <img src="{{url('public')}}/images/arabic-landing-about.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form" id="landing-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>تواصل معنا</h2>
                </div>
                <div class="col-lg-8 col-12">
                    <form class="woodcourt-form">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <label for="name">الاسم:</label>
                                <input type="text" placeholder="يرجى ادخال الاسم هنا" name="name" id="name" required>
                            </div>
                            <div class="col-lg-12 col-12">
                                <label for="name">البريد الإلكتروني:</label>
                                <input type="email" placeholder="يرجى ادخال بريدك الالكتروني هنا" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="message">الرسالة:</label>
                                <textarea name="message" id="message" rows="8" placeholder="أدخل رسالتك هنا"></textarea>
                                <button class="icon-button d-lg-inline d-block text-center w-100" data-target="{{route('contact.post')}}" id="submit-contact-form" type="submit"><i class="fas fa-paper-plane"></i> ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-12">
                    <a href="https://facebook.com/thewoodcourt" target="_blank">
                        <div class="contact-facebook contact-card">
                            <i class="fab fa-facebook-f"></i>
                            <p>@thewoodcourt</p>
                        </div>
                    </a>
                        <div class="contact-whatsapp contact-card">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <p>
                                    <a href="https://facebook.com/thewoodcourt" target="_blank">0111 757 1111</a>
                                    <br>
                                    <a href="https://facebook.com/thewoodcourt" target="_blank">0111 575 1111</a>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us-map d-flex w-100 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12 mb-5 mb-lg-0">
            <h2>صالة العرض</h2>
            <p>81 شارع الحسين , الدقي, الجيزة</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7004975044897!2d31.196790115115157!3d30.045449181881974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413486462911%3A0x945b12fc41fd6e8a!2sThe%20Wood%20Court!5e0!3m2!1sen!2seg!4v1605110935180!5m2!1sen!2seg"
              frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-lg-6 col-12">
            <h2>المصنع</h2>
            <p>القطعة 37/48, منطقة أبو رواش الصناعية, القاهرة, طريق الاسكندرية الصحراوي</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13808.774158433253!2d31.048808!3d30.088643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9009e055808b4566!2swoodcourt!5e0!3m2!1sen!2seg!4v1605790659564!5m2!1sen!2seg" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <footer id="landing-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center">جميع الحقوق محفوظة , ووكوردت 2021</p>
                </div>
            </div>
        </div>
    </footer>
    @include('layout.scripts')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        var $grid = $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
        $('.filter-button-group').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    </script>
</body>
</html>
