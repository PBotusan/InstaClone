@extends('layouts.app')

@section('content')
<div class="container">
    <form action="">
        <div class="row">
            <div class="col-8 offset-2"> 
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-left">Post Caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @if($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>
            </div> 
        </div>
        
        <div class="row">
            <label for="image" class="col-md-4 col-form-label text-md-left">Post Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            
             @if($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </form>
</div>
@endsection
