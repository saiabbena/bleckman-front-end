<?php
  //Get the Appearance settings value
 if ( ! function_exists('get_appearance_value')){
		function get_appearance_value($field_name='', $customer_id=''){
		  if($customer_id != ''){
			  $data = array('Customerid'=>$customer_id);
		  }else{
			  $data = array('Customerid'=>$_SESSION['Customerid']);
			  $customer_id=$_SESSION['Customerid'];
		  }
		  		  
		  $data_url='?'.http_build_query($data);
		  $data_string = json_encode($data);
		  $ch = curl_init();

		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		  curl_setopt($ch, CURLOPT_URL, "http://returns.dev.apoyar.eu/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
		  //curl_setopt($ch, CURLOPT_URL, "http://128.0.210.62/bleckmannapi/Api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		  // Send the request
		  $result = json_decode(curl_exec($ch), true);
		  // Free up the resources $curl is using
		  curl_close($ch);
		  $appearanceSettings = $result;
		  $serialize_appearance = $appearanceSettings['CustomerSetting']['Colours'];		  
		  $Colors = json_encode(unserialize($serialize_appearance));
		  $Colors = json_decode($Colors);		
		  $main_logo = (isset($appearanceSettings['CustomerSetting']['Logo']))?$appearanceSettings['CustomerSetting']['Logo']:'';
		  $PKSettingID = (isset($appearanceSettings['CustomerSetting']['PKSettingID']))?$appearanceSettings['CustomerSetting']['PKSettingID']:'';
		  $FKCustomerid = (isset($appearanceSettings['CustomerSetting']['FKCustomerid']))?$appearanceSettings['CustomerSetting']['FKCustomerid']:'';
		
			if(count($Colors)>0){
				foreach($Colors as $result){			
					//stdClass Object ( [Header] => #625454 [Menu] => Array ( [0] => #625454 [1] => #FFFFFF ) [Accent] => Array ( [0] => #CC1543 [1] => #E25176 ) ) #FFFFFF#FFFFFF#FFFFFF
					$header_color = (isset($Colors->Header))?$Colors->Header:'';
					$menu_bg = (isset($Colors->Menu[0]))?$Colors->Menu[0]:'';
					$menu_font = (isset($Colors->Menu[1]))?$Colors->Menu[1]:'';					
					$dd_bg = (isset($Colors->Dropdown[0]))?$Colors->Dropdown[0]:'';
					$dd_font = (isset($Colors->Dropdown[1]))?$Colors->Dropdown[1]:'';
					$accent_1 = (isset($Colors->Accent[0]))?$Colors->Accent[0]:'';
					$accent_2 = (isset($Colors->Accent[1]))?$Colors->Accent[1]:'';
				}
			//Call all appearance settings variables
			switch($field_name){
				case 'header_color':
					return $header_color;
					break;
				case 'menu_bg':
					return $menu_bg;
					break;
				case 'menu_font':
					return $menu_font;
					break;
				case 'dd_bg':
					return $dd_bg;
					break;
				case 'dd_font':
					return $dd_font;
					break;
				case 'accent_1':
					return $accent_1;
					break;
				case 'accent_2':
					return $accent_2;
					break;
				case 'logo':
					//echo  'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/logo/logo.png';
					return 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/logo/logo.png';//http://returns.dev.apoyar.eu/images/1/logo/logo.png
					break;
				case 'spacer':
					//echo  'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/spacer/spacer.png';
					echo 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/spacer/spacer.png';
					break;
				case 'loading':
					//echo  'http://128.0.210.62/bleckmannapi/images/'.$customer_id.'/loading/loading.gif';
					echo 'http://returns.dev.apoyar.eu/images/'.$customer_id.'/loading/loading.gif';
					break;
				
			}
		}			
	}
} 
?>