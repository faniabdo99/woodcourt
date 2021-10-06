@include('layout.header', ['PageTitle' => 'Rates View'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>All Rates {{count($AllReviews)}}</h1>
                <table id="data-table" class="table table-striped">
                    <thead>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Review</th>
                      <th>Rate</th>
                      <th>Product</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                      @forelse ($AllReviews as $Review)
                        <tr>
                          <td>{{$Review->name}}</td>
                          <td>{{$Review->email}}</td>
                          <td>
                            @if($Review->review)
                            {{$Review->review}}
                            @else
                              N/A
                            @endif
                        </td>
                        <td>{{$Review->rate}}</td>
                        <td><a href="{{route('products.single' , $Review->Product->slug)}}">{{$Review->Product->title}}</a></td>
                        <td>
                            <select name="active" data-id="{{$Review->id}}">
                                <option value="0">Pending Approval</option>
                                <option value="1">Published</option>
                            </select>
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
    <script>
        $('select[name="active"]').change(function(){
            $(this).after('<i class="fas fa-spinner fa-spin loader-icon ml-2"></i>');
            //Grab the review id
            let ReviewID = $(this).data('id');
            let PublishedID = $(this).val();
            let This = $(this);
            //Perform ajax request
            $.ajax({
                url: '{{route('admin.reviews.postEdit')}}',
                method:'POST',
                data:{
                    'review_id': ReviewID,
                    'active': PublishedID
                },
                success: function(resposne){
                    This.parent().find('i.loader-icon').remove();
                    This.after('<i class="fas fa-check text-success loader-icon ml-2"></i>');
                },
                error: function(resposne){
                    This.parent().find('i.loader-icon').remove();
                    This.after('<i class="fas fa-times text-danger loader-icon ml-2"></i>');
                }
            });
        });

    </script>
</body>
</html>
