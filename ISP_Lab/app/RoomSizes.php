<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSizes extends Model
{
    protected $table = 'kambariu_dydziai';

    protected $fillable = ['id',
        'name'];

    public $timestamps = false;

    public function room(){
        return $this->hasMany('App\Rooms', 'dydis');
    }
}
