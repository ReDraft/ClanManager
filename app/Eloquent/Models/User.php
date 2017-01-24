<?php

namespace App\Eloquent\Models;

use App\Eloquent\Relations\HasManyThroughBelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use ReDraft\Acl\Contracts\HasRolesInterface;
use ReDraft\Acl\Eloquent\Role;
use ReDraft\Acl\Eloquent\Roles;

/**
 * App\Eloquent\Models\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $notice
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Eloquent\Models\Sector[] $sectors
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Eloquent\Models\Emitter[] $emitters
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereNotice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{

    use SoftDeletes, Notifiable;

    /** preferred languages */
    const LANG_DEU  = 1;
    const LANG_GBR  = 2;
    const LANG_FRA  = 3;
    const LANG_ITA  = 4;
    const LANG_HRV  = 5;
    const LANG_RUS  = 6;
    const LANG_ESP  = 7;

    public static $languages = [
        self::LANG_DEU => 'deutsch',
        self::LANG_GBR => 'english',
        self::LANG_FRA => 'französisch',
        self::LANG_ITA => 'italienisch',
        self::LANG_HRV => 'kroatisch',
        self::LANG_RUS => 'russisch',
        self::LANG_ESP => 'spanisch'
    ];
    /** ------------------- */

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'language', 'notice', 'password', 'locale'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * which sectors play this user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }

    /**
     * respective in which clans are the user member through the sectors
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function clans()
    {
        return $this->hasManyThroughBelongTo(Clan::class, Sector::class);
    }

    /**
     * which emitter inspect this user e.g. weekly
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function emitters()
    {
        return $this->belongsToMany(Emitter::class);
    }

    /**
     * return all inspections hwo was made by the current user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * /
    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }

    /**
     * if user is delete ==>
     *      delete also all sectors who was played by this user
     */
    // this is a recommended way to declare event handlers
    protected static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
            $user->sectors()->delete();
            // do the rest of the cleanup...
        });
    }

    public function hasManyThroughBelongTo( $related, $through, $firstKey = null, $secondKey = null )
    {
        $through = new $through;
        $related = new $related;

        $firstKey  = $firstKey ?: $this->getForeignKey();
        $secondKey = $secondKey ?: $related->getForeignKey();

        return new HasManyThroughBelongsTo( $related->newQuery(), $this, $through, $firstKey, $secondKey );
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
