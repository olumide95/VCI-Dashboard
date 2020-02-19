<?php


namespace App;


use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
       return $this->hasRole('Admin');
    }

    public function isOrganisation()
    {
       return $this->hasRole('Organisation');
    }


    public function organisation()
    {
        return $this->hasOne(organisation::class, 'user_id', 'id');
    }

    public function request()
    {
        return $this->hasMany(Request::class, 'organisation_id', 'id');
    }


}