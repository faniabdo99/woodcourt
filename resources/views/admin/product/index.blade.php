@include('layout.header', ['PageTitle' => 'All Products'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Products ({{$AllProducts->count()}})</h1>
          <p>Control Your Categories Data From Here <br>
          <a class="text-success font-weight-bold" href="{{route('admin.product.getNew')}}">+ Add New</a></p>
          <table id="data-table" class="table table-striped">
            <thead>
              <th>#</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Image</th>
              <th>Category</th>
              {{-- <th>Description</th> --}}
              <th>Actions</th>
            </thead>
            <tbody>
              @forelse ($AllProducts as $Product)
                <tr>
                  <td>{{$Product->id}}</td>
                  <td>{{$Product->title}}</td>
                  <td>{{$Product->slug}}</td>
                  <td><img width="100" height="100" src="{{$Product->ThumbPath}}"></td>
                  <td>{{$Product->Category->title}}</td>
                  {{-- <td>{{strip_tags($Product->ShortDescription)}}</td> --}}
                  <td>
                    <a class="text-danger font-weight-bold" href="{{route('admin.product.delete' , $Product->id)}}"><i class="fas fa-trash"></i> Delete</a>
                    <span style="visibility:hidden;">ss</span>
                    <a class="text-primary font-weight-bold mr-3" href="{{route('admin.product.getEdit', $Product->id)}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="text-success font-weight-bold mr-3" href="{{route('admin.product.getCrossSell', $Product->id)}}"><i class="fas fa-sitemap"></i> Cross Sell</a>
                    <a class="text-success font-weight-bold mr-3" href="{{route('admin.product.getLocalize', $Product->id)}}">Localize</a>
                    </td>
                </tr>
              @empty
                <p>No Events Added Yet</p>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @include('layout.scripts')
</body>

</html>
