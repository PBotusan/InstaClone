@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image}}" class="w-100">            
        </div>
        <div>
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 50px;">
                </div>
                <div>
                    <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->userName}} </a></div>
                </div>
            </div>

            <hr>
            <p><a href="/profile/{{ $post->user->id }}">{{ $post->caption}}</a>  </p>
        </div>
    </div>
</div>
@endsection
