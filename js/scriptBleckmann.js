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

	});