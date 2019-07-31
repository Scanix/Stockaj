@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Report list') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
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
@endsection