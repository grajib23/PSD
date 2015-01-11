<?php

class LeaveTypeController extends \BaseController {

    public function index()
    {
        $result=LeaveType::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            LeaveType::create(Input::get());
            return Response::json(["messgae"=>'LeaveType created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=LeaveType::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=LeaveType::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'LeaveType updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=LeaveType::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'LeaveType deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}