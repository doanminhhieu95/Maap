<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    //
    Protected $table = "hinhanh";
    protected $fillable = [
        'id',
        'name',
        'idmenu',
        'vitri'
    ];

    public function menu(){
        return $this->belongsTo('App\menu','idmenu','id');
    }
}
