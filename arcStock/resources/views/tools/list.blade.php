@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tools list') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
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

                    <div class="d-flex justify-content-center">
                        {{ $tools->appends(['order' => \Illuminate\Support\Facades\Input::get('order')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection