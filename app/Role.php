<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $fillable = [  
		'name', 'label',   
	];  

    public function permissions(){  
    	return $this->belongsToMany(\App\Permission::class);  
    } 

    //checks if the the user has the received role
    public function hasPermission($permission){
        
            if($this->permissions->contains('name',$permission->name)){
                return true;
            }
        // return false;
    }

}
