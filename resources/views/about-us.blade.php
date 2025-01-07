@include('layout.header', [
    'PageTitle' =>  __('about.about_title'),
    'Description' => __('about.about_desc'),
    'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section class="hero-section " id="about-us-hero-section">
        <div class="dark-overlap overflow-auto">
            <div class="container-fluid @lang('settings.text_align')" dir="@lang('settings.direction')">
                <div class="row ">
                    <div class="col-12">
                        <h1>@lang('about.about_title')</h1>
                        <p class="mb-5">@lang('about.about_hero_sec_p')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-description @lang('settings.text_align')" dir="@lang('settings.direction')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2>@lang('about.about_main_con_h') <span><img height="50" src="/images/logo-black.png"></span></h2>
                    <p class="mb-3 @lang('settings.text_align')" dir="@lang('settings.direction')">@lang('about.about_main_con_p_1') </p>
                    <p class="mb-3 @lang('settings.text_align')" dir="@lang('settings.direction')">@lang('about.about_main_con_p_2')
                    </p>
                    <p class="mb-3 @lang('settings.text_align')" dir="@lang('settings.direction')">@lang('about.about_main_con_p_3') </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="we-are-the-wood-court-image w-100" src="/images/about-us-descrition.jpg" alt="We are the wood court">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="mb-3  @lang('settings.text_align')" dir="@lang('settings.direction')">@lang('about.about_main_con_p_4')</p>
                    <p class="mb-3  @lang('settings.text_align')" dir="@lang('settings.direction')">@lang('about.about_main_con_p_5') </p>
                    <a href="{{route('contact')}}" class="icon-button d-lg-inline d-block text-center" dir="@lang('settings.direction')"><i class="fas fa-phone"></i>@lang('about.about_main_con_btn') </a>
                </div>
            </div>
        </div>
    </section>
    <section class="our-achievements">
        <div class="dark-overlap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-heading">@lang('about.about_our_achievements_sec_h')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item h-100">
                            <div class="icon-container">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="1500" data-speed="3000"></span>@lang('about.about_our_achievements_sec_1')
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item h-100">
                            <div class="icon-container">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="3000" data-speed="3000"></span>@lang('about.about_our_achievements_sec_2')
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item h-100">
                            <div class="icon-container">
                                <i class="fas fa-chart-area"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="20000" data-speed="3000"></span>@lang('about.about_our_achievements_sec_3')
                            </div>
                        </div>
                    </div>
                    <div class="our-card col-6 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-counter-item h-100">
                            <div class="icon-container">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="content-container">
                                <span class="counter" data-from="25" data-to="60" data-speed="3000"></span>@lang('about.about_our_achievements_sec_4')
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
                    <h2>@lang('about.about_history_h')</h2>
                    <ul>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>1979</time> @lang('about.about_history_li_1')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>1984</time> @lang('about.about_history_li_2')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>1992</time>@lang('about.about_history_li_3')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2000</time> @lang('about.about_history_li_4')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2002</time> @lang('about.about_history_li_5')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2006</time> @lang('about.about_history_li_6')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2009</time>@lang('about.about_history_li_7')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2014</time> @lang('about.about_history_li_8')
                            </div>
                        </li>
                        <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2015</time> @lang('about.about_history_li_9')
                            </div>
                        </li>
                        {{-- <li>
                            <div class="@lang('settings.text_align')" dir="@lang('settings.direction')">
                                <time>2018</time>@lang('about.about_history_li_10')
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-videos-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title mb-5">@lang('about.about_our_videos_h')</h2>
                    <ul class="owl-carousel owl-theme three-items-carousel">
                        {{-- <li class="item">
                            <div class="video-background-homepage" id="video-one">
                                <img src="/images/video-bg-2.jpg" title="Video Thumb" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-2"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" id="video-two">
                                <img src="/images/kitchens-video.jpg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-1"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li> --}}
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/1.jpeg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-3"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/2.jpeg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-4"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/3.jpeg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-5"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/4.jpeg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-6"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/5.jpeg" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-7"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="video-background-homepage" >
                                <img src="/images/6.png" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-8"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li>
                        {{-- <li class="item">
                            <div class="video-background-homepage">
                                <img src="/images/7.png" alt="Video Thumb">
                                <a class="text-white homepage-play-video" href="javascript:;" id="homepage-play-video-9"> <i class="fas fa-play-circle fa-5x"></i></a>
                            </div>
                        </li> --}}
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
                        <h2>@lang('about.about_testim_sec_h')</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img src="/images/testemonials/nermeen-farouk.jpg" alt="Nermeen Farouk Gamea">
                                <h4>Nermeen Farouk Gamea</h4>
                                <p><b>This a company you can trust</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    From quality of product, punctuality in timing an excellent service and most of all the care for their customers. Very good value for money and professional advices that can help you in making good decisions for
                                    your home within your budget
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/nermeen.gamea/posts/10217173194183151" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mostafa-morsy.jpg" alt="Mostafa Morsy">
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
                                <img class="user-image" src="/images/testemonials/nour-el-hoda-moghazy.jpg" alt="Nour El Hoda Moghazy">
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
                                <img class="user-image" src="/images/testemonials/mahmoud-yassin.jpg" alt="Mahmoud Yassin">
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
                                <img src="/images/testemonials/ahmad-elsaeed.jpg" alt="Ahamd Elsaeed">
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
                                <img class="user-image" src="/images/testemonials/mohamed-mahdy.jpg" alt="Mohamed Mahdy">
                                <h4 class="user-name">Mohamed Mahdy</h4>
                                <p><b>One of best companies that you can deal with</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    The wood court is one of best companies that you can deal with. Quality, accountability and dedication for their customers. If you want to buy wooden floor, then you should visit the wood court. They're doing great
                                    job.... and special thanks to Eng. Ayman..
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.mahdy.543/posts/1742895592432056" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/user.png" alt="‏‎Hussein Mahmoud‎‏">
                                <h4 class="user-name">‏‎Hussein Mahmoud‎‏</h4>
                                <p><b>Nice</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Nice and Friendly people high recommend for dealing with them
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/hahmahmoud/posts/10220935532551164" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mohamed-sheesh.jpg" alt="Mohamed Sheesh">
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
                                <img class="user-image" src="/images/testemonials/aly-albadrawy.jpg" alt="Aly El Badrawy">
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
                                <img class="user-image" src="/images/testemonials/amira-khidr.jpg" alt="Amira Khidr">
                                <h4 class="user-name">Amira Khidr</h4>
                                <p><b>اضافة حقيقة و جميلة للديكور في مصر</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    البوست ده تحية لفنان حقيقي و أنا شايفة انه فضل يطور بشغله بمنتهى التفاني لحد ما وصل مستوى الأرضيات الباركيه الخشب الطبيعي لمستوى مكنش من كم سنة نحلم نشوفه بمصر من ناحية الجودة و التصميمات اللي دايماً جديدة و مبهرة
                                    و
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
                                    فعلاً شكراً (وود كورت) و شكراً أيمن زهران على الشغل المحترم
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img src="/images/testemonials/hala-aziz.jpg" alt="Hala-Aziz">
                                <h4>Hala Aziz</h4>
                                <p><b>شركه محترمه و اتشرفت بالتعامل معاكم</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    الجوده عاليه جداا و مواعيد تسليم مظبوطه
                                    الف شكر يا باشمهندس ايمن و ربنا يوفقكم دايما
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/hala.fayek.77/posts/10158135354066559" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/ashraf-esmail.jpg" alt="ashraf-esmail">
                                <h4 class="user-name">Ashraf Esmail</h4>
                                <p><b>the best wooden floors ever</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    الجوده في الخامه . الجوده في المواعيد . الجوده في التعامل . الأدب و الالتزام من فنيين التركيب
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ashraf.ismail.7169/posts/10156817850781072" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mahmoud-basyouny.jpg" alt="Mahmoud Bassuony">
                                <h4 class="user-name">Mahmoud Bassuony</h4>
                                <p><b>افضل شركة في مصر بتعمل ارضيات باركيه وسلالم</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    فعلاً وعن تجربة معاهم في اكثر من مشروع مفيش مرة كان فيها غلطة 👌🏽
                                    خامات ممتازة .، معاملة أكثر من رائعة .، مواعيد وده المهم مظبوطة جداً .، وناس بتحب شغلهم وبتقدره جداً
                                    شرف ليا اني اتعاملت معاهم أكثر من مرة و علي طول ان ساء الله
                                    بس نفسي يفتحوا فرع في التجمع
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mbassuony1/posts/2072351542840817" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/heba-mahfoz.jpg" alt="Heba Mahfoz">
                                <h4>Heba Mahfoz</h4>
                                <p><b>منتج جميل و فاخر</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    منتج جميل و فاخر
                                    و شركه محترمه بدايه المواعيد و التركيب الى المتابعه و الصيانه
                                    و شكر خاص للمهندس احمد زهران و المهندس ايمن زهران ،، لذوقهم و رقيهم في التعامل
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/heba.mahfouz.18/posts/2364117763602634" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/user.png" alt="‏‎Ahmed Haikal‎‏">
                                <h4 class="user-name">‏‎Ahmed Haikal‎‏</h4>
                                <p><b>High Quality</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    High Quality, Friendly people and reasonable price.
                                    Totally recommend it.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ahmed.haikal.39/posts/10157549806982057" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mohamed-hamdy.jpg" alt="Mohamed Hamdy">
                                <h4 class="user-name">Mahmamed Hamdy</h4>
                                <p><b>Thanks Wood Court </b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Thanks Wood Court for the great work, perfect installation, high quality, professional sale service & on time deliverables .. stuff are nice & professional.
                                    Special thanks to engineer Ayman Zahran, an honest straightforward flexible person! & I mean by honest straightforward that he states what he can do & what he can’t .. I had a special request & he promised to do it
                                    and fulfilled what he promised.
                                    Thank U
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.hamdy.562/posts/10157791062441645" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/shreif-elmasry.jpg" alt="Sherif Elmasry">
                                <h4>Shreif ElMasry</h4>
                                <p><b>Thanks </b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Thanks to Woodcourt for the job done, really it was excellent experience from all aspects ( quality , commitment , and even price)
                                    Special thanks to Mr. Ayman Elhefnawy, Mr. Ahmed Zahran , Mr. Ayman Zahran
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/sherif.elmasry.16144/posts/10164533747760014" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/amany-fawzy.jpg" alt="Amany Fawzy">
                                <h4 class="user-name">Amany Fawzy</h4>
                                <p><b>It was great</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    It was great to deal with them ... In no time I had my hdf flooring .. hope to keep this good work ��
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/amany.fawzy1/posts/10163981858995316" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/ahmed-el-ashmawy.jpg" alt="Ahmed El Ashmawy">
                                <h4 class="user-name">Ahmed El Ashmawy</h4>
                                <p><b>Special thanks</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    Special thanks to Eng. Ahmed Zahran and Eng. Ayman Zahran
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ahmed.e.ashmawy/posts/10155529044237385" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mai-refaat.jpg" alt="Mai Refaat">
                                <h4>Mai Refaat</h4>
                                <p><b>اتمني ليكم كل النجاح</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    من اكثر الناس امحترمين اللي اتعملت معاهم اتمني ليكم كل النجاح
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mai.refaat.52/posts/10160725040675597" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/ehab-doss.jpg" alt="‏‎Ehab Doss">
                                <h4 class="user-name"> ‏‎Ehab Doss‎‏ </h4>
                                <p><b>من اكثر الشركات احتراما للعميل</b><br>
                                    <i class="fas fa-quote-right color-brand"></i>
                                    من اكثر الشركات احتراما للعميل ومصداقيه في الخامات
                                    والتنفيذ بأعلي جوده وحرفية ممتازة
                                    مستوي راقي من التصميمات واسعار ممتازة اشكرك مهندس ايمن علي تعبك معايا والتزامك في ما تعرضت له
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ehab.doss/posts/10158780036954250" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/user.png" alt="‏‎Ahmed Raslan‎‏">
                                <h4 class="user-name">‏‎Ahmed Raslan‎‏</h4>
                                <p><b>مستوى راقى</b><br><i class="fas fa-quote-right color-brand"></i>
                                    مستوى راقى من الأخشاب و الحرفية فى التنفيذ و التعامل...شكراً مهندس أيمن زهران و المهندسين القائمين على إدارة المصنع و المعرض
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/ahmed.raslan.921/posts/10160636128305084" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/user.png" alt="‏‎Tahra El Semary‎‏‎‏">
                                <h4>‏‎Tahra El Semary‎‏</h4>
                                <p><b>احسن حد ممكن تتعامل معاه</b><br><i class="fas fa-quote-right color-brand"></i>
                                    بجد احسن حد ممكن تتعامل معاه مهندس ايمن فاهم و مهاود و طلعت عينه في إختيار الالوان محترمين جدا و ملتزمين في المواعيد
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/tahra.semary/posts/10158657423222145" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mohamed-abo-hendi.jpg" alt="Mohamed Abo Hendi‎‏">
                                <h4 class="user-name">Mohamed Abo Hendi</h4>
                                <p><b>Professional </b><br><i class="fas fa-quote-right color-brand"></i>
                                    Professional and accurate timing , reliable and handing over without any comments.
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.a.hendia/posts/10155676746466431" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/mohamed-el-alfy.jpg" alt="Mohamed El Alfy">
                                <h4 class="user-name">Mohamed El Alfy</h4>
                                <p><b>Perfect</b><br><i class="fas fa-quote-right color-brand"></i>
                                    Perfect follow up perfect timing perfect quality to sum up this is the place to go, well done wood court
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/mohamed.e.alfy.1/posts/10164595685655012" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="row slide">
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/rafik-makar.jpg" alt="Rafik Makar">
                                <h4>Rafik Makar</h4>
                                <p><b>Thanks</b><br><i class="fas fa-quote-right color-brand"></i>
                                    Thanks Woodcourt for the excellent quality of products and professional installation. Well done</p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/rafik.makar/posts/10157818271656593" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/testemonials/rehab-nabil.jpg" alt="‏‎Rehab Nabil‎‏">
                                <h4 class="user-name">‏‎Rehab Nabil‎‏</h4>
                                <p><b>شركه محترمه</b><br><i class="fas fa-quote-right color-brand"></i>
                                    شركه محترمه وبتفي بوعودها وأمانه واهتمام بالعميل ومتابعه رائعه..بالتوفيق يارب
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/rehab.nabil.a76/posts/10157330751301433" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="single-testemonials-card">
                                <img class="user-image" src="/images/user.png" alt="‏‎Tahra El Semary‎‏‎‏">
                                <h4>‏‎Tahra El Semary‎‏</h4>
                                <p><b>احسن حد ممكن تتعامل معاه</b><br><i class="fas fa-quote-right color-brand"></i>
                                    بجد احسن حد ممكن تتعامل معاه مهندس ايمن فاهم و مهاود و طلعت عينه في إختيار الالوان محترمين جدا و ملتزمين في المواعيد
                                </p>
                            </div>
                            <a class="view-on-facebook" href="https://www.facebook.com/tahra.semary/posts/10158657423222145" target="_blank" title="View on Facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-rating">
            <h3>@lang('about.about_testim_sec_rated_h')</h3>
            <a class="reviews-button" href="https://www.facebook.com/thewoodcourt/reviews/" target="_blank"><i class="fab fa-facebook"></i> @lang('about.about_testim_sec_rated_btn')</a>
        </div>
    </section>
    <section class="logo-parade">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>@lang('about.about_our_clients_sec_h')</h2>
                    <div class="owl-carousel owl-theme full-width-carousel-with-nav">
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/dip-n-dip.jpeg" alt="Dip & Dip"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/holiday-inn.png" alt="Holiday Inn"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/nbe.png" alt="National Bank of Egypt"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/iwan.png" alt="IWAN"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/arabcont.png" alt="arabcont"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/cook-club.png" alt="Cooks Club"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/amer.png" alt="Amer Group"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/four-seasons.png" alt="Four Seasons"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/hassan-allam.png" alt="Hassan Allam"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/hilton.png" alt="Hilton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/sura.jpg" alt="Sura"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/rixos.png" alt="Rixos"></a>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/emmar.png" alt="EMMAR"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/khamayl.png" alt="Khamayl"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/profit-chouex.png" alt="Profit Chouex"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/mazloum.png" alt="Mazloum"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/mobica.png" alt="Mobica"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/siac.png" alt="Siac"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/cib.png" alt="CIB"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/sheraton.png" alt="Sheraton"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4">
                                <div class="client-card">
                                    <a href="javascript:;"><img src="/images/partners/arena.png" alt="Arena"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
