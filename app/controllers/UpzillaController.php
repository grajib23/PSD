<?php

class UpzilaController extends \BaseController {

    public function index($countryId,$divisionId,$id)
    {
        $result=District::find($id);
        if($result) {
            $result = $result->upzillas;
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

    public function store()
    {
        try{
            Upzilla::create( Input::json()->all() );
            return Response::json(["messgae"=>'Upzilla created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }


    }

    public function show($countryId,$divisionId,$districtId,$id)
    {
        $result=Upzilla::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($countryId,$divisionId,$districtId,$id)
    {
        try{
            $result=Upzilla::find($id);
            if($result) {
                $result->fill( Input::json()->all() );
                $result->update();
                return Response::json(["messgae" => 'Upzilla updated'], 200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($countryId,$divisionId,$districtId,$id)
    {
        $result=Upzilla::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Upzilla deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

}