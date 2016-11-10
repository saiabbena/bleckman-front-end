	$(function() {
		var url=API_BASE_URL_FE+'api/';
		$(".add-customer-pop").click(function(){
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
		$(".edit-customer-pop").click(function(){
			//alert("hi");
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
		$.validator.addMethod("valueNotEquals", function(value, element, arg){
			return arg != value;
		}, "Value must not equal arg.");

		$(".add-user-pop").click(function(){
		    $('h4#myModalLabel').text('Add a User');
		    $('input#Address').val('');
		    $('input#City').val('');
		    $('input#Country').val('');
		    $('input#FirstName').val('');
		    $('input#LastName').val('');
		    $('input#EmailAddress').val('');
		    $('input#Phone').val('');
		    $('input#PostalCode').val('');
		    $('input#State').val('');
		    $('input#Username').val('');
		    $('input#Password').val('');
		    $('input#PKUserID').val('');
		    $('select#FKRoleID').val('-1');
		    $('div.login-info').show();
		});
		$(".edit-user-pop").click(function(){
			//alert("hi");
			user_array = $(this).attr("id").split("-");
			var selUserId = user_array[2];
			//alert(selCustId);
			var apiCall=url+'User/GetActiveUserbyId?Userid=' + selUserId;
			console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
				//data: input_data,
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
		        	$('h4#myModalLabel').text('Edit User Information');
		        	$('input#FirstName').val(data.FirstName);
		        	$('input#LastName').val(data.LastName);
		        	$('input#EmailAddress').val(data.EmailAddress);
		        	$('input#Phone').val(data.Phone);
		        	$('input#Address').val(data.Address);
		        	$('input#City').val(data.City);
		        	$('input#State').val(data.State);
		        	$('input#Country').val(data.Country);
		        	$('input#PostalCode').val(data.PostalCode);
		        	$('select#FKRoleID').val(data.FKRoleID);
		        	
		        	$('input#PKUserID').val(data.PKUserID);
		        	$('div.login-info').hide();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#user-info-form").validate({
		        rules: {
		            FirstName: "required",
		            PostalCode: "required",
		            EmailAddress: {
		                required: true,
		                email: true
		            },
		            Address : "required",
		            Country: "required",
		            FKRoleID: {
		            	valueNotEquals: -1
		            },
		            Username : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKUserID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            },
		            Password : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKUserID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            }
		        },
		        messages: {
		            FirstName: "Please enter First Name",
		            PostalCode: "Please enter Postal Code",
		            EmailAddress: "Please enter a valid email address",
		            Address: "Please enter Address",
		            Country: "Please enter Country Name",
		            FKRoleID:"Please select a role",
		            Username: "Please enter Username",
		            Password: "Please enter Password"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
	});