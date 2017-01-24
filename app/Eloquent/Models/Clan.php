<?php

namespace App\Eloquent\Models;

use App\Eloquent\Relations\HasManyThroughBelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ReDraft\Acl\Eloquent\Role;
use ReDraft\Acl\Eloquent\Roles;

/**
 * App\Eloquent\Models\Clan
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $important
 * @property mixed $logo
 * @property string $type
 * @property integer $user_id
 * @property integer $clan_id
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Eloquent\Models\Sector[] $sectors
 * @property-read \App\Eloquent\Models\User $leader
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Eloquent\Models\User[] $members
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Eloquent\Models\Emitter[] $emitters
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereImportant($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereLogo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereClanId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Clan whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Clan extends Model
{
    use SoftDeletes;

    // clan type main or wing
    const TYPE_MAIN = 'Main';
    const TYPE_WING = 'Wing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'important', 'logo', 'type', 'clan_id', 'user_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * is user the clanleader
     * @param User $user
     * @return bool
     */
    public function isLeader(User $user)
    {
        return $this->leader === $user;
    }

    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }

    public function leader()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function users()
    {
        return $this->hasManyThroughBelongTo(User::class, Sector::class);
    }

    public function emitters()
    {
        return $this->hasMany(Emitter::class);
    }

    /**
     * checks if the user is an clan member with this sector
     *
     * @param User $user
     * @param Sector|null $sector
     * @return bool
     */
    public function isMember(User $user, Sector $sector = null)
    {
        // user ist no clan member with any sector
        if(!$this->users->contains($user)) {
            return false;
        }

        // sector is defined but not in this clan
        if($sector && $this !== $sector->clan) {
            return false;
        }

        // all right !
        return true;
    }

    /**
     * if clan is delete ==>
     *      delete also all emitter who was managed by this clan
     */
    // this is a recommended way to declare event handlers
    protected static function boot() {
        parent::boot();

        static::deleting(function($clan) { // before delete() method call this
            $clan->emitters()->detach();        // detach all emitters from the clan

            $clan->sectors()->detach();         // detach all sectors from this clan
            // do the rest of the cleanup...
        });
    }

    /**
     * return the name of the clan
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    public function hasManyThroughBelongTo($related, $through, $firstKey = null, $secondKey = null )
    {
        $through = new $through;
        $related = new $related;

        $firstKey  = $firstKey ?: $this->getForeignKey();
        $secondKey = $secondKey ?: $related->getForeignKey();

        return new HasManyThroughBelongsTo($related->newQuery(), $this, $through, $firstKey, $secondKey );
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }
}