@include('layout.header', ['PageTitle' => 'Edit Event' . $Event->title])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Edit: {{$Event->title}}</h1>
                <form class="woodcourt-form mt-4" action="{{route('admin.postEditEvent' , $Event->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? $Event->title}}" placeholder="Enter Event Title Here ..." required>
                    <label>Short Description</label>
                    <textarea name="description" rows="4" placeholder="Enter Event Description Here ...">{{old('description') ?? $Event->description}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image">
                    <img class="d-block mb-3 h-auto" src="{{$Event->imageSrc}}" width="300">
                    <label>Content</label>
                    <textarea id="editor" name="content" rows="4" placeholder="Enter Event Content Here ...">{{old('content') ?? $Event->content}}</textarea>
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
</body>

</html>
