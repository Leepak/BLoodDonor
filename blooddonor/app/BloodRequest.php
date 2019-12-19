<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patientname', 'gender','blood_id','district_id','city_id','diseases','amount','date','hospital','phone'
    ];

    public $timestamps=true;

    protected $table='requests';



    public function Blood()
    {
        return $this->belongsTo('App\Blood');
    }

    /**
     * Get the district that owns the donor.
     */
    public function District()
    {
        return $this->belongsTo('App\District');
    }

    public function City()
    {
        return $this->belongsTo('App\City');
    }
}
