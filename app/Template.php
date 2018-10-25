<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model{
    
    protected $table = 'template';
    protected $fillable = ['concern','response','comments'];
    protected $primaryKey = 'id';
    public $timeStamps = true;
}
