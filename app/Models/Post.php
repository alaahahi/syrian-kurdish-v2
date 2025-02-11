<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;


class Post extends Model
{
    use HasFactory,Translatable;

    protected $fillable = ['title', 'content', 'slug', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
    ];
    protected $translatable = ['title', 'content', 'slug']; // أضف الحقول القابلة للترجمة

   
}
