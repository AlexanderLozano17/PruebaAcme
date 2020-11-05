<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOperation extends Model
{
    protected $table = 'type_operations';

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
        'operation_name',
        'description'
    ];

}
