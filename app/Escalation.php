<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalation extends Model{
    
    protected $table = 'escalation';
    protected $fillable = ['appplication','support_ba','support_clrk','prod_assignment','comments'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
