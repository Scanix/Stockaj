@extends('layouts.app')
@section('page_title')
    {{ __('Persons') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Persons list') }}</div>

                    <div class="card-body">
                        <form method="GET" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" value="{{ Request::get('search') }}" placeholder="Search persons">
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
                                        <th>{{ __('Sector') }}</th>
                                        <th>{{ __('Is responsible') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @include('persons.createInline')
                                @each('persons.tableLine', $persons, 'person')
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $persons->appends(['order' => \Illuminate\Support\Facades\Input::get('order'), 'search' => \Illuminate\Support\Facades\Input::get('search')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection