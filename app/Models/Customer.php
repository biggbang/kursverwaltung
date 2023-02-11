<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;
use Carbon\Carbon;

class Customer extends Person
{
    use HasFactory;
    use HasParent;

    public static function boot()
    {
        // saving creation time for Instructor in extra column
        static::creating(function($model) {
            $model->customer_since = Carbon::now('Europe\Rome');
        });
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->whereNotNull('customer_since');
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participations()
    {
        return $this->belongsToMany(Participation::class);
    }
}
