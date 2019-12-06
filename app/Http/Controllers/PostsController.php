<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    // inlog is verplicht
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    // data array met caption en image wat je op je profiel kunt opslaan.
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        
        //store image public.. maak in public een mapje met een opgeslagen iamge..
        // slaat het op in local/storage/uploads/'url vna image'
        $imagePath = request('image')->store('uploads', 'public');
        
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        
        //je moet ingelogd met een user zijn om te kunnen posten
        // linkt user met post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);        
        //return terug naar authorized profiel
        return redirect('/profile/' . auth()->user()->id);
    }
    
    public function show(\App\Post $post)
    {
        return view('posts.show', [
           'post' => $post, 
        ]);        
    }
}
