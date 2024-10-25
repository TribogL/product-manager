<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'name';
    protected $primaryKey = 'id';
    public $timestamps = true;
    //protected $guarded = [];

    protected $fillable = [
        'name',
        'description'
        // Otros campos...
    ];

    // protected $hidden = [
    // ];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    /

    /
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    /

    /
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    /

    /
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    /

    /
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
