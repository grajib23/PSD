<?php

class UserController extends \BaseController {

    public function index()
    {
        $result=User::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            User::create( Input::json()->all() );
            return Response::json(["messgae"=>'User created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=User::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=User::find($id);
            if($result){
                $result->fill( Input::json()->all() );
                $result->update();
                return Response::json(["messgae"=>'User updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=User::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'User deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}