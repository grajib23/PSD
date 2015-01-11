<?php
class DiciplineCatatgoryController extends \BaseController{

    public function index()
    {
        $result=DiciplineCatatgory::get();

        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            DiciplineCatatgory::create(Input::get());
            return Response::json(["messgae"=>'DiciplineCatatgory created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=DiciplineCatatgory::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=DiciplineCatatgory::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'DiciplineCatatgory updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=DiciplineCatatgory::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'DiciplineCatatgory deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}