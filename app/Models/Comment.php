<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class); // Komentar dimiliki oleh satu Post
        // belongsTo(Post::class) → Menunjukkan bahwa model saat ini memiliki hubungan "dimiliki oleh" (belongsTo) model Post.
        // Digunakan pada model yang memiliki foreign key yang mengarah ke model Post.
    }
}