<?php

class PostingTypeController extends \BaseController {

    public function index()
    {
        $result=PostingType::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PostingType::create(Input::json()->all());
            return Response::json(["messgae"=>'PostingType created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=PostingType::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=PostingType::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'PostingType updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=PostingType::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PostingType deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}