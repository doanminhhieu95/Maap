<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    //
    Protected $table = "map";
    protected $fillable = [
        'id',
        'url'
    ];
}
