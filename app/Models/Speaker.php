<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Speaker extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_id', 'nama', 'email', 'telepon', 'foto', 'deskripsi'
    ];

    protected $hidden = [];

    public function event()
    {

        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
    // public function galleries()
    // {
    //     return $this->hasMany(Speaker::class, 'id');
    // }

    public function getFotoAttribute($value)
    {

        return url('storage/' . $value);
    }
}
