<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{

    use Sluggable;

    protected $fillable = ['title'];

    public function posts(){
        return $this->belongsToMany(
            Post::class,
            'posts_tags',
            'tag_id',
            'post_id'

        );
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
