<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileImage(){

        $imagePath=($this->image)? $this->image:'profiles/WeTnj1DWJgtELUvW2GK4ENiJ3vFw4q3x075meADL.png';
        return '/storage/'.$imagePath;
    }
public function followers(){
        return $this->belongsToMany(User::class);
}
    public function user(){
        return $this->belongsTo(User::class);
    }
}
