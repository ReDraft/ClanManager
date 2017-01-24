<?php

namespace App\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Eloquent\Models\Emitter
 *
 * @property integer $id
 * @property integer $clan_id
 * @property integer $name
 * @property integer $number
 * @property integer $x
 * @property integer $y
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Eloquent\Models\Clan $clan
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereClanId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Eloquent\Models\Emitter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Emitter extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'number', 'x', 'y', 'clan_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * which clan controls the emitter
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clan()
    {
        return $this->belongsTo(Clan::class);
    }
}
