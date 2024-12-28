<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';

    /**
     * Override fillable property data.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'body',
        'published_date',
        'is_published'
    ];

    protected $appends = ['image_url'];

    /**
     * Get Added Image Attribute URL.
     *
     * @return string|null
     */
    protected $hidden = [
        'image',
    ];
    public function getImageUrlAttribute(): array
    {

        $image = json_decode($this->image);

        if (!is_array($image)) {
            return [];
        }
    
        $imageUrls = [];
    
        foreach ($image as $image) {
            $imageUrl = url('') . "/storage/blog/" . $image;
            if (Str::contains($imageUrl, '/blog/blog/')) {
                $imageUrl = str_replace('/blog/blog/', '/blog/', $imageUrl);
            }
            
            $imageUrls[] = $imageUrl;
        }
    
        return $imageUrls;
    }
    public function brand(): object
    {
        return $this->belongsTo(Brand::class)->select('id', 'name', 'about');
    }

}
