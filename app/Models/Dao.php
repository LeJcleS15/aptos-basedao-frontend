<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Dao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_initialized'
    ];


}
