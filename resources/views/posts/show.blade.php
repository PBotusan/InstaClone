@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image}}" class="w-100">            
        </div>
        
        <div>
            <h3>{{ $post->user->userName}}</h3>
            <h3>{{ $post->caption}}</h3>
        </div>
    </div>
</div>
@endsection
