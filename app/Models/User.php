<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function durood()
    {
        return $this->hasMany(Durood::class);
    }

    public function durood_latest(){
        return $this->hasMany(Durood::class)->orderBy('id', 'desc');
    }

    public function durood_sum()
    {
        return $this->hasMany(Durood::class)->sum('durood');
    }

    public function attendance(){
        return $this->hasMany(Attendance::class)->orderBy('id', 'desc');
    }

    public function total_durood(){
        return $this->hasMany(Durood::class)->whereRaw('MONTH(created_at) = ?',[date('m')])->sum('durood');
    }
    
}