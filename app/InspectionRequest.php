<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionRequest extends Model
{
    use SoftDeletes;
    protected $table = 'requests';

    protected $fillable =  ['organisation_id','type', 'details', 'agreed_inspection_date','agreed_inspection_time', 'contact_person','contact_phone','requester','requester_email','status'];

    protected $casts = [ 'details' => 'array'];
    
	public function organisation()
    {
        return $this->hasOne(User::class, 'id', 'organisation_id');
    }
}


