<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Registration extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_id', 'atribut'
    ];

    protected $hidden = [];

    public function event()
    {

        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    
}
