<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requester extends Model
{
	use SoftDeletes;

    protected $fillable =  ['user_id','organisation_id'];

	protected $dates = ['deleted_at'];



	public function organisation()
    {
        return $this->hasOne(Organisation::class, 'user_id', 'organisation_id');
	}
	
	public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}
