<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;

class ABUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ab_users';
	protected $fillable = ['wechat_id','phone','avatar', 'play_years', 'height', 'position', 'age', 'type', 'last_ip', 'last_login'];


	/**
     * The roles that belong to the user.
     */
    public function team()
    {
        return $this->belongsToMany(Team::class, 'ab_team_player', 'player_id', 'team_id');
    }

}
