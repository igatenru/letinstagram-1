<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, foreignKey:'owner_id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, foreignKey:'post_id');
    }

    public function hashtags(): BelongsToMany
    {
        return $this->belongsToMany(
            hashtags::class,
            table:'hashtag_post',
            foreignPivotKey:'post_id',
            relatedPivotKey:'hashtag_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
