@extends('layouts.app')
@section('page_title')
    {{ __('Tools') }}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <h1 class="mt-3">{{ __('Tools') }}</h1>
                <p class="lead">Here you can add new tool and select one.</p>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Tools list') }}</div>

                <div class="card-body">
                    <form method="GET" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" value="{{ Request::get('search') }}" placeholder="Search tools">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Type') }}</th>
                                    <th>{{ __('Quantity') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @include('tools.createInline')
                            @each('tools.tableLine', $tools, 'tool')
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $tools->appends(['order' => \Illuminate\Support\Facades\Input::get('order'), 'search' => \Illuminate\Support\Facades\Input::get('search')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection