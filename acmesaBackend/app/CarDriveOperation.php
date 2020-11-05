<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDriveOperation extends Model
{
    protected $table = 'car_drive_operation';

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
        'type_operation_id',
        'car_drive_id',
    ];
}
