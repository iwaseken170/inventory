<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model{
    

   protected $table ='link';
   protected $fillable = ['application','link','comments'];
   protected $primaryKey = 'id';
   public $timestamps = true;
}
