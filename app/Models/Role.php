<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

     /**
     * Relasi dengan model User (Many-to-Many).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        // Relasi many-to-many antara Role dan User melalui tabel pivot 'user_role'
        return $this->belongsToMany(User::class, 'user_role'); 
    }
}