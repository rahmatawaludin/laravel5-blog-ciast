<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Mass assignment field
     * @var array
     */
    protected $fillable = ['title', 'content', 'category_id'];

    /**
     * inverse one-to-many
     * @return [type] [description]
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
