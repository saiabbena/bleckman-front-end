<?php
if ( ! function_exists('getAppearanceSettings'))
	{
		function getAppearanceSettings(){
		  $data = array('Customerid'=>$_SESSION['Customerid']);
		  $data_url='?'.http_build_query($data);
		  $data_string = json_encode($data);
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		  //curl_setopt($ch, CURLOPT_URL, "http://returns.dev.apoyar.eu/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
		  curl_setopt($ch, CURLOPT_URL, "http://128.0.210.62/bleckmannapi/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  // Send the request
		  $result = json_decode(curl_exec($ch), true);
		  // Free up the resources $curl is using
		  curl_close($ch);

		  return $result;	  
		  
	  }
  }
 ?>