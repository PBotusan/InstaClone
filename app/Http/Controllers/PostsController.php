<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    
    // data array met caption en image wat je op je profiel kunt opslaan.
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        
        //je moet ingelogd met een user zijn om te kunnen posten
        // linkt user met post
        auth()->user()->posts()->create($data);        
        dd(request()->all());
    }
    
}
