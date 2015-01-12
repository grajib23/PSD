<?php

class PostingRecordController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        if($result) {
            $result=$result->postingrecords;
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PostingRecord::create(Input::json()->all());
            return Response::json(["messgae"=>'PostingRecord created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($empId,$id)
    {
        $result=PostingRecord::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=PostingRecord::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'PostingRecord updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($empId,$id)
    {
        $result=PostingRecord::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PostingRecord deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}