@include('layout.header', [
    'PageTitle' => 'Payment Methods',
    'Description' => 'The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwoods.',
    'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section>
        <div class="container mt-3 mb-5">
            <h1 class="brand text-center mt-5 mb-4">Pament Methods</h1>
            <div class="static-content-section mb-5">
                <h2>One Time Payment</h2>
                <p>
                    The Wood Court offers various payment options including cash, credit cards, and installments.
                    <br><br>
                    <b>Cash</b>
                    <br>
                    Qatar National Bank (QNB) Transfers, Cash at Showroom, Checks are also accepted.
                    <br><br>
                    <b>Credit Cards</b>
                    <br>
                    You can use your credit cards (Visa, Master Card) in our showroom
                </p>
            </div>
            <div class="static-content-section mb-5">
                <h2>Installment Options</h2>
                <p>
                    The Wood Court offers up to 60 months installments plans in association with the top two companies in Egypt
                    <br><br>
                    <b>ValU</b>
                    <br>
                    Up to 60 months.
                    <br><br>
                    <b>BelCash</b>
                    <br>
                    Up to 60 months.
                </p>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
