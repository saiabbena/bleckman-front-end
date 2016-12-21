//var url='http://128.0.210.37/Bleckmannapi/api/';
var url=API_BASE_URL_FE+'api/';

var apiCall=url+'';

var result=false;

var customerSettings={};

var submition={};
var countryCode = '';
var mode = 2;

function getCustomerSettings(){
  apiCall=url+'ReturnReason/GetAllReturnReasonsbyCustomerid';
  $.get(apiCall, {'Customerid': customerId})
  .success(function(data){
    customerSettings.returnReason=data;
    console.log(language);
    console.log(customerSettings.returnReason);
    var tempRes=[];
    for(i=0; i<customerSettings.returnReason.length; i++){
      for(a=0; a<customerSettings.returnReason[i].length; a++){
        if(customerSettings.returnReason[i][a].LanguageName==language){
          tempRes.push(customerSettings.returnReason[i][a]);
        }
      }
    }
    customerSettings.returnReason=tempRes;
    console.log(customerSettings.returnReason);
  });
}
function getOrderAndAuth(inputData){  
  apiCall=url+'order/GetBMAllOrdersbyid';
  
  $.get(apiCall, inputData)
  .always(function(data){
    //console.log(data)
  })
  .success(function(data, status, xhr){
    console.log("orders");
    console.log(data);
    countryCode = data.ConsumerShipCountry;
    //function validate stuff
    if(data && data['ConsumerEmail'].toLowerCase()==inputData['Email'].toLowerCase()){
      result={type: 'screen1', status: true, message: 'You have been authenticated', result: data};
      //console.log("data is : ");
      //console.log(data);
      secondScreen(result);
      
	  $('.form2').show();
      $('.loading-screen').slideUp('slow');
      //console.log('success')
      result.token=xhr.getResponseHeader("Apoyar");
	  $('.form-inputs').hide();
	  $('.form5').hide();
	  $('.form5').css({'display':'none !important'});
    }
    else{
      result={type: 'screen1', status: false, message: 'Incorrect id/email/tel', result: false};
      $('.form1').show();
      $('.loading-screen').slideUp('slow');
      $('#screen1-error').show();
      console.log('incorrect')
    }
  })
  .fail(function(){
    $('.form1').show();
    $('.loading-screen').slideUp('slow');
    $('#screen1-error').show();
    console.log('failed')
  });
}
function secondScreen(result){
  var html='';
  var html2='';
  //console.log(result);
  for (i=0; i<result['result']['BMOrderLine'].length; i++){
    result['result']['BMOrderLine'][i]['Price'];
  }
  for(i=0; i<result['result']['BMOrderLine'].length; i++){
    var disabled=0;
    disabled=disabled+result['result']['BMOrderLine'][i]['QtyShipped'];
    if(result['result']['BMOrderLine'][i]['QtyShipped']==0){
      html=html+'\
        <tr id="disabled-orderline">\
          <td>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b style="color: #999;">'+result['result']['BMOrderLine'][i]['StyleDescription']+'</b>\
            <br><br style="font-size: 15px;">\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b style="color: #999;">N/A</b>\
            <br><br style="font-size: 15px;">\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b style="color: #999;">N/A</b>\
            <br><br style="font-size: 15px;">\
          </td>\
          <td>\
            <br style="font-size: 21px;">\
            <b style="color: #999;">0</b>\
            <br><br style="font-size: 15px;">\
          </td>\
\
        </tr>\
      ';}
    else{
      html=html+'\
        <tr>\
          <td>\
            <div class="form-group">\
              <div class="checkbox">\
                <label>\
                  <input type="checkbox" value=\''+JSON.stringify(result['result']['BMOrderLine'][i])+'\'>\
                </label>\
              </div>\
            </div>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <a data-toggle="modal" href="#moreInfo'+result['result']['BMOrderLine'][i].OrderlineID+'">'+result['result']['BMOrderLine'][i]['StyleDescription']+'</a>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b>'+result.result.BMOrderLine[i].ProductCurrency+' '+(result['result']['BMOrderLine'][i]['Price']).toFixed(2)+'</b>\
          </td>\
\
          <td>\
            <div class="form-group" style="margin-top: 18px">\
              <select id="s1" class="rr_option form-control"><option value="0"> Pick a return reason &darr;</option>';
      for(a=0; a<customerSettings.returnReason.length; a++){
        html=html+'<option value="'+customerSettings.returnReason[a]['PKReasonID']+'">'+customerSettings.returnReason[a]['Reason']+'</option>'
      }
      html=html+'\
              </select>\
            </div>\
          </td>\
          <td>\
            <div class="form-group" style="margin-top: 18px">\
              <select id="s2" class="form-control s2-dd">';
      for (a=1; a<=result.result.BMOrderLine[i]['QtyShipped']; a++){
        html=html+'<option value="'+a+'">'+a+'</option>'
      }
      html=html+'\
              </select>\
            </div>\
          </td>\
\
        </tr>\
    ';
	 //console.log(html);
      html2=html2+'\
      <div class="modal fade" id="moreInfo'+result['result']['BMOrderLine'][i].OrderlineID+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
        <div class="modal-dialog" role="document">\
          <div class="modal-content">\
            <div class="modal-header">\
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
              <h4 class="modal-title" id="myModalLabel">Full info on OrderlineID: '+result['result']['BMOrderLine'][i].OrderlineID+'</h4>\
            </div>\
            <div class="modal-body">\
              <b>Shipment date/time:</b> '+result['result'].ShippedDate+', <b>ShipmentId:</b> '+result['result'].ShipmentId+' \
              <h4>Order Details</h4>\
              <b>SKU:</b> '+result['result']['BMOrderLine'][i].SKU+'<br>\
              <b>Colour Description: </b>'+ result['result']['BMOrderLine'][i].ColourDescription+ '\
              <br><b>Style Description: </b>'+ result['result']['BMOrderLine'][i].StyleDescription+'\
              <br><b>Quantity Shipped: </b>'+ result['result']['BMOrderLine'][i].QtyShipped +'\
              <br><b>Price: </b>'+ result['result']['BMOrderLine'][i].Price +'\
              <br><h4>Consumer Details</h4>\
              <b>Customer Email:</b> '+result['result'].ConsumerEmail+'<br>\
              <b>Customer Phone:</b> '+result['result'].ConsumerPhoneNumber+'<br><br>\
              <hr>';

            html2=html2+'</div>\
            <div class="modal-footer">\
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
            </div>\
          </div>\
        </div>\
      </div>\
      ';
  }
    $('body').append(html2);
    $('#total-price').html(result.result.BMOrderLine[0].ProductCurrency+' '+'0.00');
    if(disabled==0){
      //$('#button2').attr('disabled','disabled');
    }
  }
  $('.form_ro').show();
  $('.form_ro').css({'display':'block !important'});
  $('#table123 > tbody').html(html);
  $.material.init();
  $('#table123').bootstrapTable();
  //count refund price
  $('.s2-dd').on('change', function() {
    print_total();
  });
  $('input:checkbox').change(function(){
    print_total();
  });
  
}
function print_total(){
  var sum=0;
  checked=$('input:checkbox:checked');
  checked.each(function(){
    var price=JSON.parse($(this).val())['Price'];
    var quantity=$('#s2', $(this).parent().parent().parent().parent().parent()).val();
    sum=sum+price*quantity;
  });
  submition.ReturnOrderTotalRefundAmount=sum.toFixed(2);
  
  $('#total-price').html(result.result.BMOrderLine[0].ProductCurrency+' '+(sum).toFixed(2));
}

