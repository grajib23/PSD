<?php

class SubjectController extends \BaseController {

    public function index()
    {
        $result=Subject::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            Subject::create(Input::json()->all());
            return Response::json(["messgae"=>'Subject created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=Subject::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=Subject::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'Subject updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=Subject::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Subject deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}