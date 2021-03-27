@include('layout.header', ['PageTitle' => 'Add New Limited Edition Category'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Add New Category</h1>
                <p>Control Your Site Data From Here</p>
                <form class="woodcourt-form mt-4" action="{{route('admin.limited.postNew')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? ''}}" placeholder="Enter Product Title Here ..." required>
                    <label>Description</label>
                    <textarea name="description" rows="4" placeholder="Enter Product Description Here ...">{{old('description') ?? ''}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <label>Flag (Not Required)</label>
                    <input type="text" name="flag" value="{{old('flag') ?? ''}}" placeholder="Enter your flag here (Limited, Customizable ... etc)">
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
    <script type="text/javascript">
        //Auto Create Clean Slug...
        var SlugValue;
        $('input[name="title"]').keyup(function() {
            SlugValue = $(this).val().replace(/\s+/g, '-').replace(/^\[(\d+)\]\[(\s+)\]$/, "-").toLowerCase();
            //Assign the value to the input
            $('input[name="slug"]').val(SlugValue);
        });
    </script>
</body>
</html>
