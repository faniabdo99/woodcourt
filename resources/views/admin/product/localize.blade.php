@include('layout.header')
<style>
    .localize-current-data{
        background: #f7f7f7;
        padding: 15px;
        margin-bottom: 25px;
    }
    .localize-current-data h3{
        margin-bottom: 30px;
    }
</style>
<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('layout.navbar')
        <!-- Header -->
        <!-- Page content -->
        <div class="container-fluid mb-5 py-5">
            <div class="row">
                <div class="col-xl-6 pt-5">
                    <div class="localize-current-data">
                        <h3>Default Data (EN)</h3>
                        <p><b>Title:</b> {{$TheProduct->title}}</p>
                        <p><b>Description:</b> {!!$TheProduct->description!!}</p>
                        <p><b>Wood Type:</b> {!!$TheProduct->wood_type!!}</p>
                    </div>
                </div>
                <div class="col-xl-6 pt-5">
                    <h3 class="mb-5">Localize Category (AR)</h3>
                    <form action="{{route('admin.product.postLocalize' , $TheProduct->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Title</label>
                            <input class="form-control" name="title_value" type="text" value="{{old('title') ?? $TheProduct->Locale->title_value ?? '' }}" placeholder="Please Enter Product Title in Arabic" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <textarea class="form-control" name="description_value" type="text" placeholder="Please Enter Product Description in Arabic" required>{{old('description') ?? $TheProduct->Locale->description_value ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Wood Type</label>
                            <input class="form-control" name="type_value" type="text" value="{{old('type') ?? $TheProduct->Locale->type_value ?? '' }}" placeholder="Please Enter Product Type in Arabic" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Translation</button>
                    </form>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
    <!-- Argon Scripts -->
    @include('layout.scripts')
</body>
</html>
