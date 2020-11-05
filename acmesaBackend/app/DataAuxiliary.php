<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAuxiliary extends Model
{
    protected $table = 'data_auxiliary';

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
        'code',
        'definition',
        'description'
    ];

}
