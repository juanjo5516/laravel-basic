<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use App\User;

class Post extends Model
{
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140);
    }
    

}
