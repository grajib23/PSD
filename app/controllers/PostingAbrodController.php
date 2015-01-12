<?php

class PostingAbrodController extends \BaseController {

    public function index($empId)
    {
        $result=PersonalInfo::find($empId);
        if($result) {
            $result=$result->postingAbrods;
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        $inputs = Input::json()->all();
        foreach ($inputs as $key => $value ) {
            try{
            PostingAbrod::create( $value );
            }
            catch(\Exception $e){
                return Response::json(["messgae"=>$e->getMessage()],404);
            }
        }
        return Response::json(["messgae"=>'PostingAbrod created'],200);
    }

    public function show($empId,$id)
    {
        $result=PostingAbrod::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($empId,$id)
    {
        try{
            $result=PostingAbrod::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'PostingAbrod updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($empId,$id)
    {
        $result=PostingAbrod::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PostingAbrod deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}