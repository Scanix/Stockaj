@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add tools</div>

                <div class="card-body">
                   <form method="POST" action="{{ route('tools.store') }}">
                       @csrf

                       <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                           <div class="col-md-6">
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               @error('name')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                           <div class="col-md-6">
                               <input id="type" type="number" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required>

                               @error('type')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                           <div class="col-md-6">
                               <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required>

                               @error('number')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Register') }}
                               </button>
                           </div>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection