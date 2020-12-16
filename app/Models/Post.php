<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;


    protected $fillable = [
        'title',
        'category',
        'postcover',
        'body',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    // protected static function boot() {
    //     parent::boot();
    
    //     static::creating(function ($post) {
    //         $post->slug = Str::slug($post->title);
    //     });
    // }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
}
