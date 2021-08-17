@include('layout.header', ['PageTitle' => 'All Categories'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Categories ({{$AllCategories->count()}})</h1>
          <p>Control Your Categories Data From Here <br>
          <a class="text-success font-weight-bold" href="{{route('admin.category.getNew')}}">+ Add New</a></p>
          <table id="data-table" class="table table-striped">
            <thead>
              <th>Title</th>
              <th>Slug</th>
              <th>Parent</th>
              <th>Description</th>
              <th>Order Number</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @forelse ($AllCategories as $Category)
                <tr>
                  <td>{{$Category->title}}</td>
                  <td>{{$Category->slug}}</td>
                  <td>
                    @if($Category->type !='main')
                    {{$Category->Parent->title}}
                    @else
                      N/A
                    @endif
                  </td>
                  <td>{{$Category->ShortDescription}}</td>
                  <td>{{$Category->order_num}}</td>
                  <td>
                    <a class="text-danger font-weight-bold" href="{{route('admin.category.delete' , $Category->id)}}"><i class="fas fa-trash"></i> Delete</a>
                    <span style="visibility:hidden;">ss</span>
                    <a class="text-primary font-weight-bold mr-3" href="{{route('admin.category.getEdit', $Category->id)}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="text-info font-weight-bold mr-3" href="{{route('admin.category.getLocalize', $Category->id)}}"><i class="fas fa-spell-check"></i> Localize</a>

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
