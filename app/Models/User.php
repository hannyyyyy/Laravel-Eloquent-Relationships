<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Trait untuk factory
use Illuminate\Foundation\Auth\User as Authenticatable; // Model autentikasi Laravel
use Illuminate\Notifications\Notifiable; // Trait untuk notifikasi
use Laravel\Sanctum\HasApiTokens; // Trait untuk API token authentication

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;  // Menggunakan fitur API tokens, factory, dan notifikasi

     /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

     /**
     * Atribut yang disembunyikan saat serialisasi.
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
    
    /**
     * phone
     *
     * @return void
     */
    public function phone()
    {
    	return $this->hasOne(Phone::class);
    }
    
    /**
     * roles
     *
     * @return void
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role'); 
    }
}