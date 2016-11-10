	$(function() {
		$(".add-pop").click(function(){
		    $('h4#myModalLabel').text('Add a Customer');
		    $('input#AddressLine1').val('');
		    $('input#AddressLine2').val('');
		    $('input#City').val('');
		    $('input#Country').val('');
		    $('input#CustomerName').val('');
		    $('input#EmailAddress').val('');
		    $('input#PhoneNumber').val('');
		    $('input#PostalCode').val('');
		    $('input#URL').val('');
		    $('input#State').val('');
		    $('input#Username').val('');
		    $('input#Password').val('');
		    $('input#PKCustomerID').val('');
		    $('div.login-info').show();
		});
		$(".edit-pop").click(function(){
			//alert("hi");
			var url=API_BASE_URL_FE+'api/';
			cust_array = $(this).attr("id").split("-");
			var selCustId = cust_array[2];
			//alert(selCustId);
			var apiCall=url+'Customer/GetActiveCustomerbyId?Customerid=' + selCustId;
			console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
				//data: input_data,
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
		        	$('h4#myModalLabel').text('Edit Customer Information');
		        	$('input#AddressLine1').val(data.AddressLine1);
		        	$('input#AddressLine2').val(data.AddressLine2);
		        	$('input#City').val(data.City);
		        	$('input#Country').val(data.Country);
		        	$('input#CustomerName').val(data.CustomerName);
		        	$('input#EmailAddress').val(data.EmailAddress);
		        	$('input#PhoneNumber').val(data.PhoneNumber);
		        	$('input#PostalCode').val(data.PostalCode);
		        	$('input#URL').val(data.URL);
		        	$('input#State').val(data.State);

		        	// $('input#Username').val(data.Username);
		        	// $('input#Password').val(data.Password);
		        	$('input#PKCustomerID').val(data.PKCustomerID);
		        	$('div.login-info').hide();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#customer-info-form").validate({
		        rules: {
		            CustomerName: "required",
		            PostalCode: "required",
		            EmailAddress: {
		                required: true,
		                email: true
		            },
		            AddressLine1 : "required",
		            Country: "required",
		            Username : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKCustomerID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            },
		            Password : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKCustomerID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            }
		        },
		        messages: {
		            CustomerName: "Please enter Customer Name",
		            PostalCode: "Please enter Postal Code",
		            EmailAddress: "Please enter a valid email address",
		            AddressLine1: "Please enter Address",
		            Country: "Please enter Country Name",
		            Username: "Please enter Username",
		            Password: "Please enter Password"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
	//manage Carrier 
	//Array ( [0] => Array ( [PKCarrierID] => 1 [CarrierName] => Royal Mail [APIUserName] => dtdc [APIPassword] => ap0yar [APIKey] => dtdc [APIURL] => dtdc.com [FKCustomerID] => 1 [ConsumerCountryName] => Belgium [Isactive] => 1 [LabelAPI] => [AnnounceAPI] => [TrackTraceURL] => ) )
	$("#add_carrier").click(function(){
		    $('h4#carrierLabel').text('Add a Carrier');
		    $('input#PKCarrierID').val('');
		    $('input#CarrierName').val('');
		    $('input#APIUserName').val('');
		    $('input#APIPassword').val('');
		    $('input#APIKey').val('');
		    $('input#APIURL').val('');
		    $('input#FKCustomerID').val('');
		    $('input#ConsumerCountryName').val('');
		    $('input#AnnounceAPI').val('');
		    $('input#TrackTraceURL').val('');
			$('#loadingspin').css({'display':'none'});//Hide spin image
		});
		$(".edit_carrier").click(function(){
			//alert("hi");
			var url=API_BASE_URL_FE+'api/';
			carrier_array = $(this).attr("id").split("_");
			var selCarrierId = carrier_array[1];
			//alert(selCustId);
			var apiCall=url+'Carrier/GetCarrierbyId?CarrierId=' + selCarrierId;
			console.log("apiCall : " + apiCall);
			$('#loadingspin').css({'display':'block'});//Hide spin image
			$.ajax({
		        url: apiCall,
		        type: 'GET',
				//data: input_data,
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
		        	$('h4#carrierLabel').text('Edit Career Information');
		        	$('input#CarrierName').val(data.CarrierName);
		        	$('input#APIUserName').val(data.APIUserName);
		        	$('input#APIPassword').val(data.APIPassword);
		        	$('input#APIKey').val(data.APIKey);
		        	$('input#APIURL').val(data.APIURL);
		        	$('input#FKCustomerID').val(data.FKCustomerID);
		        	$('input#ConsumerCountryName').val(data.ConsumerCountryName);
		        	$('input#AnnounceAPI').val(data.AnnounceAPI);
		        	$('input#TrackTraceURL').val(data.TrackTraceURL);
					$('input#LabelAPI').val(data.LabelAPI);		        	
		        	$('input#PKCarrierID').val(data.PKCarrierID);
					$('#loadingspin').css({'display':'none'});//Hide spin image	        	
		        },
		        fail: function(data){
		          console.log(data);
				  $('#loadingspin').css({'display':'block'});//Hide spin image
		        }
		      });
		});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	});
