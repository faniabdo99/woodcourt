@include('layout.header', [
'PageTitle' => 'Payment Methods',
'Description' => 'The Wood Court creates rich & luxurious floors, kitchens, pergolas, and more. We use a combination of innovative designs, professional manufacturing teams, and the highest quality natural hardwoods.',
'ogType' => 'Website'
])

<body>
    @include('layout.navbar')
    
    <section>
        <div class="container">
            <h1 class="brand text-center">Pament Methods</h1>
            <div class="row in-store-payment">
                <div class="col">
                    <h3 class="text-center">In-Store Payment Methods</h3>
                    <div class="d-flex ">
                        <div class="d-flex align-items-center">
                            <img  class="w-50" src="{{url('public/images')}}/payment-images/qnb-2.png" alt="">
                            <p>With QNB’s e-Commerce Payment Gateway, accepting online card payments is safe.</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <img  class="w-50 mt-3 mr-2" src="{{url('public/images')}}/payment-images/visa_2.png" alt="">
                            <p>With QNB’s e-Commerce Payment Gateway, accepting online card payments is safe.</p>
                        </div>


                    </div>

                </div>
                <div class="col">
                    <h3>Installment Payment Options</h3>
                </div>
            </div>

        </div>

    </section>





    @include('layout.scripts')
    @include('layout.footer')
</body>
</html>