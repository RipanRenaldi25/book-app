<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    //
    protected $fillable = ["review", "rating"];
    use HasFactory, Notifiable;
    public function Book(): BelongsTo {
        return $this->belongsTo(Book::class);
    }
}
