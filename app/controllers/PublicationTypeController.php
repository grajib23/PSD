<?php

class PublicationTypeController extends \BaseController {

    public function index()
    {
        $result=PublicationType::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PublicationType::create(Input::get());
            return Response::json(["messgae"=>'PublicationType created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=PublicationType::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=PublicationType::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'PublicationType updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=PublicationType::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PublicationType deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}