<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul_artikel', 'isi'
    ];

    protected $hidden = [];

    public function galleries()
    {

        return $this->hasMany(ArticleGallery::class, 'articles_id');
    }
}
