<?php

namespace frontendcontroller;
use BaseController;
use View;
use PSD\PubHelpers;

class DashboardController extends BaseController{
  	public function login() {
      $this->dashboardmodule();

    }
    public function dashboardmodule() {
        $rankJSON = \RankController:: index();
        $divisionJSON = \AddressController::index();
      return View::make('dashboard')
      	->with('divisionJSON',$divisionJSON)
        ->with('rankJSON',$rankJSON);
    }
}
