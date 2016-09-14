<?php

namespace App\Models\Employer;

use App\Models\Tag;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    use Sluggable;
    protected $fillable = ['title', 'description', 'skill', 'wage', 'phone_number', 'location'];


    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllPost()
    {
        $posts = Post::all()->where('user_id', Auth::user()->id);
//        $posts = Post::join('tags', 'tags.id', '=', 'posts.tag_id')->select('title', 'tags.name', 'location')->get();
        return $posts;
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
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
