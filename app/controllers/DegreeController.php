<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 6:56 AM
 */
class DegreeController  extends \BaseController  {

    public function index()
    {
        $result=Degree::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            Degree::create(Input::get());
            return Response::json(["messgae"=>'Degree created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=Degree::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=Degree::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'Degree updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=Degree::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Degree deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}