<?php

class PersonalInfoController extends \BaseController {

    public function index($id)
    {
        $result=User::find($id);
        if($result) {
            $result=$result->personalInfo;
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function store($id)
    {
        try{
            PersonalInfo::create(Input::get());
            return Response::json(["messgae"=>'PersonalInfo created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }


    }


    public function show($userId,$id)
    {
        $result=PersonalInfo::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }


    public function update($userId,$id)
    {
        try{
            $result=PersonalInfo::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'PersonalInfo updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($userId,$id)
    {
        $result=PersonalInfo::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PersonalInfo deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

}