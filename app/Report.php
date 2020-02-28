<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable =  ['signature','request_id','owner', 'inspection_date','inspection_time','contact_phone','address','email','color','chasis_number','engine_number','odometer_reading','body_integrity','vehicle_information', 'drivers_controls', 'lighting_electric', 'other_details','inspection_result','inspected_by'];

    protected $casts = [ 'details' => 'array','body_integrity' => 'array','vehicle_information' => 'array', 'drivers_controls' => 'array', 'lighting_electric' => 'array', 'other_details' => 'array'];
    
	public function request()
    {
        return $this->hasOne(User::class, 'id', 'request_id');
    }
}


