<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $coursename
 * @property string $skills
 * @property string $tools
 * @property string $material
 * @property float $charge
 * @property boolean $duration
 * @property boolean $max_participants
 * @property boolean $min_participants
 * @property string $created_at
 * @property string $updated_at
 * @property Event[] $events
 * @property Interest[] $interests
 */
class Course extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['coursename', 'skills', 'tools', 'material', 'charge', 'duration', 'max_participants', 'min_participants'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function presentations()
    {
        return $this->hasMany('App\Models\Presentation', 'courseID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function interests()
    {
        return $this->belongsToMany(Customer::class, 'interests')->withPivot('comment')->withTimestamps();
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function experts()
   {
       return $this->belongsToMany(Instructor::class, 'experts')->withTimestamps();
   }

}
