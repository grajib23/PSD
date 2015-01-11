<?php

class AddressController extends \BaseController {


	public function index(){

		$response = new stdClass();
		$countryArray = array();

		$country = Country::find(1);
		$divisions = $country->divisions->toArray();

		foreach($divisions as $division  ){

			$tempDistrict = array();

			$divisionObj = Division::find($division['id']);
			$districts = $divisionObj->districtss->toArray();

			foreach($districts as $district  ){

				$districtObj = District::find($district['id']);
				$upzillas = $districtObj->upzillas->toArray();

				$tempDistrict = array($district,'upozillas'=>$upzillas );
			}
			array_push($countryArray, array($division,'districts'=>$tempDistrict));
		}
		$response->all_address = $countryArray;
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
