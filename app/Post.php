<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
  // public $PrimaryKey = 'id'; //
	public function user(){
		return $this->belongsTo('App\User');

	}
}
