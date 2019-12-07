<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        //als een image bestaat pak je gebruikte image.
        //bestaat image niet pak het uit images de placeholder image
        $imagePath = ($this->image) ?  $this->image : 'profile/Geenfoto.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
