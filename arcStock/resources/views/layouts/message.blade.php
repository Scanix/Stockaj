@if (Session::has('error'))
    <div class="container">
        <div class="alert alert-danger">
            <strong>Error!</strong> {!! Session::get('error') !!}
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="container">
        <div class="alert alert-success">
            <strong>Success!</strong> {!! Session::get('success') !!}
        </div>
    </div>
@endif