<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_category';

    /**
     * Override fillable property data.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'order',
        'blog_id'
    ];
    protected $hidden = [
        'blog_id',
    ];
    public function vip()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}