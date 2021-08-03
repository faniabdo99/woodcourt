@include('layout.header', [
'PageTitle' => __('contact.contact_hero_sec_h'),
'Description' => __('contact.contact_con_form_p'),
'ogType' => 'Website'
])

<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <!-- Page Content -->
    <section class="hero-section" id="contact-us-hero">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <h1>@lang('contact.contact_hero_sec_h')</h1>
                        <p class="mb-5">@lang('contact.contact_hero_sec_p')</p>
                    </div>
                    <div class="col-12 col-lg-5 hero-section-content">
                        <div class="social-media-hero">
                            <h3>@lang('contact.contact_hero_sec_h')</h3>
                            <p>@lang('contact.contact_hero_sec_sidebar_p')</p>
                            <ul>
                                <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/"
                                        target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="instagram-li"><a href="https://www.instagram.com/thewoodcourt/"
                                        target="_blank "><i class="fab fa-instagram"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111"
                                        target="_blank "><i class="fab fa-whatsapp"></i> <span>0111 757 1111</span></a>
                                </li>
                                <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i
                                            class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                <li class="youtube-li"><a
                                        href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ"
                                        target="_blank "><i class="fab fa-youtube"></i> <span>The Wood Court</span></a>
                                </li>
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
                    <h2>@lang('contact.contact_con_form_h')</h2>
                    <p>@lang('contact.contact_con_form_p')</p>
                    <ul class="contact-information-list">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>
                                <a href="mailto:info@thewoodcourt.com">info@thewoodcourt.com</a>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>
                                <span><b>@lang('contact.contact_location_title_phone_1') </b><a
                                        href="https://api.whatsapp.com/send?phone=201117571111">0111 757 1111</a><a
                                        href="https://api.whatsapp.com/send?phone=201114641111">0111 464 1111</a></span>
                                <span><b>@lang('contact.contact_location_title_phone_2') </b><a
                                        href="https://api.whatsapp.com/send?phone=201159111179">0115 911 1179</a></span>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker"></i>
                            <span>
                                <b>@lang('contact.contact_location_title_phone_1')</b>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/The+Wood+Court/@30.0454492,31.1967901,17z/data=!3m1!4b1!4m5!3m4!1s0x1458413486462911:0x945b12fc41fd6e8a!8m2!3d30.0454492!4d31.1989788?hl=en">@lang('contact.contact_location_1')</a>
                                <b>@lang('contact.contact_location_title_phone_2')</b>
                                <a target="_blank"
                                    href="https://goo.gl/maps/rdGPAq8g96U22XQr6">@lang('contact.contact_location_2')</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12">
                    <form class="woodcourt-form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="name">@lang('contact.contact_location_name')</label>
                                <input type="text" placeholder="@lang('contact.contact_location_name_ph')" name="name"
                                    id="name" required>
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="name">@lang('contact.contact_location_email')</label>
                                <input type="email" placeholder="@lang('contact.contact_location_email_ph')"
                                    name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="name">@lang('contact.contact_location_company')</label>
                                <input type="text" placeholder="@lang('contact.contact_location_company_ph')"
                                    name="company_name" id="company_name">
                                <label for="message">@lang('contact.contact_location_message')</label>
                                <textarea name="message" id="message" rows="8"
                                    placeholder="@lang('contact.contact_location_message_ph')"></textarea>
                                <button class="icon-button d-lg-inline d-block text-center w-100"
                                    data-target="{{ route('contact.post') }}" id="submit-contact-form" type="submit"><i
                                        class="fas fa-paper-plane"></i>
                                    @lang('contact.contact_location_form_btn')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us-map d-flex w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <h2>@lang('contact.contact_location_title_phone_1')</h2>
                    <p>@lang('contact.contact_location_1')</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7004975044897!2d31.196790115115157!3d30.045449181881974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413486462911%3A0x945b12fc41fd6e8a!2sThe%20Wood%20Court!5e0!3m2!1sen!2seg!4v1605110935180!5m2!1sen!2seg"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 col-12">
                    <h2>@lang('contact.contact_location_title_phone_2')</h2>
                    <p>@lang('contact.contact_location_2')</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13808.774158433253!2d31.048808!3d30.088643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9009e055808b4566!2swoodcourt!5e0!3m2!1sen!2seg!4v1605790659564!5m2!1sen!2seg"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>


    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
