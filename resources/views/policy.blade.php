@include('layout.header', [
    'PageTitle' => __('policy.policy_h'),
    'Description' => __('policy.policy_desc'),
    'ogType' => 'Website'
])
<body class="@lang('settings.text_align')" dir="@lang('settings.direction')">
    @include('layout.navbar')
    <section>
        <div class="container">
            <h1 class="brand text-center my-5">@lang('policy.policy_h')</h1>
            <div class="static-content-section mb-5">
                <h2>@lang('policy.policy_con_h_1')</h2>
                <p>@lang('policy.policy_con_p_1')</p>
            </div>
            <div class="static-content-section mb-5">
                <h2>@lang('policy.policy_con_h_2')</h2>
                <p>
                    @lang('policy.policy_con_p_2')
                </p>
            </div>
            <div class="static-content-section mb-5">
                <h2>@lang('policy.policy_con_h_3')</h2>
                <p>
                    @lang('policy.policy_con_p_3')
                </p>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
