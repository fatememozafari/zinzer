<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'avatar_path1',
        'avatar_path2',
        'avatar_path3',

    ];

    protected $appends = ['avatar'];

    public function getAvatarPathAttribute($query)
    {
        if($this->attributes['avatar_path'])
            return $this->attributes['avatar_path'];

        return  'http://zinzer.ir/public/zinzer/assets/images/small/img-1.jpg';
    }
}
