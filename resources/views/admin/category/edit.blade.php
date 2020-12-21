@include('layout.header', ['PageTitle' => 'Edit Category' . $Category->title])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Edit: {{$Category->title}}</h1>
                <form class="woodcourt-form mt-4" action="{{route('admin.category.postEdit' , $Category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? $Category->title}}" placeholder="Enter Category Title Here ..." required>
                    <label>Parent Category</label>
                    <select name="category_id" required>
                        <option value="">Choose Parent</option>
                        @forelse ($AllCategories as $PCategory)
                          <option @if($Category->category_id == $PCategory->id ) selected @endif value="{{$PCategory->id}}">{{$PCategory->title}}</option>
                        @empty
                        @endforelse
                    </select>
                    <label>Description</label>
                    <textarea name="description" rows="4" placeholder="Enter Category Description Here ...">{{old('description') ?? $Category->description}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <b>Current Image</b>
                    <img class="d-block" src="{{$Category->ThumbPath}}" width="200" alt="">
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
</body>
</html>
