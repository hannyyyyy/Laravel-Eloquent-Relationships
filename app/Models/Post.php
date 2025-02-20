<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Mengaktifkan fitur factory untuk model ini
    
    /**
     * Relasi dengan model Comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        // Sebuah postingan (Post) bisa memiliki banyak komentar (Comment)
        return $this->hasMany(Comment::class);
        
    }
}