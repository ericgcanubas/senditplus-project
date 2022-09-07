<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles,LogsActivity;

    protected static $logAttributes = ['lastname','firstname','company','contact_no','street_address','city','country','zipcode','status','avatar','password'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "Users";
    protected $fillable = [
        'lastname',
        'firstname',
        'company',
        'contact_no',
        'street_address',
        'city',
        'country',
        'zipcode',
        'subscription_type',
        'status',
        'email',
        'avatar',
        'username',
        'password',
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
}
