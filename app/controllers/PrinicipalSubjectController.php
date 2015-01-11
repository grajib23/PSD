
<?php

class PrinicipalSubjectController extends \BaseController {

    public function index()
    {
        $result=PrinicipalSubject::get();
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            PrinicipalSubject::create(Input::get());
            return Response::json(["messgae"=>'PrinicipalSubject created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=PrinicipalSubject::find($id);
        if($result) {
            return Response::json(["data" => $result], 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=PrinicipalSubject::find($id);
            if($result){
                $result->fill(Input::get());
                $result->update();
                return Response::json(["messgae"=>'PrinicipalSubject updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=PrinicipalSubject::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'PrinicipalSubject deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}