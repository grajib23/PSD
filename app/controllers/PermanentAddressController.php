<?php

class PermanentAddressController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        if($result) {
            $permanet_add_id=$result->permanet_add_id;
            $result=Address::find($permanet_add_id);
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store($empId)
    {
        try{
           $address= Address::create(Input::get());
            $result=PersonalInfo::find($empId);

            $result->permanet_add_id=$address->id;
            $result->update();

            return Response::json(["messgae"=>'PermanentAddress created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($empId,$id)
    {
        $result=Address::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=Address::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'PermanentAddress updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($empId,$id)
    {
        $result=Address::find($id);
        if($result) {
            $personalInfo=PersonalInfo::find($empId);
            $personalInfo->permanet_add_id=null;
            $personalInfo->save();
            $result->delete();
            return Response::json(["messgae"=>'PermanentAddress deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}