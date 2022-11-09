<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hashtag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(
            Post::class,
            table:'hashtag_post',
            foreignPivotKey:'hashtag_id',
            relatedPivotKey:'post_id');
    }
}
