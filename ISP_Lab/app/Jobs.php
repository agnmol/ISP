<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'darbai';

    protected $fillable = ['pavadinimas',
        'data',
        'aprasymas',
        'vykdomas',
        'id',
        'priskyre',
        'atlieka'];

    public $timestamps = false;

    public function assign()
    {
        return $this->belongsTo('App\Workers', 'priskyre');
    }
    public function worker()
    {
        return $this->belongsTo('App\Workers', 'atlieka');
    }

}
