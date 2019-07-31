@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tools list') }}</div>

                <div class="card-body">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
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

                    {{ $tools->appends(['order' => \Illuminate\Support\Facades\Input::get('order')])->links() }}
                    <a href="{{ route('tools.create') }}"><button class="btn btn-block">{{ __('Add tool') }}</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection