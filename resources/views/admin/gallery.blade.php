@include('layout.header', ['PageTitle' => 'Admin Panel'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Images</h1>
          <ul>
              @forelse($AllProducts as $Product)
                <li>
                    <h5>{{$Product->title}}</h5>
                    <ul>
                        @forelse($Product->Gallery() as $Image)
                            <li><a href="{{route('gallerydelete' , $Image->id)}}" target="_blank"><img src="{{$Image->ThumbPath}}"></a></li>
                        @empty
                        @endforelse
                    </ul>
                </li>
              @empty
              @endforelse
          </ul>
          
        </div>
      </div>
    </div>
    @include('layout.scripts')
</body>

</html>
