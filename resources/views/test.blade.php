@include('layout.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @forelse($AllProducts as $Product)
            <div class="bg-info p-4 m-4">
                <a href="{{ route('products.single', [$Product->slug, $Product->id]) }}">{{ $Product->title }}</a>
                <ul class="d-flex w-100">
                    <li><a href="{{$Product->ThumbPath}}" target="_blank"><img class="mr-2" loading="lazy" width="250" height="250" src="{{$Product->ImagePath}}"></a></li>
                    @forelse($Product->Gallery as $Gallery)
                    <li><a href="{{$Gallery->ThumbPath}}" target="_blank"><img class="mr-2" loading="lazy" width="250" height="250" src="{{$Gallery->ImagePath}}"></a></li>
                    @forelse($Product->Gallery as $Gallery)
                    <li><a href="{{$Gallery->ThumbPath}}" target="_blank"><img class="mr-2" loading="lazy" width="250" height="250" src="{{$Gallery->ThumbPath}}"></a></li>
                    @empty
                    @endforelse
                    @empty
                    @endforelse
                </ul>
            </div>
            @empty
            @endforelse
            <div class="text-center mb-5 pb-5">
                {{$AllProducts->links()}}
            </div>
            </div>

        </div>
    </div>
