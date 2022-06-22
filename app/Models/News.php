<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'body',
        'avatar_path',
        'user_id'
    ];

    protected $appends = ['avatar'];

    public function getAvatarPathAttribute($query)
    {
        if($this->attributes['avatar_path'])
            return $this->attributes['avatar_path'];

        return  'http://zinzer.ir/public/zinzer/assets/images/small/img-6.jpg';
    }
}
