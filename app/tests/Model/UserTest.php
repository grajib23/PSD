<?php

class UserTest extends TestCase {
	
	
	/**
	 * A basic functional test for Web Application .
	 *
	 * @return void
	 * @test
	 * 
	 */
	public function AddSuperUser()
	{
		//Route::enableFilters();

	    $method = "POST";
		$uri = "/v2/delivery/superuser/add";
		$parameters = array(
          'username'	 => 'Super 420',
		  'email'        => 'superuser007@hnaki.com',
		  'password'     => '123',
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	    
	}
	/**
	 * A basic functional test for Web Application .
	 *
	 * @return void
	 * @test
	 * 
	 */
	public function addAdmin()
	{
		//Route::enableFilters();

	    $method = "POST";
		$uri = "/v2/delivery/admin/add";
		$parameters = array(
          'username'	 => 'Super 420',
		  'email'        => 'admin007@hnaki.com',
		  'password'     => '123',
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	    
	}

	/**
	 * A basic functional test for Web Application .
	 *
	 * @return void
	 * @test
	 * 
	 */
	public function addSupervisor()
	{
		//Route::enableFilters();
		
	    $method = "POST";
		$uri = "/v2/delivery/supervisor/add";
		$parameters = array(
			'username'	          => 'Md Jack',
			'email'               => 'supervisor_jack@hnaki.com',
			'password'            => '123',
			'dob'                 => '2014-4-15',
			'current_address'     => 'jack current_address ',
			'parmanent_address'   => 'parmanent_address',
			'national_id'         => 'national_id',
			'phone_number'        => 'phone_number',
			'father_name'         => 'father_name',
			'mother_name'         => 'mother_name',
			'sex'                 => 'sex',
			'father_phone_number' => 'father_phone_number',
			'mother_phone_number' => 'mother_phone_number',
			'city_id'             => '1',
	        'city_name'           => 'Jessore',
	        'zone_id'             => '1',
	        'zone_name'           => 'DoraTana',
	        'area_id'             => '1',
	        'area_name'           => 'BasePara',
			'created_by'          => '7'
			
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	    
	}

	/**
	 * A basic functional test for Web Application .
	 *
	 * @return void
	 * @test
	 * 
	 */
	public function getStatusReason()
	{
		//Route::enableFilters();
		
	    $method = "POST";
		$uri = "/v2/delivery/statusreason/get";
		$parameters = array();

		$response = $this->call($method, $uri, $parameters);
	    var_dump($response->getContent()->toJson());
	    
	}


}