@include('layout.header', [
    'PageTitle' => 'Payment Methods',
    'Description' => 'The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwoods.',
    'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section>
        <div class="container mt-3 mb-5">
            <h1 class="brand text-center mt-5 mb-4">Payment Methods</h1>
            <div class="static-content-section mb-5">
                <h2>One Time Payment</h2>
                <p> The Wood Court offers various payment options including cash, credit cards, and installments.</p>
                    <br><br>
                    <img class="mb-2 payment-methods-image" src="{{url('public/images/payment-images/qnb.png')}}" alt="QNB"> <br>
                    <b>Cash</b>
                    <br>
                   <p>Qatar National Bank (QNB) Transfers, Cash at Showroom, Checks are also accepted.</p> 
                    <br><br>
                    <img class="mb-2 payment-methods-image" src="{{url('public/images/payment-images/credit.png')}}" alt="Credit Card"> <br>
                       <b>Credit Cards</b>
                    <br>
                    <p>You can use your credit cards (Visa, Master Card) in our showroom</p>
            </div>
            <div class="static-content-section mb-5">
                <h2>Installment Options</h2>
                <p>The Wood Court offers up to 60 months installments plans in association with the top two companies in Egypt. </p>
                    <br><br>
                    <img class="mb-2 payment-methods-image" src="{{url('public/images/payment-images/valu.png')}}" alt="ValU"> <br>
                    <b>ValU</b>
                    <br>
                   <p>Up to 60 months.</p> 
                    <br><br>
                    <img class="mb-2 payment-methods-image" src="{{url('public/images/payment-images/belcash.png')}}" alt="BelCash Egypt"> <br>
                    <b>BelCash</b>
                    <br>
                   <p>Up to 60 months.</p> 
                
            </div>
        </div>
    </section>
    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
