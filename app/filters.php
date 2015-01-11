<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

################ Delivery Module Filters ########################

Route::filter('is_superuser', function(){
	if (!Sentry::check()){
		echo 'Login required'.PHP_EOL;
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
		$superuserGroup = Sentry::findGroupByName('superuser');
		if (!$user->inGroup($superuserGroup)) return Redirect::to('/v2/delivery/admin');
	}	
});

Route::filter('is_admin', function(){
	if (!Sentry::check()){
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
	  	$superuserGroup = Sentry::findGroupByName('superuser');
		$adminGroup = Sentry::findGroupByName('admin');
		if (!$user->inGroup($superuserGroup) && !$user->inGroup($adminGroup) ) return Redirect::to('/v2/delivery/admin');
	}	
});



Route::filter('is_supervisor', function(){
	if (!Sentry::check()){
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
	  	$superuserGroup = Sentry::findGroupByName('superuser');
		$adminGroup = Sentry::findGroupByName('admin');
		$supervisorGroup = Sentry::findGroupByName('supervisor');
		if (!$user->inGroup($superuserGroup) && !$user->inGroup($adminGroup) && !$user->inGroup($supervisorGroup) ) return Redirect::to('/v2/delivery/admin');
	}	
});

Route::filter('is_deliveryPerson', function(){
	if (!Sentry::check()){
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
	    if (!$user->hasAccess('is_deliveryPerson'))
	    {
	        return Redirect::to('/v2/delivery/admin');
	    }
		    
	}	
});

Route::filter('is_restaurant_User', function(){
	if (!Sentry::check()){
	  	//return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
	    if (!$user->hasAccess('is_restaurant_User'))
	    {
	        //return Redirect::to('/v2/delivery/admin');;
	    }    
	}	
});

Route::filter('is_user', function(){
	if (!Sentry::check()){
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
	  	$superuserGroup = Sentry::findGroupByName('superuser');
		$adminGroup = Sentry::findGroupByName('admin');
		$supervisorGroup = Sentry::findGroupByName('supervisor');
		$userGroup = Sentry::findGroupByName('user');
		if (!$user->inGroup($superuserGroup) && !$user->inGroup($adminGroup) &&
		    !$user->inGroup($supervisorGroup) && !$user->inGroup($userGroup)){
		         return Redirect::to('/v2/delivery/admin');;
		}
		    
	}	
});

Route::filter('is_mobile_user', function(){
	if (!Sentry::check()){
	  	return Redirect::to('/v2/delivery/admin/login');
	}
	else{
	  	$user = Sentry::getUser();
		$userGroup = Sentry::findGroupByName('user');
		if (!$user->inGroup($userGroup)){
		    return Redirect::to('/v2/delivery/admin');;
		}
		    
	}	
});
#################### Token Filters #########################
Route::filter('mobile.auth.token',function($route, $request){

    $authenticated = false;

    $rules = array(
        'data'  => 'required|max:5000'
    );
    $input = Input::get();
    $v = Utils::checkValidation($input,$rules);
    if($v->fails()){
       //echo "invalid Input. 1 ";
    	Utils::responseAppException();
    }
    else{
    	try {
    		unset($rules);
        	$obj  = json_decode($input['data'],true);
        	$rules = array(
               'apiToken' => 'required|max:96',
               'userId'   => 'required|integer'
            );

            $v = Utils::checkValidation($obj['data'],$rules);
	        if($v->fails()){
	           //echo "invalid Input. 2";
	        	Utils::responseAppException();
	        }
	        else{
	        	
	        	if($payload = $obj['data']['apiToken'])
				{
					$userModel = Sentry::getUserProvider()->createModel();
					$mobile = "Mobile";
					$token = Token::valid()->where('api_token',$payload)
					                        ->where('client',$mobile)
					                            ->where('user_id',$obj['data']['userId'])
					                                ->first();
					if($token){
						if($token->scopeValid())
						{
							Sentry::login($token->user);
							$authenticated = true;
							//Utils::responseAppException("32");
						}
					}
					else{
						//echo "Token Not Found<br/>";
						Utils::responseAppException();
					}
				}

				if($authenticated && !Sentry::check())
				{
					Sentry::login(Auth::user());
				}
	        }
    	} 
    	catch (Exception $e) {
    	   $appException = new AppException();
           $appException->addException($e);
    	   Utils::responseAppException();
    	}
    }

    # If user Not authenticated
	if(!$authenticated)
	{
		$response = Response::json([
	            'error'   => true,
	            'message' => 'Not authenticated',
	            'status'    => 0]
	        );

		$response->header('Content-Type', 'application/json');

	    return $response;
	}

});

# mobile Log Out auth token
Route::filter('mobile.logout.auth.token',function($route, $request){

    $authenticated = false;

    $rules = array(
        'data'  => 'required|max:5000'
    );
    $input = Input::get();
    $v = Utils::checkValidation($input,$rules);
    if($v->fails()){
    	Utils::responseAppException();
    }
    else{
    	try {
    		unset($rules);
        	$obj  = json_decode($input['data'],true);
        	$rules = array(
               'apiToken' => 'required|max:96',
               'userId'   => 'required|integer'
            );

            $v = Utils::checkValidation($obj['data'],$rules);
	        if($v->fails()){
	          Utils::responseAppException();
	        }
	        else{
	        	
	        	if($payload = $obj['data']['apiToken'])
				{
					$userModel = Sentry::getUserProvider()->createModel();
					$mobile = "Mobile";
					$token = Token::valid()->where('api_token',$payload)
					                        ->where('client',$mobile)
					                            ->where('user_id',$obj['data']['userId'])
					                                ->first();
					if($token){
					  Sentry::login($token->user);
					  $authenticated = true;
					}
					else{
					  Utils::responseAppException();
					}
				}

				if($authenticated && !Sentry::check())
				{
					Sentry::login(Auth::user());
				}
	        }
    	} 
    	catch (Exception $e) {
    	   $appException = new AppException();
           $appException->addException($e);
    	   Utils::responseAppException();
    	}
    }

    # If user Not authenticated
	if(!$authenticated)
	{
		$response = Response::json([
	            'error'   => true,
	            'message' => 'Not authenticated',
	            'status'    => 0]
	        );

		$response->header('Content-Type', 'application/json');

	    return $response;
	}

});

Route::filter('web.auth.token',function($route, $request){

    $authenticated = false;

    $rules = array(
        'apiToken'     => 'required|max:96'
    );
    $input = Input::get();
    $v = Utils::checkValidation($input,$rules);
    if($v->fails()){
	  Utils::responseAppException();
    }
    else{
    	try {

        	if($payload = $input['apiToken']){
				$userModel = Sentry::getUser();
				
				$token = Token::valid()->where('api_token',$payload)
				                            ->where('client',BrowserDetect::toString())
				                                     ->first();
				if($token){
					if($token->scopeValid())
					{
						if ($userModel['id'] == $token->user_id) {
							$authenticated = true;
						}
						else{
							//Invalid User Request';
							Utils::responseAppException();
						}
				    }	
				}
				else{
					//"Token Not Found";
					//Utils::responseAppException();
				}
			}
	        
    	} 
    	catch (Exception $e) {
    		$appException = new AppException();
            $appException->addException($e);
            Utils::responseAppException();
    	}
    }
    # If user Not authenticated
	if(!$authenticated)
	{
		$response = Response::json([
	            'error' => true,
	            'message' => 'Not authenticated',
	            'code' => 401],
	            401
	        );

		$response->header('Content-Type', 'application/json');

	    return $response;
	}

});









