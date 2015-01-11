<?php

namespace frontendcontroller;
use BaseController;
use View;

class RegistrationController extends BaseController{
  
    public function registrationmodule() {
      return View::make('registration');
    }
}
