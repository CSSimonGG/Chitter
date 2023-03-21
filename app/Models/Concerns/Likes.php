<?php

namespace App\Models\Concerns;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Likes
{
    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
