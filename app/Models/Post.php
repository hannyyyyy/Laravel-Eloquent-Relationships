<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
        // hasMany(Comment::class) → Menunjukkan bahwa model ini memiliki banyak (hasMany) Comment.
        // Digunakan pada model yang memiliki banyak entri di model lain yang terkait dengan foreign key.
    }
}