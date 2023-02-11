<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $participationID
 * @property string $item
 * @property string $date
 * @property float $charge
 * @property integer $supplierID
 * @property string $created_at
 * @property string $updated_at
 * @property Participation $participation
 * @property Person $person
 */
class Extra extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['item', 'date', 'charge'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participation()
    {
        return $this->belongsTo('App\Models\Participation', 'participationID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'supplierID');
    }
}
