<?php

class PromotionTypeController extends \BaseController {

    public function index()
    {
        $result=PromotionType::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PromotionType::create(Input::get());
            return Response::json(["messgae"=>'PromotionType created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=PromotionType::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=PromotionType::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'PromotionType updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=PromotionType::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PromotionType deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}