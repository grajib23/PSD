<?php

namespace frontendcontroller;
use BaseController;
use View;
use HnakiHelpers;

class UserlistController extends BaseController{
  
    public function registrationlistmodule() {
    	$userListJSON = HnakiHelpers::index();
      return View::make('useregistrationlist')
      	->with('userListJSON',$userListJSON);
    }
}
