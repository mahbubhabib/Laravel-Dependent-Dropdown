<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * @var string 
     */ 
    protected $table = 'states'; 

    /** 
    * @var array 
    */ 
    protected $fillable = ['country_id','title'];
}
