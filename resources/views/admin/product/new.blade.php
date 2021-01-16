@include('layout.header', ['PageTitle' => 'Add New Product'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Add New Product</h1>
                <p>Control Your Site Data From Here</p>
                <form class="woodcourt-form mt-4" action="{{route('admin.product.postNew')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? ''}}" placeholder="Enter Product Title Here ..." required>
                    <label>Serial Number</label>
                    <input type="text" name="serial_number" value="{{old('serial_number') ?? ''}}" placeholder="Enter Product Serial Number Here ..." required>
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{old('slug') ?? ''}}" placeholder="Enter Product Slug Here ..." required>
                    <label>Category</label>
                    <select name="category_id" required>
                        <option value="">Choose Category</option>
                        @forelse ($AllCategories as $Category)
                          <option value="{{$Category->id}}">{{$Category->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Description</label>
                    <textarea name="description" id="editor" rows="4" placeholder="Enter Product Description Here ...">{{old('description') ?? ''}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <label>Gallery Images</label>
                    <input type="file" name="gallery[]" multiple>
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
