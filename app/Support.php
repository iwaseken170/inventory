<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model{
    
	protected $table = 'support_contacts';
	protected $filable = ['team_name','mailing','number','comments'];
	protected $primarKey = 'id';
	public $timestamps = true;
	
}
