<?php

namespace frontendcontroller;
use BaseController;
use View;

class LoginController extends BaseController{
  
    public function loginmodule() {
      return View::make('login');
    }
}


