<?php

class PresentAddressController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        if($result) {
            $present_add_id=$result->present_add_id;
            $result=Address::find($present_add_id);
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store($empId)
    {
        try{
            $address= Address::create(Input::json()->all());
            $result=PersonalInfo::find($empId);

            $result->present_add_id=$address->id;
            $result->update();

            return Response::json(["messgae"=>'PresentAddress created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($empId,$id)
    {
        $result=Address::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=Address::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'PresentAddress updated'],200);
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
            $personalInfo->present_add_id=null;
            $personalInfo->save();
            $result->delete();
            return Response::json(["messgae"=>'PresentAddress deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}