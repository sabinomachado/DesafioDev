<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $connection = 'mysql';
    protected $table = 'estados';
    protected $dates= ['created_at', 'updated_at'];
    protected $primaryKey = 'id';


    public $incrementing = false;

    protected $fillable = [
        'uf'
    ];


    protected $hidden = [
        'remember_token',
    ];
}
