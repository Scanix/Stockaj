@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tools list</div>

                <div class="card-body">
                    @foreach($tools as $tool)
                        <p>Name : {{ $tool->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection