<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'first_name',
        'last_name',
        'birth_date',
    ];

}
