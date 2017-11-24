<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    
    protected $table = 'ab_team';
    
    /**
     * Get the players for the team.
     */
    public function players()
    {
        // return $this->hasMany('ABUser', 'id', 'player_id');
    }
}
