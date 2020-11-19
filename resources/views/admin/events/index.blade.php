@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Events ({{$AllEvents->count()}})</h1>
          <p>Control Your Events Data From Here <br>
            <a class="text-success font-weight-bold" href="{{route('admin.getNewEvent')}}">+ Add New</a></p>
          <table id="data-table" class="table table-striped">
            <thead>
              <th>Title</th>
              <th>Slug</th>
              <th>Views</th>
              <th>Visitors</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @forelse ($AllEvents as $Event)
                <tr>
                  <td>{{$Event->title}}</td>
                  <td>{{$Event->slug}}</td>
                  <td>{{views($Event)->count()}}</td>
                  <td>{{views($Event)->unique()->count()}}</td>
                  <td>
                    <a class="text-danger font-weight-bold" href="{{route('admin.deleteEvent' , $Event->id)}}"><i class="fas fa-trash"></i> Delete</a>
                    <span style="visibility:hidden;">ss</span>
                    <a class="text-primary font-weight-bold mr-3" href="{{route('admin.getEditEvent', $Event->id)}}"><i class="fas fa-edit"></i> Edit</a></td>
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
