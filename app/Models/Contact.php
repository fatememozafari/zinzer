<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'number',
        'address',
        'email',
        'body',
        'avatar_path'
    ];
    protected $appends = ['avatar'];

    public function getAvatarPathAttribute($query)
    {
        if($this->attributes['avatar_path'])
            return $this->attributes['avatar_path'];

        return  'http://zinzer.ir/public/zinzer/assets/images/small/0003.jpg';
    }
}
