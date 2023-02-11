<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;
use Illuminate\Support\Carbon;

class Instructor extends Person
{
    use HasFactory;
    use HasParent;

    public static function boot()
    {
        // saving creation time for Instructor in extra column
        static::creating(function($model) {
            $model->instructor_since = Carbon::now('Europe\Rome');
        });

        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->whereNotNull('instructor_since');
        });
    }
}
