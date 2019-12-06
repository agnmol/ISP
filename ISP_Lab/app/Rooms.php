<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'kambariai';

    protected $fillable = ['id',
        'kaina',
        'balkonas',
        'rukanciu_zonoje',
        'dydis'];

    public $timestamps = false;

    public function size()
    {
        return $this->belongsTo('App\RoomSizes', 'dydis');
    }
}
