@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daily opened locations list') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Tool') }}</th>
                                <th>{{ __('Person') }}</th>
                                <th>{{ __('Is over') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('locations.createInline')
                            @each('locations.tableLine', $locations, 'location')
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Always opened and old locations list') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Tool') }}</th>
                                <th>{{ __('Person') }}</th>
                                <th>{{ __('Is over') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @each('locations.tableLine', $oldLocations, 'location')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').select2({
                theme: 'bootstrap4',
            });
        });
    </script>
@endsection