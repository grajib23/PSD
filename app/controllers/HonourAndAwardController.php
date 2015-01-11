<?php

class HonourAndAwardController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        //dd($result);
        if($result) {
            $result=$result->honourandawards;
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            HonourAndAward::create(Input::get());
            return Response::json(["messgae"=>'HonourAndAward created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($empId,$id)
    {
        $result=HonourAndAward::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=HonourAndAward::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'HonourAndAward updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($empId,$id)
    {
        $result=HonourAndAward::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'HonourAndAward deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}