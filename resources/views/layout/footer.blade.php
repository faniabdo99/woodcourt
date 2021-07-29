<footer class="footer">
    <div class="container-fluid dark-overlap">
        <div class="row">
            <div class="col-lg-3 col-12 footer-info">
                <img class="footer-logo" src="{{ url('public') }}/images/logo-white.png" alt="The Wood Court Logo"
                    title="The Wood Court" />
                <p>@lang('footer.footer_desc')
                </p>
                <ul>
                    <li><a href="https://www.facebook.com/thewoodcourt/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/thewoodcourt/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-12 d-flex footer-links">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> @lang('footer.footer_links_1')</a></li>
                    <li><a href="{{ route('about') }}"><i class="fas fa-question-circle"></i>@lang('footer.footer_links_2')</a></li>
                    <li><a href="{{ route('events') }}"><i class="fas fa-calendar"></i>@lang('footer.footer_links_3')</a></li>
                    <li><a href="{{ route('paymentMethods') }}"><i class="fas fa-credit-card"></i> @lang('footer.footer_pay_h')</a>
                    </li>
                </ul>
                <ul>
                    <li><a href="{{ route('products') }}"><i class="fas fa-box"></i>@lang('footer.footer_links_4')</a></li>
                    <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i>@lang('footer.footer_links_5')</a></li>
                    <li><a href="{{ route('expert-hub') }}"><i class="fas fa-check"></i>@lang('footer.footer_links_6')</a></li>
                    <li><a href="{{ route('privacy') }}"><i class="fas fa-lock"></i>@lang('footer.footer_links_7')</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-12 footer-map d-flex flex-column">
                <div class="d-flex">
                    <div class="p-1">
                        <b>@lang('footer.footer_location_1') <button class="hidden-btn-parent" onclick="myFunction1()">@lang('footer.footer_location_btn')<input class="hidden-btn" type="text" value="https://g.page/thewoodcourt?share" id="iframe1">
                        </button>
                            </b>
                        <iframe class="w-100 mr-2 "
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7004975044897!2d31.196790115115157!3d30.045449181881974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413486462911%3A0x945b12fc41fd6e8a!2sThe%20Wood%20Court!5e0!3m2!1sen!2seg!4v1605110935180!5m2!1sen!2seg"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="p-1">
                        <b>@lang('footer.footer_location_2') <button class="hidden-btn-parent" onclick="myFunction2()">@lang('footer.footer_location_btn') <input class="hidden-btn" type="text" value="https://goo.gl/maps/3VvUAo7KPgCHz9r79" id="iframe2">
                        </button>
                        </b>
                        <iframe class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13808.774158433253!2d31.048808!3d30.088643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9009e055808b4566!2swoodcourt!5e0!3m2!1sen!2seg!4v1605790659564!5m2!1sen!2seg"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="mt-3">
                    <h5>@lang('footer.footer_pay_h')</h5>
                    <div class="footer-payment-methods">
                        <img src="{{ url('public/images/payment-images/qnb.png') }}" alt="QNB">
                        <img src="{{ url('public/images/payment-images/valu.png') }}" alt="ValU">
                        <img src="{{ url('public/images/payment-images/belcash.png') }}" alt="BelCash Egypt">
                        <p class="mb-0">@lang('footer.footer_pay_credit')</p>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <script src="dist/clipboard.min.js"></script>
<script>
function myFunction1() {
  var copyText = document.getElementById("iframe1");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Link Copied");
}
function myFunction2() {
  var copyText = document.getElementById("iframe2");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Link Copied");
}
</script>