function getCouriers(){
  //apiCall=url+'Carrier/GetAllCarriersbyCustomerid';
  apiCall=url+'Carrier/GetBMCarriersbyCustomerid';
  $.get(apiCall, {'Customerid': customerId, 'countrycode': countryCode})
  .success(function(data){
    console.log('carriers');
    console.log(data);
    //customerSettings.carriers=data.Carriers;
    customerSettings.carriers=data;
    thirdScreen();
    $('.loading-screen').slideUp('slow');
  });
}
function thirdScreen(){
  html='';
    for(i=0; i<customerSettings.carriers.length; i++){
      html=html+'\
        <tr>\
          <td>\
            <div class="form-group">\
              <div class="radio">\
                <label>\
                  <input type="radio" name="sample1" value="'+i+'" '+(i==0?'checked=""':'')+'>\
                </label>\
              </div>\
            </div>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <span class="carrierName">'+customerSettings.carriers[i]['CarrierName']+'</span>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <a href="#">more info</a>\
          </td>\
\
        </tr>';
  }
  $('#override > div.container-fluid.form3 > div > div > div > div > table > tbody').html(html);
  $('.ro_option_carriers table > tbody').html(html);
  $.material.init();
  $('#table1234').bootstrapTable();
}

$(document).ready(function(){

  //init material design skin
  $.material.init();
  
  //get customer settings
  getCustomerSettings();
  
  if ( mode == 1 ) {
    $('.form1').hide();
    $('.form1_mode1').show();
  }
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg != value;
    }, "Value must not equal arg.");
    $("#Form1-Mode1").validate({
        focusCleanup: true,
            rules: {
                Consumername1: "required",
                ConsumerShipStreet1: "required",
                ConsumerEmail: {
                    required: true,
                    email: true
                },
                ConsumerFromShipHouseNumber : "required",
                ConsumerFromShipCountry: {
                  valueNotEquals: -1
                },
                ConsumerFromShipPostalCode: "required",
                ConsumerFromShipCity:"required",
            },
            messages: {
                Consumername1: "Please enter First Name",
                ConsumerShipStreet1: "Please enter Street",
                ConsumerEmail: "Please enter a valid email address",
                ConsumerFromShipHouseNumber: "Please enter Address",
                ConsumerFromShipCountry: "Please enter Country Name",
                ConsumerFromShipPostalCode:"Please enter Postal Code",
                ConsumerFromShipCity:"Please enter City"
            },
            submitHandler: function(form) {
              var apiCall = '';
              var postData = {};
              if ( UserId != '' ) {
                apiCall = url+'returnorder/PostMode3';
                postData.UserId = UserId;
              } else {
                apiCall = url+'returnorder/PostMode1';
              }
              
              postData.Consumername1 = $('#Consumername1').val();
              postData.Consumername2 = $('#Consumername2').val();
              postData.ConsumerShipStreet1 = $('#ConsumerShipStreet1').val();
              postData.ConsumerEmail = $('#ConsumerEmail').val();
              postData.ConsumerFromShipHouseNumber = $('#ConsumerFromShipHouseNumber').val();
              postData.ConsumerFromShipCountry = $('#ConsumerFromShipCountry').val();
              postData.ConsumerFromShipPostalCode = $('#ConsumerFromShipPostalCode').val();
              postData.ConsumerFromShipCity = $('#ConsumerFromShipCity').val();
              postData.Consumershipstate = $('#Consumershipstate').val();
              postData.FKCustomerId = customerId;
              postData.Status = 1;
              console.log(postData);
              // $.ajax({
              //   url: apiCall,
              //   type: 'post',
              //   data: postData,
              //   dataType: 'json',
              //   success: function (response) {
              //     console.log(response);
              //     console.log(response.Status);
              //     if ( response.Status == 1 ) {
              //       $('.form1_mode1').hide();
              //       $('.form4').show();
              //       $('#label-iframe2').attr('href', API_BASE_URL_FE+response.Messages);
              //     } else {
              //       $('#mode1-fail').show();
              //       $('.form5').show();
              //       $('.form1_mode1').hide();
              //     }
              //     $('.loading-screen').slideUp('slow');
              //   },
              // }).fail(function(response){
              //     console.log('!THIS IS THE RESPONSE FROM THE SERVER!');
              //     console.log(response);

              // });
            }
    });
          


  $('form').submit(function(){
    return false 
  })
  //change load
  $('#button1').click(function(){
    console.log('working');
    $('.loading-screen').slideDown('slow');
    setTimeout(function(){
      $('.form_con_login').hide();
      var inputData={'Orderid': $('#f2').val(), 'Email': $('#f1').val(), Customerid: customerId};
	  //console.log(inputData);
      getOrderAndAuth(inputData);
    }, 500);
    submition.OrderId=($('#f2').val()).toString();
    submition.ConsumerEmail=$('#f1').val();
    $('.form3').hide();
	$('.form4').hide();	
	 
  });
  
  //change load
  $('#button2').click(function(){
    $('#emailConfirm').attr('value', submition.ConsumerEmail);
    console.log('working');
    $('.loading-screen').slideDown('slow');
    
    if($('div.container-fluid.form2 input[type="checkbox"]:checked').length==0){
      setTimeout(function(){
		  $('#screen2-error').html('<strong>Whoops!</strong>  Please select at least one item to return.');
        $('#screen2-error').show();
      }, 500);
      $('.loading-screen').slideUp('slow');
      throw new Error("whoops");
    }
    
    
    submition.Returnorderline=[];
    var counter=0;
    $('div.container-fluid.form2 input[type="checkbox"]:checked').each(function(){
      
      var parent=$(this).parent().parent().parent().parent().parent()
      var reason=$('#s1', parent).val();
      var quantity=$('#s2', parent).val();
	  //console.log(reason);
	  //Check the select reason 
      if ( reason == '0' ) {
  		  setTimeout(function(){
    			$('#s1', parent).focus();			
    			//$('#reason_error').show();
				$('#screen2-error').html('<strong>Whoops!</strong>  Please select the return reason.');
				$('#screen2-error').show();				
				
  			}, 500);
  			$('.loading-screen').slideUp('slow');
  			throw new Error("whoops");
			
  			//$( ".checkbox span:nth-child(2)" ).remove();//This is a bug that It shows 2 check boxes while the form2 loads again
  			//$( ".checkbox .checkbox-material" ).eq(1).remove();			
		  
	     } else {
  			  submition.Returnorderline[counter]={
      			"Status": 1,
      			"ShipmentId": '',
      			"LineId": 1,
      			"OrderId": JSON.parse($(this).val())['OrderId'],
      			"SKU": JSON.parse($(this).val())['SKU'],
      			"EanBarcode": JSON.parse($(this).val())['EANBARCODE'],
      			"Price": (JSON.parse($(this).val())['Price']).toFixed(2),
      			"ReturnReason": '',
      			"QtyReturned": parseInt(quantity, 10),
      			"ProductCurrency": JSON.parse($(this).val())['ProductCurrency'],
      			"TotalLineAmount": (JSON.parse($(this).val())['Price']).toFixed(2)*parseInt(quantity, 10),
      			"ReturnReasonId": parseInt(reason, 10),
      			"StatusName": "In Transit"
  		    }
	     }
      
      counter++;
    });
    getCouriers();
    setTimeout(function(){ 
      $('.form2').hide();
      $('.form3').show();
    }, 500);
    for (i=0; i<result['result']['BMOrderLine'].length; i++){
      result['result']['BMOrderLine'][i]['Price']=(result['result']['BMOrderLine'][i]['Price']*result['result']['BMOrderLine'][i]['Quantity']);
    }
    
  });
  
  //logic
  $('#button3').click(function(){
    $('.loading-screen').slideDown('slow');
    
    parent=$('input[name=sample1]:checked').parent().parent().parent().parent().parent();
    var carName=$('.carrierName', parent).html();
    var carrierInfo = $('input[name=sample1]:checked').val();
    console.log("carrier info");
    console.log(customerSettings.carriers[carrierInfo]);
    submition.FKCustomerId=customerId;
    submition.StatusName='Label printed';
    //submition.CarrierId=parseInt($('input[name=sample1]:checked').val(), 10);
    submition.CarrierId=customerSettings.carriers[carrierInfo]['PKCarrierID'];
    submition.Status=result.result.Status;
    //submition.Shipfromwarehouseid=result.result.ShipFromWarehouseId;
    submition.Shipfromwarehouseid=customerSettings.carriers[carrierInfo]['WarehouseId'];
    submition.Source=result.result.Source;
    submition.Ordertype=result.result.OrderType;
    submition.ShipmentId=result.result.ShipmentId;
    submition.OrderId=result.result.OrderId;
    submition.ConsumerId=101;
    submition.ConsumerEmail=result.result.ConsumerEmail;
    submition.Consumerphonenumber=result.result.ConsumerPhoneNumber;
    submition.ConsumerName1=result.result.ConsumerName1;
    submition.Consumername2=result.result.ConsumerName2;
    submition.ConsumerShipStreet1=result.result.ConsumerShipStreet1;
    submition.Consumershipstreet2=result.result.ConsumerShipStreet2;
    submition.Consumershipstreet3=result.result.ConsumerShipStreet3;
    submition.ConsumerFromShipHouseNumber=result.result.ConsumerShipHouseNumber;
    submition.ConsumerFromShipPostalCode=result.result.ConsumerShipPostalCode;
    submition.ConsumerFromShipCity=result.result.ConsumerShipCity;
    submition.Consumershipstate=result.result.ConsumerShipState;
    submition.ConsumerFromShipCountry='';
    submition.ReturnsOrderTrackingCode='';
    submition.ReturnsOrderCarrier='';
    submition.ReturnsOrderCarrierService='';
    submition.ReturnsOrderParcelBarcode='';
    //submition.ReturnOrderTotalRefundAmount=sum;
    //submition.CarrierId=2;
    submition.FKCustomerId=customerId;
    submition.CarrierName=carName;
    submition.StatusName='Label Printed';
    submition.ConsumerEmail2=$('#emailConfirm').val();
    submition.ConsumerFromShipCountry = countryCode;
	  submition.UserId = (UserId != '')?UserId:'';//Store the Customer Support guy id on Return Order Request    

    
    apiCall=url+'returnorder/PostBMReturnorder';
    //console.log("token : " + result.token );
    $('#button3').hide('slow');
	  console.log(submition);
    $.ajax({
      url: apiCall,
      type: 'post',
      data: submition,
      headers: {
          Apoyar: result.token
      },
      dataType: 'json',
      success: function (response) {
        $('#screen3-success').show('slow');
        console.log(submition);
        console.log('!THIS IS THE RESPONSE FROM THE SERVER!');
        console.log(response);
        //$('#carrier-label-modal').modal('show');
        
        $('.form3').hide();
        
        if(response.Status='2000'){
          $('.form4').show();
          $('#label-iframe2').attr('href', API_BASE_URL_FE+response.Messages);
          $('.loading-screen').slideUp('slow');
          //'http://ws.developer.bleckmann.apoyaretail.com/RoyalMail/'+response.Id+'.pdf', '_blank'
        } else {
          $('.form5').show();
          $('.form1_mode1').hide();
          $('.loading-screen').slideUp('slow');
        }
      },
    }).fail(function(response){
        console.log('!THIS IS THE RESPONSE FROM THE SERVER!');
        console.log(response);
        $('#btn_career_back').hide();
        $('.loading-screen').slideUp('slow');
        $('#screen3-fail').show('slow');
    });
    /*
    $.post(apiCall, submition)
    .always(function(data){
      console.log(data);  
    })
    .success(function(){
      $('#screen3-success').show('slow');
      console.log(submition);
    })
    .fail(function(){
      $('#screen3-fail').show('slow')
    });*/
  });
  //btn_career_back
  $('#btn_career_back').click(function(){	  
	  setTimeout(function(){		
      $('.form3').hide();	  	  
      $('.form2').show('slow');
		//$('.checkbox span').eq(0).remove();	
		$( ".checkbox span:nth-child(2)" ).remove();//This is a bug that It shows 2 check boxes while the form2 loads again	
    }, 500);
	  
  });
	//Button click on create return order
	$('#btn_create_ro').click(function(){
		console.log('working');
		//alert('Test');
		var inputs_data = '';
		//$('.loading-screen').slideDown('slow');
		setTimeout(function(){		  
		  var inputData={'Orderid': $('#f2').val().trim(), 'Email': $('#f1').val().trim(), 'Phone': $('#f3').val().trim(), 'Name': $('#f4').val().trim()};
		  var inputs_data = $('#f2').val()+$('#f1').val()+$('#f3').val()+$('#f4').val().trim();
		  console.log(inputData);
		  //alert(inputsdata);
		  if(inputs_data != ''){
			  getOrderAndAuth_CS(inputData);			  
		  }else{
			  $('#screen1-error').show();			  
		  }
		  
		}, 500);		
		$('.form3').hide();
		$('.form4').hide();	
		//$('.form_ro').hide();
	  });
	  
	  function getOrderAndAuth_CS(inputData){
		  submition.CustomerId = '';
		  $('.loading-screen').slideDown('slow');
		  submition.OrderId = inputData.Orderid;
		  submition.Email = inputData.Email;
		  submition.Name = inputData.Name;
		  submition.Phone = inputData.Phone;
		  //IsCustomerService
		  apiCall=url+'order/PostSearchOrders';	
		  //console.log(apoyarToken);
		  $.ajax({
			  url: apiCall,
			  type: 'post',
			  data: submition,
			  headers: {
				  Apoyar: apoyarToken
			  },
			  dataType: 'json',
			  success: function (data) {
				console.log("orders");
				console.log(data);
				//countryCode = data.ConsumerShipCountry;
				//function validate stuff
				if(data){
				  //result={type: 'screen1', status: true, message: 'You have been authenticated', result: data};
				  console.log("sangeeetha ");
				  //console.log(data);
				  //$('.form1').css({'display':'none !important'});
				  returnOrdersScreen(data); 
				  $('.form5').show();
          $('.form1_mode1').hide();
				  $('.form_ro').hide();
				  //$('.form_ro').css({'display':'none !important'}); 
				}
				else{
				  result={type: 'screen1', status: false, message: 'Incorrect id/email/tel/phone', result: false};
				  $('.form1').show();
				  $('.loading-screen').slideUp('slow');
				  $('#screen1-error').show();
				  console.log('incorrect')
				}				  
			  },
			}).fail(function(response){
				$('.form1').show();
				$('.loading-screen').slideUp('slow');
				$('#screen1-error').show();
				console.log('failed')
			});
	  }
	function returnOrdersScreen(result){		
		var html='';
		var inputData = '';
		console.log(customerId) ;
		if(result.length > 0){
			for(i=0; i<result.length; i++){
				var data = result;
				var inputData = '';
				date=new Date(data[i].ShippedDate);
				resultDate=date.getDate()+'/'+(date.getMonth()+1)+'/'+(date.getYear()+1900);
				inputData={'Orderid': data[i].OrderId, 'Email': data[i].ConsumerEmail, Customerid: customerId};
				
				html=html+'\<tr>\
					  \<td style="white-space: nowrap;">'+resultDate+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].Consumerid+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].ConsumerEmail+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].OrderId+'</td>\
					  \
					  <td style="white-space: nowrap;"><b>'+' '+data[i].ConsumerName1+' '+data[i].ConsumerName2+'</b></td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].Status+'</td>\
					  \
					  <td style="white-space: nowrap;">\
					  <button style="border:0;" id="'+data[i].OrderId+','+data[i].ConsumerEmail+'" class="btn btn-success btn-raised btngetOrderLine btn-sm">  Return  <i class="medium material-icons">launch</i></button></tr>';
			
			}
		}else{
			html=html+'\<tr>\
			<td colspan="7" style="white-space: nowrap;color:#FF0000;" align="center"><h3>Sorry! No matching Orders found.</h3></td></tr>';
		}
		//console.log(html);
		$('#list_to_create_RO > tbody').html('');
		$('#list_to_create_RO > tbody').html(html);				
		 //$.material.init();
		$('#list_to_create_RO').bootstrapTable();
		//Always add  and intializedatatable as early as after the table data load. otherwise it won't work
		$('#list_to_create_RO').DataTable({				 
			 "ordering": false,
			"pagingType": "numbers",
		});
		$('.loading-screen').slideUp('slow');
	}
	
	$(document).on('click', '.btngetOrderLine', function() {
		var inputData = '';
		//inputData={'Orderid': data[i].OrderId, 'Email': data[i].ConsumerEmail, Customerid: customerId};
		
		var ol_info = $(this).attr('id');
		var ol_array = [];    
		ol_array = ol_info.split(',');		
		inputData={'Orderid': ol_array[0], 'Email': ol_array[1], Customerid: customerId};
		console.log(inputData);
		$('.loading-screen').slideDown('slow');
		getOrderAndAuth(inputData);
		
	});
	
  
});
