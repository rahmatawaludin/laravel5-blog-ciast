<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    /**
     * one-to-many relation to post
     * @return [type] [description]
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
