<?php

class DivisionController extends \BaseController {

    public function index($id)
    {
        $result=Country::find($id);
        if($result) {
            $result = $result->divisions;
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

    public function store($id)
    {
        try{
            Division::create(Input::json()->all());
            return Response::json(["messgae"=>'Division created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }


    }

    public function show($countryId,$id)
    {
        $result=Division::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($countryId,$id)
    {
        try{
            $division=Division::find($id);
            if($division) {
                $division->fill(Input::json()->all());
                $division->update();
                return Response::json(["messgae" => 'Division updated'], 200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($countryId,$id)
    {
        $division=Division::find($id);
        if($division) {
            $division->delete();
            return Response::json(["messgae"=>'Division deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

}