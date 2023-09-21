<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'published',
        'published_at',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'published' => 'boolean',
        'published_at' => 'datetime'
    ];

    public static array $rules = [
        'title' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string', 'max:10000'],
        'published_at' => ['nullable', 'string', 'date'],
        'published' => ['nullable', 'boolean'],
    ];
    protected $dates = [
        'published_at',
    ];
}
