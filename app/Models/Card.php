<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'status',
        'used_at',
        'user_id'
    ];

    protected $dates = [
        'used_at',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->user_id =Auth::user()->id;
            $model->number = rand(10000000, 99999999);
            $model->status = true;
        });
    }
}
