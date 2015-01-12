<?php

class PayscaleController extends \BaseController {

    public function index()
    {
        $result=PayScale::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PayScale::create(Input::json()->all());
            return Response::json(["messgae"=>'PayScale created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=PayScale::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=PayScale::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'PayScale updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=PayScale::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PayScale deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}