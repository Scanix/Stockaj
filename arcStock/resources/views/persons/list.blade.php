@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Persons list') }}</div>

                    <div class="card-body">
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
                            {{ $persons->appends(['order' => \Illuminate\Support\Facades\Input::get('order')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection