<?php

namespace App\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RedRaft\Acl\Eloquent\Role;

/**
 * App\Eloquent\Models\Sector
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property integer $x
 * @property integer $y
 * @property string $notice
 * @property string $lineId
 * @property string $rank
 * @property integer $clan_id
 * @property integer $user_id
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Eloquent\Models\Clan $clan
 * @property-read \App\Eloquent\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereNotice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereLineId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereRank($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereClanId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Sector whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sector extends Model
{
    use SoftDeletes;

    // game ranks
    const RANK_LEADER       = 'cl';
    const RANK_DEPUTY       = 'stv';
    const RANK_CHIEF        = 'bfh';
    const RANK_COMMANDER    = 'cmd';

    const TYPE_ALL = 'def & off';
    const TYPE_DEF = 'defence';
    const TYPE_OFF = 'offence';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'x', 'y', 'notice', 'lineId', 'whatsapp', 'user_id', 'clan_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
/*
    public function rank()
    {
        return $this->hasOne(Role::class, 'id', 'rank');
    }
*/
    public function clan()
    {
        return $this->belongsTo(Clan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
