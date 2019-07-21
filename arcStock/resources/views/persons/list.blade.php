@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Persons list') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Sector') }}</th>
                                    <th>{{ __('Is responsible') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @each('persons.tableLine', $persons, 'person')
                            </tbody>
                        </table>

                        {{ $persons->appends(['order' => \Illuminate\Support\Facades\Input::get('order')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection