<?php

class DistrictController extends \BaseController {

    public function index($countryId,$id)
    {

        $result=Division::find($id);
        //dd($result);
        if($result) {
            $result = $result->districts;
            dd($result);
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

    public function store()
    {
        try{
            District::create(Input::get());
            return Response::json(["messgae"=>'District created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }


    }

    public function show($countryId,$division,$id)
    {
        $result=District::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($countryId,$divisionId,$id)
    {
        try{
            $result=District::find($id);
            if($result) {
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae" => 'District updated'], 200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($countryId,$divisionId,$id)
    {
        $result=District::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'District deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

}