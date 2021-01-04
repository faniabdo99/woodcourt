@include('layout.header', ['PageTitle' => 'About us'])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>About Us</h1>
                        <p class="mb-5">Kitchen, Floor ... and More</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-description">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>We are <span><img height="50" src="{{url('public')}}/images/logo-black.png"></span></h2>
                    <p class="mb-3">The Wood Court provides stylish, warm and natural feels all combined together in the perfect design execution. </p>
                    <p class="mb-3">We launched our business in 1979 as a small workshop working to a total area of less than 300 square meters, in Sayeda Zainab district in Old Cairo, as the first specialized wood flooring company in Egypt. Within a
                        few years, the founder Mr. Adel Zahran succeeded in positioning The Wood Court as the market leader in wood flooring industry. Over the years, by means of hardwork and relentless innovation, The Wood Court has become the main
                        supplier for most of projects all over Egypt.
                    </p>
                    <p class="mb-3">In 2015 we installed our production line for pergolas and outdoor units with new modern designs, colours, and finishing. This was done in addition to our cooperation with our sister company (Laregina) to produce
                        kitchens, dressing rooms and sink units.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image" src="{{url('public')}}/images/about-us-descrition.jpg" alt="We are the wood court">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="mb-3">Now in 2020 we are operating from a 6200-square meter factory in Abo Rawash, one of the biggest industrial zones in Egypt, a 400-square meter showroom in Dokki. With over 200 technicians and engineers on board, we
                        are utilizing the latest technology in wood flooring manufacturing, finishing and installation with a dedicated after-sales team.</p>
                    <p class="mb-3">We are heavily investing our time and resources to produce the highest quality products using diamond tool equipment, laser-cutting machines, and ultraviolet finishing lines. This enables us to transform a raw
                        piece of wood into an artistic masterpiece.</p>
                    <a href="{{route('contact')}}" class="icon-button d-lg-inline d-block text-center"><i class="fas fa-phone"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <section class="our-achievements">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-heading">Our Achievements</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="1500" data-speed="3000"></span>+<br>
                                Premade<br>Designs
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="3000" data-speed="3000"></span>+<br>
                                Customers & Projects
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-chart-area"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="2000" data-speed="3000"></span>+<br>
                                Square Meter<br>Per Year
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item">
                            <div class="icon-container">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="60" data-speed="3000"></span>+<br>
                                Trained Workers &<br>Engineers
                            </div>
                        </div>
                    </div>
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
    <section class="testimonials-section" id="about-us-testimonials">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2>What People are Saying</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/1656190_10202827701874809_2086136297_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGaCL7bffawea6qicjZt7bPssM1MhgU1CCywzUyGBTUIJms3asgl_fod2bIGJEAVM1vp-KfeFhUzCl-RovzRNh_&_nc_ohc=2hkg4DRfdsEAX8MgvtO&_nc_ht=scontent.fcai19-2.fna&oh=b1aa60e2ff2958cd3346c9dc4a2cd9fd&oe=5FF3E24F"
                                  alt="Nermeen Farouk Gamea">
                                <h4>Nermeen Farouk Gamea</h4>
                                <p><b>This a company you can trust</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    From quality of product, punctuality in timing an excellent service and most of all the care for thier customers. Very good value for money and professional advices that can help you in making good decisions for
                                    your home within your budget
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/nermeen.gamea/posts/10217173194183151" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-1/p200x200/44939937_10156744823066197_8268768276318781440_o.jpg?_nc_cat=101&ccb=2&_nc_sid=7206a8&_nc_eui2=AeFtfuZpQwFnPzuGj_LHm0pf1ImCAuL3REvUiYIC4vdES6Pv3aquD0D41qzie7n2zH2yvNQbJ12PucabW8riJMdw&_nc_ohc=9uwcM0_GvrYAX8fDc_Z&_nc_ht=scontent.fcai19-2.fna&tp=6&oh=25eca657db9c59bc1e1d326de0e71544&oe=6000636F"
                                  alt="Mostafa Morsy">
                                <h4 class="user-name">Mostafa Morsy</h4>
                                <p><b>Excellent</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    excellent excution for the staircase, was amazed by their fast preformance and work ethics. personally recommend them to everyone.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mostafa.morsy.777/posts/10156559288731197" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/118886354_10164437672405012_8425323246923185985_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEd_NjeInee9KCPzguoMCFRbG2gr-QiG35sbaCv5CIbfmS4YpuwFevi0YcU6ZHUTJaa4LJk_XN603Id5DIFE2e4&_nc_ohc=kTTfGfx9pNwAX-82tsW&_nc_ht=scontent.fcai19-2.fna&oh=b08cd2f742cefdb96ce3bf4912b0f7f2&oe=5FF43AF7"
                                  alt="Nour El Hoda Moghazy">
                                <h4 class="user-name">Nour El Hoda Moghazy</h4>
                                <p><b>Thank You!</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    We would like to thank Wood court for their professionalism, accountability and high quality outcome. We are glad that we had the opportunity to deal with them in implementing our wonderful staircase. Thanx a lot
                                    🙂
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/nour.e.moghazy/posts/10160800194125012" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/42769399_10160789597560705_1908439254501949440_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHt_60BwNqQ0Feu6OhghsHq6Ufo_PUIbxLpR-j89QhvEuBzFH2dZ8d0cnBIBtdqhfEvEkKgAtotgf4kXe7sZxLo&_nc_ohc=8GNmZF9lfgEAX9WF1li&_nc_ht=scontent.fcai19-2.fna&oh=2f844594a54776a67bad430a3b149c64&oe=5FFF5BF2"
                                  alt="Mahmoud Yassin">
                                <h4 class="user-name">Mahmoud Yassin</h4>
                                <p><b>Highly recommended</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Great work and craftsmanship, high quality, excellent installation and customer service. The whole process was smooth and professional. I would like to thank Eng. Ayman and the whole team for the lovely
                                    experience.Great work. Highly recommended.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mahmoud.yassin.355/posts/10164069054960705" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t31.0-1/c47.14.173.172a/p200x200/172356_10150150320216508_6180317_o.jpg?_nc_cat=107&ccb=2&_nc_sid=7206a8&_nc_eui2=AeF714H-4-VnSs78kBgzLtV5K7M7johAC20rszuOiEALbURgI9XPxwBGQ5tH_lvs--aSOBOBYLQAU6HoQivs-E6p&_nc_ohc=uOHOXViAAnMAX_EwJ9x&_nc_ht=scontent.fcai19-2.fna&tp=27&oh=4432765fab302244fb12e2fab7ed3d84&oe=60163F6E"
                                  alt="Ahamd Elsaeed">
                                <h4>Ahmed Elsaeed</h4>
                                <p><b>Understanding for customer requirements</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    The Wood Court is a trusted and professional company Understanding for customer requirements It was great to meet and know most of the Team who work their Special thanks to Ayman and Ahmed Zahran for being so keen
                                    to deliver the best quality to ensure customer satisfaction
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ahmed.elsaeed.1293/posts/10156688368036508" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image"
                                  src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/12278773_890299487691675_91894851637444196_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeH3Ni5rcYx80WbjUHEaiCBu_I6zWf9-cET8jrNZ_35wRJ9C0v7eDgvUlI25Igz9PawxyU1rlxarmt4TH1zIbpd7&_nc_ohc=BXrU_ylJy4EAX84eV8k&_nc_ht=scontent.fcai19-2.fna&oh=b7a548bcffe949c9f3bc1b94cfe33a74&oe=5FFE09E1"
                                  alt="Mohamed Mahdy">
                                <h4 class="user-name">Mohamed Mahdy</h4>
                                <p><b>One of best companies that you can deal with</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    The wood court is one of best companies that you can deal with. Quality, accountability and dedication for their customers. If you wanna buy wooden floor, then you should visit the wood court. They're doing great
                                    job.... and special thanks to Eng. Ayman..
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.mahdy.543/posts/1742895592432056" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/121068749_2758247604451140_7307803230761064677_n.jpg?_nc_cat=102&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEq1Jj3d9zaY9UtCvy_0yj6VS3XQqB_75FVLddCoH_vkSFF_w28Jz5-RJHJhLZ3hqAks-3F8VK1gysUCpO6RV_0&_nc_ohc=HBaC26iOWbwAX_n_dGl&_nc_ht=scontent.fcai19-2.fna&oh=1b8f653145d64e99b2cc9f3a427a0980&oe=5FFF18BB"
                                alt="Jana Zahran">
                              <h4 class="user-name">Jana Zahran</h4>
                                <p><b>Really good prices and many many many designs</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Really good prices and many many many designs, I did not find such beautiful designs any where else
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/jana.zahran.16/posts/2221871918088714" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/22852120_10155164399803865_3547450112766542621_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeFyXzJvhEWlOrRZmtHpE7dlqBcm-S5JKXeoFyb5LkkpdwHQa9aYXuT_N8r3_Db4tmv56N-hEDGNWjp5UZWAkto0&_nc_ohc=4Cp0NKLKKLkAX-SiBzA&_nc_ht=scontent.fcai19-2.fna&oh=5f24c4b016d24fc759de2ee4e6fec692&oe=5FFF778C"
                                alt="Mohamed Sheesh">
                              <h4 class="user-name">Mohamed Sheesh</h4>
                                <p><b>Dealing with The Wood Court has been the only bright</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Dealing with The wood court has been the only bright, fair and hassle free part of decorating my apartment. Eng Ayman has been honest straightforward and he delivered what he promised. I strongly recommend his
                                    technical expertise and high quality products to everyone.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/MoeSheesh/posts/10157866238008865" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent.fcai19-2.fna.fbcdn.net/v/t1.0-9/13754219_281356118890899_2735041485464602213_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGGCxwT4SZFkNtYNE-TcmbcbrWk3zcldOZutaTfNyV05lpP4eFBoubYKjTgbMn94JZrHevU23guulzEqGYPyv0A&_nc_ohc=WwX-V9Zmh4oAX9VCRNP&_nc_ht=scontent.fcai19-2.fna&oh=dd6292455073efe8780b83a891ca1d68&oe=600001D9"
                                alt="Aly El Badrawy">
                              <h4 class="user-name">Aly El Badrawy</h4>
                                <p><b>Strongly recommended</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Delivery at agreed upon time, excellent quality, very good after sale service..Strongly recommended
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/permalink.php?story_fbid=716832455343261&id=100010495395854" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image"
                                src="https://scontent-hbe1-1.xx.fbcdn.net/v/t1.0-1/p200x200/84082222_10212267300236772_3039547938767372288_o.jpg?_nc_cat=108&ccb=2&_nc_sid=7206a8&_nc_eui2=AeEiCBzfxE0onuFiJQbFntIskmeIEhGbh3aSZ4gSEZuHdkln2iU9Z9sf1W5PDq8_gsaTh8AobWijQ-4mhfd-BrI4&_nc_ohc=woKtuP4FPUAAX82vqwy&_nc_ht=scontent-hbe1-1.xx&tp=6&oh=a63d459d4b4774a1166298331a16f53d&oe=600BB932"
                                alt="Amira Khidr">
                              <h4 class="user-name">Amira Khidr</h4>
                                <p><b>اضافة حقيقة و جميلة للديكور في مصر</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    البوست ده تحية لفنان حقيقي و أنا شايفة انه فضل يطور بشغله بمنتهى التفاني لحد ما وصل مستوى الأرضيات الباركيه الخشب الطبيعي لمستوى مكنش من كم سنة نحلم نشوفه بمصر من ناحية الجودة و التصميمات اللي دايماً جديدة و مبهرة و
                                    المعاملة المحترمة مع العملاء سواء بالسعر أو المواعيد
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                              <img class="user-image" src="{{url('public/images')}}/user.png" alt="Noha Nagied">
                              <h4 class="user-name">Noha Nagied</h4>
                                <p><b>شغل جميل</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    من الشغل الجميل اللي شفتو في معرض La Casa 4/2018
                                    شغل WoodCourt و اللي عامل تصميم لباركيه طبيعي Patchwork ألوان و مونو <br>
                                    الشغل تحفة جداً التصميمات جميلة الألوان راقية و شيك و التايل على بعضه اضافة مميزة و عامل فرق خاصة ان الباركيه من الخامات الكلاسيكية اللي من قيمتها و أصالتها و التغيير فيها و الاضافة اليها مش سهل <br>
                                    شابو على الأفكار بره الصندوق <br>
                                    keep up the good work!
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                              <img class="user-image" src="{{url('public/images')}}/user.png" alt="Rania Salem">
                              <h4 class="user-name">Rania Salem</h4>
                                <p><b>السلم ده قصة تانية خالص</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    مهما تكلمت و شكرت في The Wood Court الكلام هيكون غير منصف ... مواعيد محترمة و التزام و دقة في الشغل ... و أسعار مناسبة جداً م/أيمن زهران عملي فيلا في الشيخ زايد ... ريسبشن و غرف وسلم و خشب تيك للتراث ... و السلم ده
                                    قصة تانية خالص بجد حاجة تجنن ... أنا مشس هحكي كتير الصور بتتكلم <br>
                                    فعلاً شكراً وود كورت و شكراً أيمن زهران على الشغل المحترم
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-rating">
            <h3>Rated 4.8/5 Stars According to 125 Customers</h3>
            <a class="reviews-button" href="https://www.facebook.com/thewoodcourt/reviews/" target="_blank"><i class="fab fa-facebook"></i> View All Reviews</a>
        </div>
    </section>
    <section class="logo-parade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>Our Clients</h2>
                    <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/dip-n-dip.jpeg" alt="Dip & Dip"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/holiday-inn.png" alt="Holiday Inn"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/nbe.png" alt="National Bank of Egypt"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/iwan.png" alt="IWAN"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/arabcont.png" alt="arabcont"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cook-club.png" alt="Cooks Club"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/amer.png" alt="Amer Group"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/four-seasons.png" alt="Four Seasons"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/hassan-allam.png" alt="Hassan Allam"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/hilton.png" alt="Hilton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/sura.jpg" alt="Sura"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/rixos.png" alt="Rixos"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/mazloum.png" alt="Mazloum"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/mobica.png" alt="Mobica"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/siac.png" alt="Siac"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cib.png" alt="CIB"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/sheraton.png" alt="Sheraton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/arena.png" alt="Arena"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/presendcy.jpg" alt="EG Presidency"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cabient.png" alt="EG Cabinet"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/leagueofarabstates.png" alt="League of Arab States"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cairo_governorate.png" alt="Cairo Governorate"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/parlement.jpg" alt="EG Parliament"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/emmar.png" alt="EMMAR"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/elab.jpg" alt="ELAB"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/khamayl.png" alt="Khamayl"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/shorta.png" alt="Nadi al Shorta"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/cairo-airport.png" alt="Nadi al Shorta"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/beni_suef_governorate.png" alt="benisuef"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/coop.jpg" alt="benisuef"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/suez.jpg" alt="suez"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="{{url('public')}}/images/partners/profit-chouex.png" alt="Profit Chouex"></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
