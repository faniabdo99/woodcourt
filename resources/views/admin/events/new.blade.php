@include('layout.header', ['PageTitle' => 'Add New Event'])
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
                    <label>Type</label>
                    <select name="type" required>
                        <option value="">Choose Type</option>
                        <option value="article">Article / Blog</option>
                        <option value="event">Event</option>
                    </select>
                    <div class="d-none event-date-group">
                        <label>Event Date (Not Required)</label>
                        <input type="date" name="event_date" value="{{old('event_date') ?? ''}}" placeholder="Enter Event Date Here ...">
                    </div>
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

</body>

</html>
