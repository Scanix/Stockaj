<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $table = 'tools';

    public  $timestamps = false;

    /**
     * Get the locations for the tool.
     */
    public function locations()
    {
        return $this->hasMany('App\Location');
    }

    /**
     * Get the current quantity available for a tool
     *
     * @return int the quantity
     */
    public  function availableQuantity()
    {
        $totalOpenedLocation = 0;

        if($this->type == 'unique')
        {
            $totalOpenedLocation = $this->locations()->where('isOver', 'false')->count();
        }

        return $this->number - $totalOpenedLocation;
    }

}
