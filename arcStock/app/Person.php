<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public  $timestamps = false;

    /**
     * Get the sector of the person.
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector');
    }
}
