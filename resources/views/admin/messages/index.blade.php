@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h1>All Messages ({{$AllMessages->count()}})</h1>
          <table id="data-table" class="table table-striped">
            <thead>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Date</th>
            </thead>
            <tbody>
              @forelse ($AllMessages as $Message)
                <tr>
                  <td>{{$Message->name}}</td>
                  <td>{{$Message->email}}</td>
                  <td>{{$Message->message}}</td>
                  <td>{{$Message->created_at->format('Y - M - d')}}</td>
                </tr>
              @empty
                <p>No Messages Recived Yet</p>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @include('layout.scripts')
</body>

</html>
