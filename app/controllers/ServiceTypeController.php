<?php

class ServiceTypeController extends \BaseController {

    public function index()
    {
        $result=ServiceType::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            ServiceType::create(Input::get());
            return Response::json(["messgae"=>'ServiceType created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=ServiceType::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=ServiceType::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'ServiceType updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=ServiceType::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'ServiceType deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}