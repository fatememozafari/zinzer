<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $appends = ['avatar'];
    use HasFactory;
    protected $fillable=[
        'body',
        'avatar_path',
        'user_id'
        ];

    public function getAvatarPathAttribute($query)
    {
        if($this->attributes['avatar_path'])
            return $this->attributes['avatar_path'];

        return  'http://zinzer.ir/public/zinzer/assets/images/small/img-4.jpg';
    }
}
