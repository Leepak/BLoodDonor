<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
       'districtID','city_name'
    ];

    public $timestamps=true;

    protected $table='city';

    public function Donor()
    {
        return $this->hasOne('Donor');
    }
}
