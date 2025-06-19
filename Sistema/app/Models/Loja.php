<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'logo',
        'contato',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
