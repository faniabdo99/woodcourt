@include('layout.header', ['PageTitle' => 'All Products'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Products ({{$AllPhotos->count()}})</h1>
          <p>Control Your Categories Data From Here <br>
          <a class="text-success font-weight-bold" href="{{route('admin.photos.getNew')}}">+ Add New</a></p>
          <table id="data-table" class="table table-striped">
            <thead>
              <th>Category</th>
              <th>Image</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @forelse ($AllPhotos as $Photo)
                <tr>
                  <td>{{$Photo->Category->title}}</td>
                  <td><a target="_blank" href="{{$Photo->ImagePath}}"><img height="100" class="w-auto" src="{{$Photo->ThumbPath}}" ></a></td>
                  <td>
                    <a class="text-danger font-weight-bold" href="{{route('admin.photos.delete' , $Photo->id)}}"><i class="fas fa-trash"></i> Delete</a>
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
