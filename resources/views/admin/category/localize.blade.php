@include('layout.header')
<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('layout.navbar')
        <!-- Header -->
        <!-- Page content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pt-5">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Default Data (EN)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <b>Title:</b> {{$TheCategory->title}}
                        </div>
                        <div class="card-body">
                            <b>Description:</b> {!!$TheCategory->description!!}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Localize Category (AR)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.category.postLocalize' , $TheCategory->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Title</label>
                                    <input class="form-control" name="title_value" type="text" value="{{old('title') ?? $TheCategory->Locale->title_value ?? '' }}" placeholder="Please Enter Category Title in Arabic" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Description</label>
                                    <input class="form-control" name="description_value" type="text" value="{{old('description') ?? $TheCategory->Locale->description_value ?? '' }}" placeholder="Please Enter Category Description in Arabic" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    @include('layout.scripts')
</body>
</html>
