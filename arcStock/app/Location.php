<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    public  $timestamps = false;

    /**
     * Get the person record associated with the location.
     */
    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    /**
     * Get the tool record associated with the location.
     */
    public function tool()
    {
        return $this->belongsTo('App\Tool');
    }
}
