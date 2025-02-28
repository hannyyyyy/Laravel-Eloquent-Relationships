<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class); //Menunjukkan bahwa model ini dimiliki oleh (belongsTo) satu User.
    }
}