@include('layout.header', ['PageTitle' => 'Cross Sell' . $Product->title])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Add Cross Sell Items: {{$Product->title}}</h1>
                <form class="woodcourt-form mt-4" action="{{route('admin.product.postCrossSell' , $Product->id)}}" method="post">
                    @csrf
                    <div class="row">
                        @forelse ($AllProducts as $SingleProduct)
                            <div class="col-lg-4">
                                <p class="bg-light p-1"><input class="d-inline w-auto" type="checkbox" @if(in_array($SingleProduct->id , $Product->SimilarProducts->pluck('item_id')->toArray())) checked @endif name="item_id[]" value="{{$SingleProduct->id}}" id="item-{{$SingleProduct->id}}"> <label class="d-inline" for="item-{{$SingleProduct->id}}">{{$SingleProduct->title}}</label></p>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
</body>
</html>
