<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personID
 * @property integer $eventID
 * @property string $created_at
 * @property string $updated_at
 * @property string $comment
 * @property Extra[] $extras
 * @property Event $event
 * @property Person $person
 */
class Participation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['comment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extras()
    {
        return $this->hasMany('App\Models\Extra', 'participationID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function presentation()
    {
        return $this->belongsTo('App\Models\Presentation', 'presentationID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'personID');
    }
}
