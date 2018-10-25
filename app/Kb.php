<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kb extends Model{
    

    protected $table = 'Kb';
    protected $primaryKey = 'id';
    protected $fillable = ['kb_id','title','product','comments'];
    public $timestamps = true;
}
