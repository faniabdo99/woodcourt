@include('layout.header', [
    'PageTitle' => 'Privacy Policy',
    'Description' => 'The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwoods.',
    'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section>
        <div class="container">
            <h1 class="brand text-center my-5">Privacy Policy</h1>
            <div class="static-content-section mb-5">
                <h2>Data Collection & Privacy</h2>
                <p>The Wood Court doesn't collect any personal data or browsing history, the only way we collect data is through our forms, and we never share any of the collected data with any third-party organizations.</p>
            </div>
            <div class="static-content-section mb-5">
                <h2>Third-Party Services</h2>
                <p>
                    We use Google Analytics, Google Tags Manager, and Facebook Pixel to support our market research and understand user behavior on our website.
                    <br>
                    Our team never share the collected data from these services as stated in Data Collection & Privacy section
                </p>
            </div>
            <div class="static-content-section mb-5">
                <h2>Cookies Usage</h2>
                <p>
                    Our systems use cookies to provide the best user experience possible, also the third-party services mentioned above use cookies and sessions.
                    <br>
                    Cookies are saved on your device for a short time (30 days) to enhance your browsing experience.
                    <br>
                    Sessions are stored on our servers for a shorter time.
                </p>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
