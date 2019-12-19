<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $fillable = [
        'blood_group','status'
    ];

    public $timestamps=true;

    protected $table='blood';
    public function Donor()
    {
        return $this->hasOne('Donor');
    }
}
