<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'commentId',
        'userId',
        'text',
        'isMainComment',
        'repliedCommentIds'


    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
}

    public function post(): BelongsTo{
        return $this->belongsTo(Post::class, 'commentId');
    }
}
