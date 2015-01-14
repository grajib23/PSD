<?php

namespace frontendcontroller;
use BaseController;
use View;
use \PubHelpers\LibraryJSON;

class DashboardController extends BaseController{
  	public function login() {
      $this->dashboardmodule();

    }
    public function dashboardmodule() {
        $rankJSON =\Response::json(\Rank::get());
        $divisionJSON = LibraryJSON::getAddress();
      return View::make('dashboard')
      	->with('divisionJSON',$divisionJSON)
        ->with('rankJSON',$rankJSON);
    }
}
