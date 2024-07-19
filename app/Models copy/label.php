<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class label extends Model
{
    use HasFactory;

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class);
    }
}
