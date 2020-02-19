<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organisation extends Model
{
	use SoftDeletes;

    protected $fillable =  ['user_id','name','address'];

	protected $dates = ['deleted_at'];


	public function requests()
	{
		return $this->hasMany(Request::class, 'id', 'request_id');
	}
}

	


