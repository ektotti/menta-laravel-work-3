<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $guarded = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}
