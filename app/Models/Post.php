<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Mengaktifkan fitur factory untuk model ini
    
    /**
     * comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
        
    }
}