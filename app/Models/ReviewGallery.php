<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'review_id', 'foto'
    ];

    protected $hidden = [];

    public function review()
    {

        return $this->belongsTo(Review::class, 'review_id', 'id');
    }
    public function getFotoAttribute($value)
    {

        return url('storage/' . $value);
    }
}
