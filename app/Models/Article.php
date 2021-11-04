<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul_artikel', 'isi', 'slug', 'shorten_id', 'shorten_custom',
    ];

    protected $hidden = [];

    public function galleries()
    {

        return $this->hasMany(ArticleGallery::class, 'articles_id');
    }
}