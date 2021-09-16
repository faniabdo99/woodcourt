@include('layout.header', [
    'PageTitle' => __('expert-hub.expert_title'),
    'Description' =>  __('expert-hub.expert_desc'),
    'ogType' => 'Website'
])
<body >
        @include('layout.navbar')
        <section class="hero-section" id="about-us-hero-section">
            <div class="dark-overlap overflow-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <h1>@lang('expert-hub.expert_title')</h1>
                            <p class="mb-5">@lang('expert-hub.expert_hero_sec_h_1_p')</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-parquet"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('expert-hub.expert_hero_sec_h_2')</h4>
                                            <p>@lang('expert-hub.expert_hero_sec_h_2_p')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-faq"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('expert-hub.expert_hero_sec_h_3')</h4>
                                            <p>@lang('expert-hub.expert_hero_sec_h_3_P')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row icons-row d-flex">
                                        <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                            <i class="flaticon-text"></i>
                                        </div>
                                        <div class="col-sm-7 col-lg-12 mt-2 d-flex justify-content-center flex-column align-items-center text-center">
                                            <h4>@lang('expert-hub.expert_hero_sec_h_4')</h4>
                                            <p>@lang('expert-hub.expert_hero_sec_h_4_P')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 hero-section-content">
                            <div class="social-media-hero">
                                <h3>@lang('expert-hub.expert_hero_sec_h_5')</h3>
                                <p>@lang('expert-hub.expert_hero_sec_h_5_P')</p>
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
                                <a class="nav-item nav-link active main-category-filter" data-toggle="tab" href="#wood-care">@lang('expert-hub.expert_side_bar_btn_1')</a>
                                <ul class="toturials-sublist nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#floor-care">@lang('expert-hub.expert_side_bar_btn_1_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchen-care">@lang('expert-hub.expert_side_bar_btn_1_a_2')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-care">@lang('expert-hub.expert_side_bar_btn_1_a_3')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#toturial"> @lang('expert-hub.expert_side_bar_btn_2')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item active nav-link sub-category-filter" data-toggle="tab" href="#installation-methodology">@lang('expert-hub.expert_side_bar_btn_2_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#finishing-techniques">@lang('expert-hub.expert_side_bar_btn_2_a_2')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#resources"> @lang('expert-hub.expert_side_bar_btn_3')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#engineered-floors"> @lang('expert-hub.expert_side_bar_btn_3_a_1')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" id="FAQs-section" data-toggle="tab" href="#faqs"> @lang('expert-hub.expert_side_bar_btn_4')</a>
                                <ul class="nav nav-tabs ml-5">
                                    <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#indoor-faqs"> @lang('expert-hub.expert_side_bar_btn_4_a_1')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchens-faqs"> @lang('expert-hub.expert_side_bar_btn_4_a_2')</a></li>
                                    <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-faqs"> @lang('expert-hub.expert_side_bar_btn_4_a_3')</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#blogs"> @lang('expert-hub.expert_side_bar_btn_5')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="wood-care">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="floor-care">
                                    <h2> @lang('expert-hub.expert_con_wood_care_floor_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/1.jpg" alt="wood-care">
                                    @lang('expert-hub.expert_con_wood_care_floor_care')
                                </div>
                                <div class="tab-pane fade" id="kitchen-care">
                                    <h2>@lang('expert-hub.expert_con_wood_care_kitchen_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/2.jpg" alt="kitchens">
                                    @lang('expert-hub.expert_con_wood_care_kitchen_care')
                                </div>
                                <div class="tab-pane fade" id="outdoor-care">
                                    <h2>@lang('expert-hub.expert_con_wood_care_outdoor_care_h')</h2>
                                    <img class="w-100 h-50 my-3" src="https://thewoodcourt.com/public/images/wood-care/3.jpg" alt="outdoor">
                                    @lang('expert-hub.expert_con_wood_care_outdoor_care')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="toturial">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="installation-methodology">
                                    @lang('expert-hub.expert_con_tutorials_installation_methodology_h')
                                    <img class="mb-2 " src="https://thewoodcourt.com/public/images/articles/8.png" alt="1">
                                    @lang('expert-hub.expert_con_tutorials_installation_methodology')
                                </div>
                                <div class="tab-pane fade" id="finishing-techniques">
                                    @lang('expert-hub.expert_con_tutorials_finishing_techniques')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="resources">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="engineered-floors">
                                    @lang('expert-hub.expert_con_resources_engineered_floors')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faqs">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="indoor-faqs">
                                    <h2>@lang('expert-hub.expert_con_faqs_indoor_faqs_h')</h2>
                                    <div class="accordion" id="accordionExample">
                                        @lang('expert-hub.expert_con_faqs_indoor_faqs')
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kitchens-faqs">
                                    <h2 class="my-4" id="FAQs-kitchens">@lang('expert-hub.expert_con_faqs_kitchens_faqs_h')</h2>
                                    @lang('expert-hub.expert_con_faqs_kitchens_faqs')
                                </div>
                                <div class="tab-pane fade" id="outdoor-faqs">
                                    @lang('expert-hub.expert_con_faqs_outdoor_faqs')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blogs">
                            <div class="tab-content">
                              @lang('expert-hub.expert_con_blogs')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layout.footer')
        @include('layout.scripts')
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js" ></script>
        @php
            //Prepare the contnet
            $TheContent = str_replace("'" , "\"" , "<div class='col-lg-9 col-12'>
                    <div class='tab-content'>
                        <div class='tab-pane fade show active' id='wood-care'>
                            <div class='tab-content'>
                                <div class='tab-pane fade show active' id='floor-care'>
                                    <h2> @lang('expert-hub.expert_con_wood_care_floor_care_h')</h2>
                                    <img class='w-100 h-50 my-3' src='https://thewoodcourt.com/public/images/wood-care/1.jpg' alt='wood-care'>
                                    @lang('expert-hub.expert_con_wood_care_floor_care')
                                </div>
                                <div class='tab-pane fade' id='kitchen-care'>
                                    <h2>@lang('expert-hub.expert_con_wood_care_kitchen_care_h')</h2>
                                    <img class='w-100 h-50 my-3' src='https://thewoodcourt.com/public/images/wood-care/2.jpg' alt='kitchens'>
                                    @lang('expert-hub.expert_con_wood_care_kitchen_care')
                                </div>
                                <div class='tab-pane fade' id='outdoor-care'>
                                    <h2>@lang('expert-hub.expert_con_wood_care_outdoor_care_h')</h2>
                                    <img class='w-100 h-50 my-3' src='https://thewoodcourt.com/public/images/wood-care/3.jpg' alt='outdoor'>
                                    @lang('expert-hub.expert_con_wood_care_outdoor_care')
                                </div>
                            </div>
                        </div>
                        <div class='tab-pane fade' id='toturial'>
                            <div class='tab-content'>
                                <div class='tab-pane fade show active' id='installation-methodology'>
                                    @lang('expert-hub.expert_con_tutorials_installation_methodology_h')
                                    <img class='mb-2' src='https://thewoodcourt.com/public/images/articles/8.png' alt='1'>
                                    @lang('expert-hub.expert_con_tutorials_installation_methodology')
                                </div>
                                <div class='tab-pane fade' id='finishing-techniques'>
                                    @lang('expert-hub.expert_con_tutorials_finishing_techniques')
                                </div>
                            </div>
                        </div>
                        <div class='tab-pane fade' id='resources'>
                            <div class='tab-content'>
                                <div class='tab-pane fade show active' id='engineered-floors'>
                                    @lang('expert-hub.expert_con_resources_engineered_floors')
                                </div>
                            </div>
                        </div>
                        <div class='tab-pane fade' id='faqs'>
                            <div class='tab-content'>
                                <div class='tab-pane fade show active' id='indoor-faqs'>
                                    <h2>@lang('expert-hub.expert_con_faqs_indoor_faqs_h')</h2>
                                    <div class='accordion' id='accordionExample'>
                                        @lang('expert-hub.expert_con_faqs_indoor_faqs')
                                    </div>
                                </div>
                                <div class='tab-pane fade' id='kitchens-faqs'>
                                    <h2 class='my-4' id='FAQs-kitchens'>@lang('expert-hub.expert_con_faqs_kitchens_faqs_h')</h2>
                                    @lang('expert-hub.expert_con_faqs_kitchens_faqs')
                                </div>
                                <div class='tab-pane fade' id='outdoor-faqs'>
                                    @lang('expert-hub.expert_con_faqs_outdoor_faqs')
                                </div>
                            </div>
                        </div>
                        <div class='tab-pane fade' id='blogs'>
                            <div class='tab-content'>
                              @lang('expert-hub.expert_con_blogs')
                            </div>
                        </div>
                    </div>
                </div>");
        @endphp
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{__('expert-hub.expert_title')}}",
                "alternativeHeadline": "{{__('expert-hub.expert_hero_sec_h_1_p')}}",
                "image": "{{url('public/images/heros/about-us.jpg')}}",
                "author": "The Wood Court",
                "award": "The most advanced guide for wood experts",
                "editor": "The Wood Court",
                "genre": "Guide",
                "keywords": "thewoodcourt wood experts hardwood wood-flooring floors kitchens",
                "wordcount": "720",
                "publisher": {
                    "@type": "Organization",
                    "name": "The Wood Court",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "{{url('/public/images/logo-blue.png')}}"
                    }
                },
                "url": "{{url()->current()}}",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "{{url()->current()}}"
                },
                "datePublished": "2020-09-20",
                "dateCreated": "2020-09-20",
                "dateModified": "2011-09-20",
                "description": "The Wood Court Experts hub",
                "articleBody": "{{$TheContent}}"
             }
        </script>
    </body>
</html>
