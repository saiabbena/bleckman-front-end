$(function() {
	$.validator.addMethod("regex", function(value, element, regexpr) {          
     return regexpr.test(value);
   }, "Please enter a valid pasword.");
   
		var url=API_BASE_URL_FE+'api/';
		
		$(".add-customer-pop").click(function(){
			var validator1 = $( "#customer-info-form" ).validate();
			validator1.resetForm();
			$('#view_url').css({'display':'none'});
			$('#lbl_url').css({'display':'none'});	
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
			$('.loading').css({'display':'block'});
			$('.customer-modal').css({'display':'none'});
			$('#view_url').css({'display':'block'});
			$('#lbl_url').css({'display':'block'});	
			
			var validator1 = $( "#customer-info-form" ).validate();
			validator1.resetForm();
			cust_array = $(this).attr("id").split("-");
			var selCustId = cust_array[2];
			//alert(selCustId);
			var apiCall=url+'Customer/GetActiveCustomerbyId?Customerid=' + selCustId;
			//console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	//console.log("response data : ");
		        	//console.log(data);
		        	$('.loading').css({'display':'none'});
					$('.customer-modal').css({'display':'block'});
		        	$('h4#myModalLabel').text('Edit Customer Information');
		        	$('input#AddressLine1').val(data.AddressLine1);
		        	$('input#AddressLine2').val(data.AddressLine2);
		        	$('input#City').val(data.City);
		        	$('input#Country').val(data.Country);
		        	$('input#CustomerName').val(data.CustomerName);
		        	$('input#EmailAddress').val(data.EmailAddress);
		        	$('input#PhoneNumber').val(data.PhoneNumber);
		        	$('input#PostalCode').val(data.PostalCode);
		        	
		        	$('input#State').val(data.State);
					$('#view_url #customer_id').text(data.PKCustomerID);
					$('input#URL').val($('#view_url').text());

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
				focusCleanup: true,
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
		            },
		            Password : {
						 required: true,						 
						 //New Contain at least 6 characters.contain at least 1 number.,contain at least 1 lowercase character (a-z),contain at least 1 uppercase character (A-Z),contains only 0-9a-zA-Z.
						 regex: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/     	
						
		            }
		        },
		        messages: {
		            CustomerName: "Please enter Customer Name",
		            PostalCode: "Please enter Postal Code",
		            EmailAddress: "Please enter a valid email address",
		            AddressLine1: "Please enter Address",
		            Country: "Please enter Country Name",
		            Username: "Please enter Username",
		            Password: "Enter Password must contain minimum 6 chars with one number, and one UPPERCASE and lowercase letter"
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
			var validator1 = $( "#user-info-form" ).validate();
			validator1.resetForm();
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
			$('.loading').css({'display':'block'});
			$('.user_div').css({'display':'none'});
			var validator1 = $( "#user-info-form" ).validate();
			validator1.resetForm();
			user_array = $(this).attr("id").split("-");
			var selUserId = user_array[2];
			//alert(selCustId);
			var apiCall=url+'User/GetActiveUserbyId?Userid=' + selUserId;
			//console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	//console.log("response data : ");
		        	//console.log(data);
					$('.loading').css({'display':'none'});
					$('.user_div').css({'display':'block'});
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
				focusCleanup: true,
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
		            },
					Password : {
						required: true,						 
						 //New Contain at least 6 characters.contain at least 1 number.,contain at least 1 lowercase character (a-z),contain at least 1 uppercase character (A-Z),contains only 0-9a-zA-Z.
						 regex: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/
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
		            Password: "Enter Password must contain minimum 6 chars with one number, and one UPPERCASE and lowercase letter"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});

		$("#add-warehouse-form").validate({
		        rules: {
		            "Warehouses[0][Name]": "required",
		            "Warehouses[0][PostalCode]": "required",
		            "Warehouses[0][HouseNumber]" : "required",
		            "Warehouses[0][Country]": "required",
		        },
		        messages: {
		            "Warehouses[0][Name]": "Please enter Warehouse Name",
		            "Warehouses[0][PostalCode]": "Please enter Postal Code",
		            "Warehouses[0][HouseNumber]": "Please enter House Number",
		            "Warehouses[0][Country]": "Please enter Country Name"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
		
		$("#add-role-form").validate({
			rules:{
				"Roles[0][RoleName]" : "required",
			},
			messages:{
				"Roles[0][RoleName]" : "Please enter a Role Name"
			},
		    submitHandler: function(form) {
		      	//alert("submit");
		        form.submit();
		    }
		});
		$("#carrier_info_form").validate({
			rules: {				
				CarrierName: "required",
				APIKey: "required",				
				APIURL : "required",
				ConsumerCountryName: "required",
				AnnounceAPI: "required",
				TrackTraceURL: "required",
				ApplicationID:"required",
				APIUserName : {
					required: function(element) {
						//alert("customerid : " + $('#PKCustomerID').val());
						if ( $('#PKCarrierID').val() ) {
							return false;
						} else {
							return true;
						}
					}
				},
				APIPassword : {
					required: function(element) {
						//alert("customerid : " + $('#PKCustomerID').val());
						if ( $('#PKCarrierID').val() ) {
							return false;
						} else {
							return true;
						}
					}
				}
			},
			messages: {
				CarrierName: "Please enter Carrier Name",
				APIKey: "Please enter API Key",
				APIURL: "Please enter a valid API URL",
				AnnounceAPI: "Please enter Announce API",
				TrackTraceURL: "Please enter Track Trace URL",
				ConsumerCountryName: "Please Unique Country Name",
				APIUserName: "Please enter Username",
				APIPassword: "Please enter Password"
			},
			submitHandler: function(form) {
				//alert("submit");
				form.submit();
			}
	});		
		
		
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
			$('input#ConsumerCountryName').prop("readonly",false);
		    $('input#AnnounceAPI').val('');
		    $('input#TrackTraceURL').val('');
			$('input#ApplicationID').val('');			
		});
		$(".edit_carrier").click(function(){
			$('.loading').css({'display':'block'});
			$('.carrier_div').css({'display':'none'});
			var url=API_BASE_URL_FE+'api/';
			carrier_array = $(this).attr("id").split("_");
			var selCarrierId = carrier_array[1];
			//alert(selCustId);
			var apiCall=url+'Carrier/GetCarrierbyId?CarrierId=' + selCarrierId;
			//console.log("apiCall : " + apiCall);
			$('#loadingspin').css({'display':'block'});//Hide spin image
			$.ajax({
		        url: apiCall,
		        type: 'GET',
				//data: input_data,
		        dataType: 'json',
		        success: function(data) {
		        	//console.log("response data : ");
		        	//console.log(data);
					$('.loading').css({'display':'none'});
					$('.carrier_div').css({'display':'block'});
		        	$('h4#carrierLabel').text('Edit Career Information');
		        	$('input#CarrierName').val(data.CarrierName);
		        	$('input#APIUserName').val(data.APIUserName);
		        	$('input#APIPassword').val(data.APIPassword);
		        	$('input#APIKey').val(data.APIKey);
		        	$('input#APIURL').val(data.APIURL);
		        	$('input#FKCustomerID').val(data.FKCustomerID);
		        	$('input#ConsumerCountryName').val(data.ConsumerCountryName);
					$('input#ConsumerCountryName').prop("readonly",true);
		        	$('input#AnnounceAPI').val(data.AnnounceAPI);
		        	$('input#TrackTraceURL').val(data.TrackTraceURL);
					$('input#ApplicationID').val(data.ApplicationID);
					$('input#LabelAPI').val(data.LabelAPI);		        	
		        	$('input#PKCarrierID').val(data.PKCarrierID);
					$('#loadingspin').css({'display':'none'});//Hide spin image	        	
		        },
		        fail: function(data){
		          console.log(data);
				  $('#loadingspin').css({'display':'block'});//Hide spin image
				  $('.loading').css({'display':'block'});			
		        }
		      });
		});
		
		$("#ConsumerCountryName").blur(function(){			
			var existing_country_list = $('#existing_country_list').val();
			var countryArray = existing_country_list.split(',');
			var ConsumerCountryName = $('#ConsumerCountryName').val();
			var PKCarrierID = $('#PKCarrierID').val();
			
			if ($.inArray(ConsumerCountryName, countryArray)!='-1' && PKCarrierID == '') {
				//alert(ConsumerCountryName + ' is duplicate!');
				$('#ConsumerCountryName').val('');
				$('#ConsumerCountryName').focus();
				$('#duplicate_country').css({'display':'block'});				
				//console.log(ConsumerCountryName);
			} else {				
				$('#duplicate_country').css({'display':'none'});
			}			
		});
		
		$('#showcustomerSelect').click(function() {
		    //alert(this.checked);
		    if ( this.checked == true ) {
		    	$('#select-customer-div').show();
		    } else {
		    	$('#select-customer-div').hide();
		    }
		});

		$('.AssignedtoCustomer').click(function() {
			if ( this.checked == true ) {
				var res = $(this).attr("id").split("-");
				if(!($('#languageActive' + res[1]).is(":checked"))) {
					//alert("test : " + res[0] + ", " + res[1] );
					$('#languageActive' + res[1] ).prop("checked", true);
				}
			}
		});

		$("#select-customer").on('change', function(){
			//alert("change" + $(this).val());
			$('.loading-screen').show();
			if ( $(this).val() > -1 ) {
				$('.customer-assign').show();
				getCustomerLanguages($(this).val());
			}
			
		});
		//console.log("customerid : " + customerId);
		if (customerId == ''){
			$('#showcustomerSelect').prop("checked", false);
			$('#select-customer-div').hide();
			$('.customer-assign').hide();
		} else {
		//if ( customerId ) {
			$('.loading-screen').show();
			$('#showcustomerSelect').prop("checked", true);
			$('#select-customer-div').show();
			$("#select-customer").val(customerId);
			$('.customer-assign').show();
			getCustomerLanguages(customerId);
		}

		function getCustomerLanguages(custid) {
			// console.log('allLanguages');
			// console.log(allLanguages);
			apiCall=url+'CustomerLanguage/GetCustomerLanguagebyId';
		    $.ajax({
		      url: apiCall,
		      type: 'get',
		      data: { Customerid: custid },
		      dataType: 'json',
		      success: function (response) {
		        //console.log(response);
		        for( j=0;j<allLanguages.length;j++ ) {
		        	$('#AssignedtoCustomer-' + j ).prop("checked", false);
		        	//console.log('j : ' + j );
		        	//console.log("PKLanguageID : " + allLanguages[j]['PKLanguageID'] );
			        for(i=0; i<response.length; i++) {
			        	
			        	if ( allLanguages[j]['PKLanguageID'] == response[i]['FkLanguageid'] ) {
			        		//console.log("FkLanguageid : " + response[i]['FkLanguageid']);
			        		$('#AssignedtoCustomer-' + j ).prop("checked", true);
			        	}
			        }
			    }
			    $('.loading-screen').hide();
		      },
		      fail: function(){
		      	$('.loading-screen').hide();
		      }
		    });
		}
		$.material.options.autofill = true;
		$.material.init();
	});