<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    //
    Protected $table = "menu";
    protected $fillable = [
        'id',
        'name'
    ];

    public function hinhanh(){
        return $this->HasMany('App\hinhanh','idmenu','id');
    }
}
