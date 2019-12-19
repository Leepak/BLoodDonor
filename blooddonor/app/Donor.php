<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'user_id', 'image', 'firstname', 'lastname', 'gender','dob',  'blood_id','district_id','city_id', 'phone', 'email',
        'status'
    ];

    public $timestamps=true;

    protected $table='donors';



    /**
     * Get the bloodgroup that owns the donor.
     */
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

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
