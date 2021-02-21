@include('layout.header', ['PageTitle' => 'Edit Product' . $Product->title])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Edit: {{$Product->title}}</h1>
                <form class="woodcourt-form mt-4" action="{{route('admin.product.postEdit' , $Product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? $Product->title}}" placeholder="Enter Product Title Here ..." required>
                    <label>Serial Number</label>
                    <input type="text" name="serial_number" value="{{old('serial_number') ?? $Product->serial_number}}" placeholder="Enter Product Serial Number Here ..." required>
                    <label>Category</label>
                    <select name="main_category_id" required>
                        <option value="">Choose Category</option>
                        @forelse ($AllCategories as $Category)
                          <option @if($Product->main_category_id == $Category->id) selected @endif value="{{$Category->slug}}">{{$Category->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Sub Category</label>
                    <select name="category_id" required>
                        <option value="">Choose Sub Category</option>
                        @forelse ($AllSubCategories as $SCategory)
                          <option @if($Product->category_id == $SCategory->id) selected @endif value="{{$SCategory->slug}}">{{$SCategory->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Description</label>
                    <textarea id="editor" name="description" rows="4" placeholder="Enter Category Description Here ...">{{old('description') ?? $Product->description}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <b>Current Image</b>
                    <img class="d-block" src="{{$Product->ThumbPath}}" width="200" alt="">
                    <label>Gallery Images ({{$Product->Gallery->count()}})</label>
                    <input type="file" name="gallery[]" multiple>
                    <label>Wood Type</label>
                    <input type="text" class="form-control mb-3" value="{{$Product->wood_type}}" name="wood_type" placeholder="Wood Type">
                    <label>Size</label>
                    <input type="text" class="form-control mb-3" value="{{$Product->size}}" name="size" placeholder="Size">
                    <label>Color</label>
                    <input type="text" class="form-control mb-3" value="{{$Product->color}}" name="color" placeholder="Color">
                    <label>Home</label>
                    <input type="text" class="form-control mb-3" value="{{$Product->home}}" name="home" placeholder="Home">
                    <label>Design</label>
                    <input type="text" class="form-control mb-3" value="{{$Product->design}}" name="design" placeholder="Design">
                    <label>Additioal Notes</label>
                    <textarea class="form-control mb-3" placeholder="Note" name="note">{{$Product->note}}</textarea>
                    <label>Featured</label>
                    <input type="checkbox" @if($Product->is_featured == 1) checked @endif name="is_featured" value="1"> <br>
                    <label>Promot On Homepage</label>
                    <input type="checkbox" @if($Product->is_on_homepage == 1) checked @endif name="is_on_homepage" value="1"> <br>
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
</body>
</html>
