<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 7:11 AM
 */
class GroundController extends \BaseController {

    public function index()
    {
        $result=Ground::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            Ground::create( Input::json()->all() );
            return Response::json(["messgae"=>'Ground created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=Ground::find($id);
        if($result) {
            return Response::json( $result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=Ground::find($id);
            if($result){
                $result->fill( Input::json()->all() );
                $result->update();
                return Response::json(["messgae"=>'Ground updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=Ground::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Ground deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}