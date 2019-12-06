<?php
namespace App\Http\Controllers;

use Auth;
use \App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }
    
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    
    public function update(User $user)
    {
        $array = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        
        Auth::user()->profile->update($array);
        
        return redirect("/profile/{$user->id}");
    }
}
