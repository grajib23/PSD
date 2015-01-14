<?php
class AdditionalQualificationController extends  \BaseController{


    public function index()
    {
        $result=AdditionalQualification::get();
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }
    public function store()
    {
        try{
            AdditionalQualification::create( Input::json()->all() );
            return Response::json(["messgae"=>'AdditionalQualification created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function show($id)
    {
        $result=AdditionalQualification::find($id);
        if($result) {
            return Response::json( $result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($id)
    {
        try{
            $result=AdditionalQualification::find($id);
            if($result){
                $result->fill( Input::json()->all() );
                $result->update();
                return Response::json(["messgae"=>'AdditionalQualification updated'],200);
            }
            return Response::json(["messgae"=>'not found'],404);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        $result=AdditionalQualification::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'AdditionalQualification deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

}