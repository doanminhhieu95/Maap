<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cautraloi extends Model
{
    //
    Protected $table = "cautraloi";
    protected $fillable = [
        'id',
        'email',
        'diachi',
        'phone',
        'traloi1',
        'traloi2',
        'traloi3',
        'traloi4',
        'traloi5',
        'traloi6',
        'traloi7'
    ];
}
