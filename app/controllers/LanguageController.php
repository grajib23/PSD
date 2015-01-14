<?php

class LanguageController extends \BaseController {

	public function index()
	{
		$result=Language::get();
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

	public function store()
	{
		try{
			Language::create( Input::json()->all() );
			return Response::json(["messgae"=>'Language created'],200);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}


	}


	public function show($id)
	{
		$result=Language::find($id);
		if($result) {
			return Response::json( $result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);

	}


	public function update($id)
	{
		try{
			$result=Language::find($id);
			if($result){
				$result->fill( Input::json()->all() );
				$result->update();
				return Response::json(["messgae"=>'Language updated'],200);
			}
			return Response::json(["messgae"=>'not found'],404);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function destroy($id)
	{
		$result=Language::find($id);
		if($result) {
			$result->delete();
			return Response::json(["messgae"=>'Language deleted'],200);
		}
		return Response::json(["messgae"=>'not found'],404);

	}

}