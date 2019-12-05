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
                <a href="#"> Add new Post </a>
            </div>
            <div class="d-flex">
                <div class="pr-5"c><strong>100</strong> Posts</div>
                <div class="pr-5"><strong>23K</strong> Followers</div>
                <div class="pr-5"><strong>123</strong> Following</div>l
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="http://127.0.0.1:8000/home">{{ $user->profile->url }}</a>   </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="/images/gallery1 Geeky Shots.jpg" class="w-100">
            </div>

            <div class="col-4">
                <img src="/images/gallery2 Justice Thompson.jpg" class="w-100">
            </div>

            <div class="col-4">
                <img src="/images/gallery5 Nick Hamze.jpg" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
