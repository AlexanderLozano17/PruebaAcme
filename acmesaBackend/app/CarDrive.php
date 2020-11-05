<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDrive extends Model
{
    protected $table = 'car_drives';

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
        'car_id',
        'person_id',
        'status'
    ];

}
