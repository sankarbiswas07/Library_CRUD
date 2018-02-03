<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     //table name
     protected $table = 'stocks';
     //Primary key
     public $primaryKey = 'book_id';
     //foreign key
     public $foreignKey = 'admin_id';
     //Timestamp
     public $timestamp = true;
 
     public function user(){
         return $this->belongsTo('App\User','admin_id');
     }
}
