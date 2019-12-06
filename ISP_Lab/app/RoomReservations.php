<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomReservations extends Model
{
    protected $table = 'kambariu_rezervacijos';

    protected $fillable = ['id',
        'data_nuo',
        'data_iki',
        'patvirtinta',
        'komentaras',
        'darbuotojas',
        'klientas',
        'kambarys'];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Customers', 'klientas');
    }
    public function worker()
    {
        return $this->belongsTo('App\Workers', 'darbuotojas');
    }
    public function room()
    {
        return $this->belongsTo('App\Rooms', 'kambarys');
    }
}
