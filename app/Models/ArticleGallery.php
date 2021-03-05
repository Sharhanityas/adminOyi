<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'articles_id', 'foto_article'
    ];
    protected $hidden = [];
    public function article()
    {

        return $this->belongsTo(Article::class, 'articles_id', 'id');
    }
    public function getFotoArticleAttribute($value)
    {

        return url('storage/' . $value);
    }
}
