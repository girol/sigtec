<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    # Relationships #
    /**
     * Person who opens the ticket
     */ 
    public function reporter()
    {
        return $this->belongsTo('App\User', 'reporter_id');
    }

    /**
     *  Person who is working on the ticket 
     */
    public function designated()
    {
        return $this->belongsTo('App\User', 'designated_id');
    }
}
