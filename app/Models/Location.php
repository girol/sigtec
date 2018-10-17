<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    # Relationships
    public function manager()
    {
        return $this->belongsTo('App\User', 'manager_id');
    }
}
