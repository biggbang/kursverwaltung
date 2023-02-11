<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $courseID
 * @property string $event_name
 * @property string $start_date
 * @property string $end_date
 * @property string $dailygrid_start
 * @property string $dailygrid_end
 * @property string $starttime_firstday
 * @property string $endtime_lastday
 * @property boolean $participants_qty
 * @property float $charge
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property Course $course
 * @property Instructor[] $instructors
 * @property Participation[] $participations
 */
class Presentation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_name', 'start_date', 'end_date', 'dailygrid_start', 'dailygrid_end', 'starttime_firstday', 'endtime_lastday', 'participants_qty', 'charge'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'courseID');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function instructors()
   {
       return $this->belongsToMany(Instructor::class, 'instructors')->withTimestamps();
   }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participations()
    {
        return $this->belongsToMany(Participation::class);
    }
}
