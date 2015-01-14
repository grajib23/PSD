<?php

namespace frontendcontroller;
use BaseController;
use View;
use PSD\PubHelpers;

class UserlistController extends BaseController{
  
    public function registrationlistmodule() {
    	$userListJSON = \UserController::index();
      return View::make('useregistrationlist')
      	->with('userListJSON',$userListJSON);
    }
}
