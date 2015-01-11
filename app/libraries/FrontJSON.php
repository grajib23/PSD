<?php

namespace HnakiHelpers;

use BaseController;
use View;

class FrontJSON extends BaseController{
   
   public static function index()
	{
		$usersmodel = \UsersModel::where('is_active',1)->get();
		return json_encode($usersmodel);
	}
    
   
}