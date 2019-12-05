@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <div class="col-3 p-5" >
            <img src="/images/starimg.png" class="rounded-circle" style="height: 200px;" style='background-color: transparent' >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"> 
                <h1>{{ $user->userName }}</h1>
                <a href="/p/create"> Add new Post </a>
            </div>
             <a href="/profile/{{ $user->id }}/edit"> Edit Profile </a>
            <div class="d-flex">
                <div class="pr-5"c><strong>{{ $user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"><strong>23K</strong> Followers</div>
                <div class="pr-5"><strong>123</strong> Following</div>l
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="http://127.0.0.1:8000/home">{{ $user->profile->url }}</a>   </div>
        </div>

        <div class="row">
            @foreach($user->posts as $post)
            <div class="col-4 pb-4" >
                <a href="/p/{{ $post-> id}}"> 
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
            @endforeach 
        </div>
    </div>
</div>
@endsection
