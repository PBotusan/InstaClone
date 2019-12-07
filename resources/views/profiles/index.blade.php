@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
        <div class="col-3 p-5" >
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"> 
                <h1>{{ $user->userName }}</h1>

                <follow-button></follow-button>

                @can('update', $user->profile)
                    <a href="{{ route('post.create') }}"> Add new Post </a>
                @endcan
            </div>
            @can('update', $user->profile)
            <!-- kan alleen inloggen als user van de profiel de ingelogde persoon is-->
                <a href="/profile/{{ $user->id }}/edit"> Edit Profile </a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"c><strong>{{ $user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"><strong>23K</strong> Followers</div>
                <div class="pr-5"><strong>123</strong> Following</div>l
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a>   </div>
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
