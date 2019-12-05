<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles.index', ['user' => $user,]);
    }
    
    public function edit(\App\User $user)
    {
        return view('profiles.edit', ['user' => $user,]);
    }
    
    public function update()
    {
        $data = request()->validate
        ([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        
        $user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
