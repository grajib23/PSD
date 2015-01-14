<?php
namespace PubHelpers;

class LibraryJSON {
   
  public static function getAddress(){
          $response = new \stdClass();
          $divisionArray = array();
          $country = \Country::find(1);
          $divisions = $country->divisions;
      	  foreach($divisions as $division  ){
        
	          $divisionObj = \Division::find($division->id);
	          $districts = $divisionObj->districts;
	          $tempDivision = array();
	      	  foreach($districts as $district  ){
		          $districtObj = \District::find($district->id);
		          $upzillas = $districtObj->upzillas;
		          
		          $temp = new \stdClass;
		          $temp->id = $district->id;
		          $temp->name = $district->name;
		          $temp->upzillas = $upzillas;
		          array_push($tempDivision, $temp);
	          }
	          $tempC = new \stdClass;
	          $tempC->id = $division->id;
	          $tempC->name = $division->name;
	          $tempC->districts = $tempDivision;
	          array_push($divisionArray, $tempC);
      	  }
          $response->id = $country->id;
          $response->name = $country->name;
          $response->divisions = $divisionArray;
          return json_encode($response);
      }
   
}