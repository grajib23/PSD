<?php

class DiscplinaryActionController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        if($result) {
            $result=$result->discplinaryactions;
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            DiscplinaryAction::create(Input::get());
            return Response::json(["messgae"=>'DiscplinaryAction created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($empId,$id)
    {
        $result=DiscplinaryAction::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=DiscplinaryAction::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'DiscplinaryAction updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($empId,$id)
    {
        $result=DiscplinaryAction::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'DiscplinaryAction deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}