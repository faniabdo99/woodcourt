@include('layout.header', ['PageTitle' => 'Very Cool Site'])
<body>
    @include('layout.navbar')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Add New Event</h1>
                <p>Control Your Site Data From Here</p>
                <form class="woodcourt-form mt-4" action="{{route('admin.postNewEvent')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Title</label>
                    <input type="text" name="title" value="{{old('title') ?? ''}}" placeholder="Enter Event Title Here ..." required>
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{old('slug') ?? ''}}" placeholder="Enter Event Slug Here ..." required>
                    <label>Short Description</label>
                    <textarea name="description" rows="4" placeholder="Enter Event Description Here ...">{{old('description') ?? ''}}</textarea>
                    <label>Image</label>
                    <input type="file" name="image" required>
                    <label>Content</label>
                    <textarea id="editor" name="content" rows="4" placeholder="Enter Event Content Here ...">{{old('content') ?? ''}}</textarea>
                    <button type="submit" class="icon-button mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout.scripts')
    <script type="text/javascript" src="{{url('public')}}/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#editor'
        });
    </script>
    @include('layout.footer')
</body>

</html>
