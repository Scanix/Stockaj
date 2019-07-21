@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daily locations list') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Date') }}</th>
                                <th>{{ __('Tool') }}</th>
                                <th>{{ __('Person') }}</th>
                                <th>{{ __('Is over') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td><input type="text" value="{{ Carbon\Carbon::today() }}" disabled></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            @each('locations.tableLine', $locations, 'location')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection