<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * users
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');  // Relasi many-to-many dengan tabel pivot 'user_role'
        // belongsToMany(User::class, 'user_role') → Menunjukkan bahwa model ini memiliki hubungan many-to-many dengan model User, menggunakan tabel pivot user_role.
    }
}