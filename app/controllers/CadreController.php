<?php

class CadreController extends \BaseController {
	public function index()
	{
		$result=Cadre::get();
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}
	public function store()
	{
		try{
			Cadre::create( Input::json()->all() );
			return Response::json(["messgae"=>'Cadre created'],200);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function show($id)
	{
		$result=Cadre::find($id);
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

	public function update($id)
	{
		try{
			$result=Cadre::find($id);
			if($result){
				$result->fill( Input::json()->all() );
				$result->update();
				return Response::json(["messgae"=>'Cadre updated'],200);
			}
			return Response::json(["messgae"=>'not found'],404);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function destroy($id)
	{
		$result=Cadre::find($id);
		if($result) {
			$result->delete();
			return Response::json(["messgae"=>'Cadre deleted'],200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

}