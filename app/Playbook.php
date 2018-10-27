<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playbook extends Model{
    
	protected $table = 'playbook';
	protected $fillable = ['error','resolution','comments'];
	protected $primaryKey = 'id';
	public $timestamps = true;

}
