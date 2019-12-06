<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'klientai';

    protected $fillable = ['id',
        'nepageidaujamas',
        'neigalusis',
        'asmuo'];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo('App\People', 'asmuo');
    }
}
