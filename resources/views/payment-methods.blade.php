@include('layout.header', [
'PageTitle' => __('payment.payment_h'),
'Description' => __('payment.payment_desc'),
'ogType' => 'Website'
])

<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <section>
        <div class="container mt-3 mb-5">
            <h1 class="brand text-center mt-5 mb-4">@lang('payment.payment_h')</h1>
            <div class="static-content-section mb-5">
                <h2>@lang('payment.payment_con_h_1')</h2>
                <p>@lang('payment.payment_con_p_1')</p>
                <br><br>
                <img class="mb-2 payment-methods-image" src="{{ url('public/images/payment-images/qnb.png') }}"
                    alt="QNB"> <br>
                <b>@lang('payment.payment_con_sub_h_1')</b>
                <br>
                <p>@lang('payment.payment_con_sub_p_1')</p>
                <br><br>
                <img class="mb-2 payment-methods-image" src="{{ url('public/images/payment-images/credit.png') }}"
                    alt="Credit Card"> <br>
                <b>@lang('payment.payment_con_sub_h_2')</b>
                <br>
                <p>@lang('payment.payment_con_sub_p_2')</p>
            </div>
            <div class="static-content-section mb-5">
                <h2>@lang('payment.payment_con_h_2')</h2>
                <p>@lang('payment.payment_con_p_2')</p>
                <br><br>
                <img class="mb-2 payment-methods-image" src="{{ url('public/images/payment-images/valu.png') }}"
                    alt="ValU"> <br>
                <b>@lang('payment.payment_con_sub_h_3')</b>
                <br>
                <p>@lang('payment.payment_con_sub_p_3_4')</p>
                <br><br>
                <img class="mb-2 payment-methods-image" src="{{ url('public/images/payment-images/belcash.png') }}"
                    alt="BelCash Egypt"> <br>
                <b>@lang('payment.payment_con_sub_h_4')</b>
                <br>
                <p>@lang('payment.payment_con_sub_p_3_4')</p>

            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>

</html>
