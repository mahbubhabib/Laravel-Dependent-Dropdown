<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * @var string 
     */ 
    protected $table = 'cities'; 

    /** 
    * @var array 
    */ 
    protected $fillable = ['state_id','title'];
}
