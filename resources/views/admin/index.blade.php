@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>Admin Panel</h1>
          <p>Control Your Site Data From Here</p>
          <table class="table table-striped">
            <thead>
              <th>Content Type</th>
              <th>Amount</th>
              <th>Actions</th>
            </thead>
            <tbody>
              <tr>
                <td>Events</td>
                <td>{{$EventsCount}}</td>
                <td><a class="text-success font-weight-bold" href="{{route('admin.getNewEvent')}}">+ Add New</a> <span style="visibility:hidden;">ss</span> <a class="text-primary font-weight-bold mr-3" href="{{route('admin.allEvents')}}"><i class="fas fa-edit"></i> View All</a></td>
              </tr>
              <tr>
                <td>Contact Us List</td>
                <td>{{$MessagesCount}}</td>
                <td><a class="text-primary font-weight-bold mr-3" href="{{route('admin.allMessages')}}"><i class="fas fa-edit"></i> View All</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @include('layout.scripts')
</body>

</html>
