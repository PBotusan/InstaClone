<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    //store de followers
    public function store(User $user)
    {
        //todo: fix following error
        //return auth()->user()->following()->toggle($user->profile);
    }
}
