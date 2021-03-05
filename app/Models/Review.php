<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kata', 'detail'
    ];

    protected $hidden = [];

    public function galleries()
    {

        return $this->hasMany(ReviewGallery::class, 'review_id');
    }
}
