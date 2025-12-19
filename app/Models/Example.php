<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class Example extends Model
{
    protected $fillable = [
        'name',
        'description',
        'deadline',
        'priority',
        'status',
        'user_id'
    ];

    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
