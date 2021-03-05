<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_id', 'gambar_event'
    ];

    protected $hidden = [];

    public function event()
    {

        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
    public function getGambarEventAttribute($value)
    {

        return url('storage/' . $value);
    }
}
