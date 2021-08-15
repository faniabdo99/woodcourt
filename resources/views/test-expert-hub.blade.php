@include('layout.header', [
    'PageTitle' => __('test-expert-hub.expert_title'),
    'Description' =>  __('test-expert-hub.expert_desc'),
    'ogType' => 'Website'
])
<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
        @include('layout.navbar')
        <section class="hero-section" id="about-us-hero-section">
            <div class="dark-overlap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <h1>@lang('test-expert-hub.expert_title')</h1>
                            <p class="mb-5">@lang('test-expert-hub.expert_hero_sec_h_1_p')</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-parquet"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('test-expert-hub.expert_hero_sec_h_2')</h4>
                                            <p>@lang('test-expert-hub.expert_hero_sec_h_2_p')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-faq"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('test-expert-hub.expert_hero_sec_h_3')</h4>
                                            <p>@lang('test-expert-hub.expert_hero_sec_h_3_P')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-text"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('test-expert-hub.expert_hero_sec_h_4')</h4>
                                            <p>@lang('test-expert-hub.expert_hero_sec_h_4_P')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 hero-section-content">
                            <div class="social-media-hero">
                                <h3>@lang('test-expert-hub.expert_hero_sec_h_5')</h3>
                                <p>@lang('test-expert-hub.expert_hero_sec_h_5_P')</p>
                                <ul>
                                    <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a>
                                    </li>
                                    <li class="instagram-li"><a href="https://www.instagram.com/thewoodcourt/" target="_blank "><i class="fab fa-instagram"></i> <span>@thewoodcourt</span></a>
                                    </li>
                                    <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>0111 757 1111</span></a>
                                    </li>
                                    <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                    <li class="youtube-li"><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank "><i class="fab fa-youtube"></i> <span>The Wood Court</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mt-5 mb-5" id="content-section">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="products-sidebar mb-5" id="expert-hub-sidebar">
                        <ul class="filter-items nav nav-tabs" id="nav-tab" role="tablist">
                            <li>
                                <a class="nav-item nav-link active main-category-filter" data-toggle="tab" href="#wood-care">@lang('test-expert-hub.expert_side_bar_btn_1')</a>
                                <ul class="toturials-sublist nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#floor-care">@lang('test-expert-hub.expert_side_bar_btn_1_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchen-care">@lang('test-expert-hub.expert_side_bar_btn_1_a_2')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-care">@lang('test-expert-hub.expert_side_bar_btn_1_a_3')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#toturial"> @lang('test-expert-hub.expert_side_bar_btn_2')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item active nav-link sub-category-filter" data-toggle="tab" href="#installation-methodology">@lang('test-expert-hub.expert_side_bar_btn_2_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#finishing-techniques">@lang('test-expert-hub.expert_side_bar_btn_2_a_2')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#resources"> @lang('test-expert-hub.expert_side_bar_btn_3')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#engineered-floors"> @lang('test-expert-hub.expert_side_bar_btn_3_a_1')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" id="FAQs-section" data-toggle="tab" href="#faqs"> @lang('test-expert-hub.expert_side_bar_btn_4')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#indoor-faqs"> @lang('test-expert-hub.expert_side_bar_btn_4_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchens-faqs"> @lang('test-expert-hub.expert_side_bar_btn_4_a_2')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-faqs"> @lang('test-expert-hub.expert_side_bar_btn_4_a_3')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#blogs"> @lang('test-expert-hub.expert_side_bar_btn_5')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="wood-care">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="floor-care">
                                    <h2> @lang('test-expert-hub.expert_con_wood_care_floor_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/1.jpg" alt="wood-care">
                                    @lang('test-expert-hub.expert_con_wood_care_floor_care')
                                </div>
                                <div class="tab-pane fade" id="kitchen-care">
                                    <h2>@lang('test-expert-hub.expert_con_wood_care_kitchen_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/2.jpg" alt="kitchens">
                                    @lang('test-expert-hub.expert_con_wood_care_kitchen_care')
                                </div>
                                <div class="tab-pane fade" id="outdoor-care">
                                    <h2>@lang('test-expert-hub.expert_con_wood_care_outdoor_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/3.jpg" alt="outdoor">
                                    @lang('test-expert-hub.expert_con_wood_care_outdoor_care')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="toturial">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="installation-methodology">
                                    @lang('test-expert-hub.expert_con_tutorials_installation_methodology_h')
                                    <img class="mb-2 " src="https://thewoodcourt.com/public/images/articles/8.png" alt="1">
                                    @lang('test-expert-hub.expert_con_tutorials_installation_methodology')

                                </div>
                                <div class="tab-pane fade" id="finishing-techniques">
                                    @lang('test-expert-hub.expert_con_tutorials_finishing_techniques')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="resources">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="engineered-floors">
                                    @lang('test-expert-hub.expert_con_resources_engineered_floors')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faqs">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="indoor-faqs">
                                    <h2>@lang('test-expert-hub.expert_con_faqs_indoor_faqs_h')</h2>
                                    <div class="accordion" id="accordionExample">
                                        @lang('test-expert-hub.expert_con_faqs_indoor_faqs')
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kitchens-faqs">
                                    <h2 class="my-4" id="FAQs-kitchens">@lang('test-expert-hub.expert_con_faqs_kitchens_faqs_h')</h2>
                                    @lang('test-expert-hub.expert_con_faqs_kitchens_faqs')
                                </div>
                                <div class="tab-pane fade" id="outdoor-faqs">
                                    @lang('test-expert-hub.expert_con_faqs_outdoor_faqs')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blogs">
                            <div class="tab-content">
                              @lang('test-expert-hub.expert_con_blogs')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layout.footer')
        @include('layout.scripts')
        <script type="text/javascript">
                        $('.filter-items .main-category-filter').click(function() {
                            //Hide all open uls
                            $('.filter-items .main-category-filter').next('ul').slideUp('fast');
                            //SHow the current selected one
                            $(this).next('ul').slideDown();
                        });
                        $('.sub-category-filter, .filter-items .main-category-filter').click(function(e) {
                            var id = $('#content-section');
                            if (id.length === 0) {
                                return;
                            }
                            e.preventDefault();
                            var pos = (id.offset().top - 100);
                            $('body, html').animate({
                                scrollTop: pos
                            }, 1000);
                        });

                        //Recive Outer Hook and Toggle Tab Using it
                        var getParams = function (url) {
                            var params = {};
                            var parser = document.createElement('a');
                            parser.href = url;
                            var query = parser.search.substring(1);
                            var vars = query.split('&');
                            for (var i = 0; i < vars.length; i++) {
                                var pair = vars[i].split('=');
                                params[pair[0]] = decodeURIComponent(pair[1]);
                            }
                            return params;
                        };
                        var UrlParamaters = getParams(window.location.href);
                        if ('tab' in UrlParamaters){
                            //Show the requested tab and active the link in sidebar
                            //Hide Wood Care
                            $('#wood-care').removeClass('active');
                            //inactive wood care side links
                            $('.main-category-filter').removeClass('active');
                            $('.toturials-sublist').removeClass('toturials-sublist');
                            $('.sub-category-filter').removeClass('active');
                            //Show the requested tab and parent tab
                            $('#'+UrlParamaters.tab).parent().parent().tab('show');
                            $('#'+UrlParamaters.tab).tab('show');
                            //Active the correct side panel links
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').addClass('active');
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().parent().find('a.main-category-filter').addClass('active');
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().addClass('toturials-sublist');
                            //Scroll to content
                            var id = $('#content-section');
                            var pos = (id.offset().top - 200);
                            $('body, html').animate({
                                scrollTop: pos
                            }, 1000);
                        }
                    </script>

                    <script
                    type="text/javascript"
                    async defer
                    src="//assets.pinterest.com/js/pinit.js"
                ></script>

    </body>
</html>
