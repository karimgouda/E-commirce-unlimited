<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetalis extends Model
{
    use HasFactory;

    protected $fillable=['id', 'first_name', 'last_name', 'email', 'phone', 'address_one', 'address_tow', 'country', 'city', 'status', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
