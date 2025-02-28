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
        'password', // Menyembunyikan password agar tidak ditampilkan saat model dikonversi ke array/JSON
        'remember_token',
    ];

     /**
     * Atribut yang akan di-cast ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Mengubah format timestamp untuk email_verified_at
    ];
    
        /**
     * Relasi one-to-one dengan model Phone.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phone()
    {
        return $this->hasOne(Phone::class); // Satu user memiliki satu nomor telepon
    }
    
    /**
     * Relasi many-to-many dengan model Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role'); // User bisa memiliki banyak role
    }
}
