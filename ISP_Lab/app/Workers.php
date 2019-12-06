<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $table = 'darbuotojai';

    protected $fillable = ['id',
                            'idarbinimo_data',
                            'adresas',
                            'tab_nr',
                            'pareigos',
                            'asmuo'];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\People', 'asmuo');
    }
    public function duty()
    {
        return $this->belongsTo('App\Duties', 'pareigos');
    }
}
