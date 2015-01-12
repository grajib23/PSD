<?php

class PostController extends \BaseController {

    public function index()
    {
        $result=Post::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            Post::create(Input::json()->all());
            return Response::json(["messgae"=>'Post created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=Post::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=Post::find($id);
            if($result){
                $result->fill(Input::json()->all());
                $result->update();
                return Response::json(["messgae"=>'Post updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=Post::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'Post deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}