<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duties extends Model
{
    protected $table = 'pareigos';

    protected $fillable = ['name',
                            'id'];

    public $timestamps = false;

    public function worker()
    {
        return $this->hasMany('App\Workers', 'asmuo');
    }
}
