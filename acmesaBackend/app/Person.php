<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'number_document',
        'first_name',
        'second_name',
        'last_name',
        'address',
        'telephone',
        'city'
    ];


    public function getMyCars()
    {
        return $this->hasMany(Car::class, 'owner_id', 'id');
    }

    public function getCarDrive()
    {
        return $this->belongsToMany(Person::class, 'car_drives', 'person_id', 'car_id');
    }
}
