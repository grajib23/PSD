<?php

class AuthTest extends TestCase {
	
	/**
	 * A basic functional test for Web Application .
	 *
	 * @return void
	 * @test
	 */
	public function WebApp()
	{
		$PATH="app/tests/JSON/DPanel/out/auth.json";
		try {
			$data = file_get_contents($PATH);
		} 
		catch (Exception $e) {
		 echo $e;	
		}

	    $method = "POST";
		$uri = "/v2/delivery/auth";
		$parameters = array(
          'data'      => $data
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	}

	/**
	 * A basic functional test for Delivery Application .
	 *
	 * @return void
	 * @test
	 */
	public function DeliveryApp()
	{
		$PATH="app/tests/JSON/Delivery_app/out/auth.json";
		try {
			$data = file_get_contents($PATH);
		} 
		catch (Exception $e) {
		 echo $e;	
		}

	    $method = "POST";
		$uri = "/v2/delivery/auth";
		$parameters = array(
          'data'      => $data
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	}
	/**
	 * A basic functional test for Restaurant Application .
	 *
	 * @return void
	 * @test
	 */
	public function RestaurantApp()
	{
		$PATH="app/tests/JSON/Restaurant_app/out/auth.json";
		try {
			$data = file_get_contents($PATH);
		} 
		catch (Exception $e) {
		 echo $e;	
		}

	    $method = "POST";
		$uri = "/v2/delivery/auth";
		$parameters = array(
          'data'      => $data
		);

		$response = $this->call($method, $uri, $parameters);
	    $this->assertEquals('', $response->getContent());
	}

}