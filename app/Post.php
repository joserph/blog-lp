<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status'
    ];

    public function user()
    {
        return $this->belongdTo(User::tag);
    }

    public function category()
    {
        return $this->belongdTo(Category::tag);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
