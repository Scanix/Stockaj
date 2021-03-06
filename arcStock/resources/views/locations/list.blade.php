@extends('layouts.app')
@section('page_title')
    {{ __('Locations') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    <h1 class="mt-3">{{ __('Locations') }}</h1>
                    <p class="lead">Here you can register new locations for the tools.</p>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Daily locations list') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>{{ __('Created at') }}</th>
                                        <th>{{ __('Tool') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                        <th>{{ __('Person') }}</th>
                                        <th>{{ __('Is over') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @isset($add)
                                    @include('locations.createInline')
                                @endisset
                                @each('locations.tableLine', $locations, 'location')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @isset($oldLocations)
                <div class="card mt-5">
                    <div class="card-header">{{ __('Always opened and old locations list') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>{{ __('Created at') }}</th>
                                        <th>{{ __('Tool') }}</th>
                                        <th>{{ __('Quantity') }}</th>
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
                @endisset
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