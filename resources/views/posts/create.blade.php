@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/post" enctype="multipart/form-data">

        @csrf

        <div class="form-group row ">
            <div class=" col-4 offset-4">
                <h1>Add A New Post</h1>
            </div>
        </div>
    <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>

            <div class="col-md-6">
                
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                @error('caption')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
    
                <div class="col-md-6">
                    
                    <input id="image" type="file" class=" form-control-file" name="image">
                    @error('image')
                           <strong>{{ $message }}</strong> 
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add New Post') }}
                        </button>
                    </div>
                </div>
    </form>
</div>
@endsection
