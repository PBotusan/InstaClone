<?php
namespace App\Http\Controllers;

use Auth;
use \App\User;
use Illuminate\Http\Request;

$widthOfPicture = 1000;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }
    
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }
    
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $array = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);


        if(request('image'))
        {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}")->fit($widthOfPicture, $widthOfPicture));
            $image->save();
        }

        Auth::user()->profile->update(array_merge(
            $array,
            ['image' -> $imagePath]
        ));
        
        return redirect("/profile/{$user->id}");
    }
}
