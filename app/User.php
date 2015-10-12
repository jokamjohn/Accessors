<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'first_name', 'last_name','username', 'expires_at', 'explodes_at', 'gets_mad_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes to be mutated to dates (Turned into Carbon dates instances)
     * @var array
     */
    protected $dates = [
      'created_at',
        'updated_at',
        'expires_at',
    ];
    /**Accessor
     *
     * Always capitalize the first name when retrieved
     * @param $value
     * @return string
     */
    public function getFirstName($value)
    {
        return ucfirst($value);
    }

    /**Accessor
     *
     * Always capitalize the last name when retrieved
     * @param $value
     * @return string
     */
    public function getLastName ($value)
    {
        return ucfirst($value);
    }

    /**Mutator
     *
     * Always capitalize the username before saying it to the database
     * @param $value
     */
    public function setUsernameAttribute ($value)
    {
        $this->attributes['username'] = ucfirst($value);
    }
}
