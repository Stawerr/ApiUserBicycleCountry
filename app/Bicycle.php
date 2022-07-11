<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bicycle extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id',
        'brand',
        'model',
        'color',
        'price'
    ];
}
