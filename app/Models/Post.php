<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'postBody',
        'topic',
    ];

    protected $attribute = [
        'likes' => 1,
        'dislikes' => 1,
        'totalUniqueViews' => 0,
        'walesUniqueViews' => 0,
        'englandUniqueViews' => 0,
        'scotlandUniqueViews' => 0,
        'maleUniqueViews' => 0,
        'femaleUniqueViews' => 0,
        'otherUniqueViews' => 0,
    ];

    public function users()
    {
        return $this->belongsto('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
