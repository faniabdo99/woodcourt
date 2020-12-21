@include('layout.header', ['PageTitle' => 'Add New Category'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Add New Category</h1>
                <p>Control Your Site Data From Here</p>
                <form class="woodcourt-form mt-4" action="{{route('admin.category.postNew')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? ''}}" placeholder="Enter Category Title Here ..." required>
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{old('slug') ?? ''}}" placeholder="Enter Category Slug Here ..." required>
                    <label>Parent Category</label>
                    <select name="category_id" required>
                        <option value="">Choose Parent</option>
                        @forelse ($AllCategories as $Category)
                          <option value="{{$Category->id}}">{{$Category->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Description</label>
                    <textarea name="description" rows="4" placeholder="Enter Category Description Here ...">{{old('description') ?? ''}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
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
