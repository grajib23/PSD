<?php

namespace frontendcontroller;
use BaseController;
use View;
use \PubHelpers\LibraryJSON;

class UserlistController extends BaseController{
  
    public function registrationlistmodule() {
    	$userListJSON = \User::get();
      return View::make('useregistrationlist')
      	->with('userListJSON',$userListJSON);
    }
}
