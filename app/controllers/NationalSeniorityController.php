<?php

class NationalSeniorityController extends \BaseController {

    public function index()
    {
        $result=NationalSeniority::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            //dd(Input::get());
            NationalSeniority::create(Input::get());
            return Response::json(["messgae"=>'NationalSeniority created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=NationalSeniority::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=NationalSeniority::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'NationalSeniority updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=NationalSeniority::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'NationalSeniority deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}