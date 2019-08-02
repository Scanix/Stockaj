@extends('layouts.app')
@section('page_title')
    {{ __('Reports') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    <h1 class="mt-3">{{ __('Reports') }}</h1>
                    <p class="lead">Here you can consult the reports of each day.</p>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Report list') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>{{ __('Day') }}</th>
                                        <th>{{ __('Locations number') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @each('reports.tableLine', $reports, 'report')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection