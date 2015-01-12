<?php

class RankController extends \BaseController {

	public function index()
	{
		$result=Rank::get();
		if($result) {
			return Response::json($result, 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}
	public function store()
	{
		try{
			Rank::create( Input::json()->all() );
			return Response::json(["messgae"=>'Rank created'],200);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function show($id)
	{
		$result=Rank::find($id);
		if($result) {
			return Response::json( $result , 200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

	public function update($id)
	{
		try{
			$result=Rank::find($id);
			if($result){
				$result->fill( Input::json()->all() );
				$result->update();
				return Response::json(["messgae"=>'Rank updated'],200);
			}
			return Response::json(["messgae"=>'not found'],404);
		}
		catch(\Exception $e){
			return Response::json(["messgae"=>$e->getMessage()],404);
		}
	}

	public function destroy($id)
	{
		$result=Rank::find($id);
		if($result) {
			$result->delete();
			return Response::json(["messgae"=>'Rank deleted'],200);
		}
		return Response::json(["messgae"=>'not found'],404);
	}

}