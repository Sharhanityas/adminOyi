<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug', 'judul_event', 'tanggal_event', 'deskripsi'
    ];

    protected $hidden = [];

    public function galleries()
    {

        return $this->hasMany(EventGallery::class, 'event_id');
    }
}
