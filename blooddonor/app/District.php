<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'district_name', 'status'
    ];

    public $timestamps=true;

    protected $table='districts';



    public function City()
    {
        return $this->hasMany('City');
    }

    public function Donor()
    {
        return $this->hasOne('Donor');
    }
}
