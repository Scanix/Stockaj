<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectors';

    public  $timestamps = false;

    /**
     * Get the persons for the sector.
     */
    public function persons()
    {
        return $this->hasMany('App\Person');
    }
}
