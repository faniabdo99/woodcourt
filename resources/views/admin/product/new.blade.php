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
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{old('slug') ?? ''}}" placeholder="Enter Product Slug Here ..." required>
                    <label>Category</label>
                    <select name="main_category_id" required>
                        <option value="">Choose Category</option>
                        @forelse ($AllCategories as $Category)
                          <option value="{{$Category->id}}">{{$Category->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Sub Category</label>
                    <select name="category_id" required>
                        <option value="">Choose Sub Category</option>
                        @forelse ($AllSubCategories as $SCategory)
                          <option value="{{$SCategory->id}}">{{$SCategory->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Description</label>
                    <textarea name="description" id="editor" rows="4" placeholder="Enter Product Description Here ...">{{old('description') ?? ''}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <label>Gallery Images</label>
                    <input type="file" name="gallery[]" multiple>
                    <label>Wood Type</label>
                    <input type="text" class="form-control mb-3" name="wood_type" placeholder="Wood Type">
                    <label>Size</label>
                    <input type="text" class="form-control mb-3" name="size" placeholder="Size">
                    <label>Color</label>
                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                    <label>Home</label>
                    <input type="text" class="form-control mb-3" name="home" placeholder="Home">
                    <label>Design</label>
                    <input type="text" class="form-control mb-3" name="design" placeholder="Design">
                    <label>Additioal Notes</label>
                    <textarea class="form-control mb-3" placeholder="Note" name="note"></textarea>
                    <input type="checkbox" name="is_featured" value="1"> Featured <br>
                    <input type="checkbox" name="is_on_homepage" value="1"> Promot On Homepage <br>
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