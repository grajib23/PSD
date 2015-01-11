<?php

namespace frontendcontroller;
use BaseController;
use View;

class DashboardController extends BaseController{
  	public function login() {
      $this->dashboardmodule();
    }
    public function dashboardmodule() {
      return View::make('dashboard');
    }
}
