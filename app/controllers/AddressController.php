<?php


class AddressController extends \BaseController {


	public function index(){
		$response = new stdClass();
		$divisionArray = array();
		$country = Country::find(1);
		$divisions = $country->divisions;
		foreach($divisions as $division  ){
			
			$divisionObj = Division::find($division->id);
			$districts = $divisionObj->districts;
			$tempDivision = array();
			foreach($districts as $district  ){
				$districtObj = District::find($district->id);
				$upzillas = $districtObj->upzillas;
				
				$temp = new stdClass;
				$temp->id = $district->id;
				$temp->name = $district->name;
				$temp->upzillas = $upzillas;
				array_push($tempDivision, $temp);
			}
			$tempC = new stdClass;
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

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
