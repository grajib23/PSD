<?php

class CountryController extends \BaseController {


	public function index()
	{
		$result=Country::get();
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

	public function store()
	{
		try{
			Country::create(Input::json()->all());
			return Response::json(["messgae"=>'country created'],200);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}


	}


	public function show($id)
	{
		$result=Country::find($id);
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);

	}


	public function update($id)
	{
		try{
			$country=Country::find($id);
			if($country){
				$country->fill(Input::json()->all());
				$country->update();
				return Response::json(["messgae"=>'country updated'],200);
			}
			return Response::json(["messgae"=>'not found'],404);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function destroy($id)
	{
		$country=Country::find($id);
		if($country) {
			$country->delete();
			return Response::json(["messgae"=>'country deleted'],200);
		}
		return Response::json(["messgae"=>'not found'],404);

	}

}