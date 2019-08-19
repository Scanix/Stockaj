<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public  $timestamps = false;

    /**
     * Get the locations of the person
     */
    public function locations()
    {
        return $this->hasMany('App\Location')->orderBy('created_at', 'desc');
    }

    /**
     * Get the sector of the person.
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector');
    }
}
