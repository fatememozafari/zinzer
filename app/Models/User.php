<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_name',
        'license_number',
        'membership_number',
        'signature_number',
        'Responsible_side',
        'trend',
        'CEO_name',
        'CEO_lastname',
        'CEO_id',
        'CEO_phone_number',
        'boss_name',
        'boss_lastname',
        'boss_id',
        'boss_phone_number',
        'member_name',
        'member_lastname',
        'member_id',
        'member_phone_number',
        'Laboratory_address',
        'Laboratory_phone_number',
        'office_address',
        'office_phone_number',
        'company_email',
        'IDPay',
        'Insurance_number',
        'password',
        'password_confirmation',
        'Accept_rules',
        'mobile',
        'email_verified_at',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getFullName()
    {
        return $this->f_name . ' '.$this->l_name;
    }
}
