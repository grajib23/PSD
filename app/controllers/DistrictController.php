<?php

class DistrictController extends \BaseController {

    public function index($countryId,$divisionId)
    {
        $result=Division::find($divisionId);
        if($result) {
            $result = $result->districts;
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

    public function store($countryId, $divisionId )
    {
       
        
        try{
            /*$district = new District( Input::json()->all() );
            $division = Division::find($divisionId);
            if( $division ){
                $division->districts()->save($district);
                return Response::json(["messgae"=>'District created'],200);
            }*/
            District::create(Input::json()->all());
            return Response::json(["messgae"=>'District created'],200);
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }


    }

    public function show($countryId,$division,$id)
    {
        $result=District::find($id);
        if($result) {
            return Response::json($result, 200);
        }
        return Response::json(["messgae"=>'not found'],404);
    }

    public function update($countryId,$divisionId,$id)
    {
        try{
            $result=District::find($id);
            //dd($result->toArray());
            if($result) {
                //$result->fill(Input::json()->all());
                $input = Input::json()->all();
                if($input){
                    $result->update($input);
                }else{
                    echo 'Invalid input';
                }
                 
                //$result->update();
                return Response::json(["messgae" => 'District updated'], 200);
            }else{
                return Response::json(["messgae"=>'not found'],404);
            }
        }
        catch(\Exception $e){
            return Response::json(["messgae"=>$e->getMessage()],404);
        }
    }

    public function destroy($countryId,$divisionId,$id)
    {
        $result=District::find($id);
        if($result) {
            $result->delete();
            return Response::json(["messgae"=>'District deleted'],200);
        }
        return Response::json(["messgae"=>'not found'],404);

    }

}