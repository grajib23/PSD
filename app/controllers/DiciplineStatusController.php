<?php
class DiciplineStatusController extends \BaseController{

    public function index()
    {
        $result=DiciplineStatus::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            DiciplineStatus::create(Input::get());
            return Response::json(["messgae"=>'DiciplineStatus created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=DiciplineStatus::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=DiciplineStatus::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'DiciplineStatus updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=DiciplineStatus::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'DiciplineStatus deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}