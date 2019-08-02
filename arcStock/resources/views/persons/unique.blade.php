@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Opened locations of the person') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('Created at') }}</th>
                                    <th>{{ __('Tool') }}</th>
                                    <th>{{ __('Person') }}</th>
                                    <th>{{ __('Is over') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @include('locations.createInline', ['uniquePerson' => $person])
                                @each('locations.tableLine', $person->locations->where('isOver', false), 'location')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">{{ __('Closed locations of the person') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('Created at') }}</th>
                                    <th>{{ __('Tool') }}</th>
                                    <th>{{ __('Person') }}</th>
                                    <th>{{ __('Is over') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @each('locations.tableLine', $person->locations->where('isOver', true), 'location')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection