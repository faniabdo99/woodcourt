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
            <h3>What Payment Methods Can I Use?</h3>
            <p>You can pay in a variety of ways, cash on delivery (belcash ), wire transfer (credit card , QNB Bank) </p>
            <h3> QNB Bank Payment , Credit Card Payments and Checks</h3>
            <p>You can pay with qnb bank, credit card or check.</p>
            <h3>Cash on Delivery:</h3>
            <p>We also have Cash on Delivery within Egypt By <b>Baelcash and Valu</b> .</p>
        </div>

    </section>





    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>
