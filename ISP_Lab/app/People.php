<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'asmenys';

    protected $fillable = ['prisijungimo_vardas',
                            'slaptazodis',
                            'vardas',
                            'pavarde',
                            'telefono_numeris',
                            'el_pastas',
                            'asmens_kodas',
                            'gimimo_data',
                            'id'];

    public $timestamps = false;

    public function worker()
    {
        return $this->hasMany('App\Workers', 'asmuo');
    }
}
