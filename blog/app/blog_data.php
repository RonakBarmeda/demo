<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_data extends Model
{
    protected $fillable = [
     'title','slug','user_id','description'
    ];
	
	public function users(){
		return $this->belongsTo("App\\User","user_id");
	}
}
