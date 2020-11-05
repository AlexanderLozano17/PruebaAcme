<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $table = 'cars';

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
        'license_plate',
        'color',
        'mark',
        'type_car_id',
        'owner_id'
    ];


    public function getOwnerCar()
    {
        return $this->belongsTo(Person::class, 'owner_id', 'id');
    }

    public function getTypeCar()
    {
        return $this->belongsTo(DataAuxiliary::class, 'type_car_id', 'id');
    }

    public function getDrive()
    {
        return $this->belongsToMany(Person::class, 'car_drives', 'car_id', 'person_id');
    }
}
 