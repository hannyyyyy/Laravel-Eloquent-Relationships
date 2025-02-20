<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; // Mengaktifkan fitur factory untuk model ini
    
    /**
     * Relasi dengan model Post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        // Sebuah komentar (Comment) dimiliki oleh satu postingan (Post)
        return $this->belongsTo(Post::class); 
    }
}