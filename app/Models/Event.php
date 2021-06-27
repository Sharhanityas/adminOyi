<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug', 'judul_event', 'tanggal_event', 'waktu', 'tempat', 'deskripsi','link'
    ];

    protected $hidden = [];

    public function galleries()
    {

        return $this->hasMany(EventGallery::class, 'event_id');
    }

    public function speakers()
    {

        return $this->hasMany(Speaker::class, 'event_id');
    }
}
