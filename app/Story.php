<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title', 'body', 'category_id', 'age', 'author', 'image_url', 'image_name', 
        'story_duration', 'user_id', 'is_premium'
    ];

    //Relationship start

    /*
     * A Story belong to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /*
     * A Story belong to a category
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    /*
     * A Story has many comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /*
     * A Story has many reactions
     */
    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    //Relationship end
}