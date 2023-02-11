<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

/**
 * @property integer $id
 * @property integer $salutationID
 * @property string $lastname
 * @property string $name
 * @property string $organisation
 * @property string $street
 * @property string $ZIP_code
 * @property string $city
 * @property string $comment
 * @property string $customer_since
 * @property string $supplier_since
 * @property string $instructor_since
 * @property string $created_at
 * @property string $updated_at
 * @property CommItem[] $commItems
 * @property Expert[] $experts
 * @property Extra[] $extras
 * @property Instructor[] $instructors
 * @property Interest[] $interests
 * @property Participation[] $participations
 * @property Salutation $salutation
 */
class Person extends Model
{
    use HasChildren;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'persons';

    /**
     * @var array
     */
    protected $fillable = ['salutationID', 'lastname', 'name', 'organisation', 'street', 'ZIP_code', 'city', 'comment', 'customer_since', 'supplier_since', 'instructor_since', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commItems()
    {
        return $this->hasMany('App\Models\CommItem', 'PersonID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experts()
    {
        return $this->hasMany('App\Models\Expert', 'personID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extras()
    {
        return $this->hasMany('App\Models\Extra', 'supplierID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instructors()
    {
        return $this->hasMany('App\Models\Instructor', 'personID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interests()
    {
        return $this->hasMany('App\Models\Interest', 'personID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participations()
    {
        return $this->hasMany('App\Models\Participation', 'personID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salutation()
    {
        return $this->belongsTo('App\Models\Salutation', 'salutationID');
    }
}
