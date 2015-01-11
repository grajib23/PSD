<?php

class PurposeController extends \BaseController {

    public function index()
    {
        $result=Purpose::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            Purpose::create(Input::get());
            return Response::json(["messgae"=>'Purpose created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=Purpose::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=Purpose::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'Purpose updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=Purpose::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Purpose deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}