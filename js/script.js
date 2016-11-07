//var url='http://128.0.210.37/Bleckmannapi/api/';
var url=API_BASE_URL_FE+'api/';

var apiCall=url+'';

var result=false;

var customerSettings={};

var submition={};

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
    console.log(data)
  })
  .success(function(data, status, xhr){
    console.log(data);
    //function validate stuff
    if(data && data['ConsumerEmail'].toLowerCase()==inputData['Email'].toLowerCase()){
      result={type: 'screen1', status: true, message: 'You have been authenticated', result: data};
      secondScreen(result);
      $('.form2').show();
      $('.loading-screen').slideUp('slow');
      console.log('success')
      result.token=xhr.getResponseHeader("Apoyar");
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
            <a href="#">'+result['result']['BMOrderLine'][i]['StyleDescription']+'</a>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b>&euro; '+(result['result']['BMOrderLine'][i]['Price']).toFixed(2)+'</b>\
          </td>\
\
          <td>\
            <div class="form-group" style="margin-top: 18px">\
              <select id="s1" class="form-control">';
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
    '}
    if(disabled==0){
      //$('#button2').attr('disabled','disabled');
    }
  }
  $('#override > div.container-fluid.form2 > div > div > div > div > table > tbody').html(html);
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
  
  $('#total-price').html('&euro; '+(sum).toFixed(2));
}

function getCouriers(){
  
  apiCall=url+'Carrier/GetAllCarriersbyCustomerid';
  
  $.get(apiCall, {'Customerid': customerId})
  .success(function(data){
    customerSettings.carriers=data.Carriers;
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
                  <input type="radio" name="sample1" value="'+customerSettings.carriers[i]['PKCarrierID']+'" '+(i==0?'checked=""':'')+'>\
                </label>\
              </div>\
            </div>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            '+customerSettings.carriers[i]['CarrierName']+'\
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
  $.material.init();
  $('#table1234').bootstrapTable();
}
$(document).ready(function(){
  




  //init material design skin
  $.material.init();
  
  //get customer settings
  getCustomerSettings();
  
  /*
  $(document).keydown(function(e) {
    
    if(e.which == 13) {
      $('#button1').click();
      
      $(document).off('keydown');
      $(document).keydown(function(e) {
        if(e.which == 13) {
          $('#button2').click();
          $(document).off('keydown');
          $(document).keydown(function(e) {
            if(e.which == 13) {
              $('#button3').click();
              $(document).off('keydown');
            }
          });
        }
      });
    }
  });
  */
  $('form').submit(function(){
    return false 
  })
  //change load
  $('#button1').click(function(){
    console.log('working');
    $('.loading-screen').slideDown('slow');
    setTimeout(function(){
      $('.form1').hide();
      var inputData={'Orderid': $('#f2').val(), 'Email': $('#f1').val(), Customerid: customerId};
      getOrderAndAuth(inputData);
    }, 500);
    submition.OrderId=($('#f2').val()).toString();
    submition.ConsumerEmail=$('#f1').val();
    
  });
  
  //change load
  $('#button2').click(function(){
    console.log('working');
    $('.loading-screen').slideDown('slow');
    
    if($('#override > div.container-fluid.form2 input[type="checkbox"]:checked').length==0){
      setTimeout(function(){
        $('#screen2-error').show();
      }, 500);
      $('.loading-screen').slideUp('slow');
      throw new Error("whoops");
    }
    
    getCouriers();
    submition.Returnorderline=[];
    var counter=0;
    $('#override > div.container-fluid.form2 input[type="checkbox"]:checked').each(function(){
      
      var parent=$(this).parent().parent().parent().parent().parent()
      var reason=$('#s1', parent).val();
      var quantity=$('#s2', parent).val();
      
      submition.Returnorderline[counter]={
        "Status": 1,
        "ShipmentId": '',
        "LineId": '',
        "OrderId": JSON.parse($(this).val())['OrderId'],
        "SKU": JSON.parse($(this).val())['SKU'],
        "EanBarcode": '',
        "Price": (JSON.parse($(this).val())['Price']).toFixed(2),
        "ReturnReason": '',
        "QtyReturned": quantity,
        "ProductCurrency": JSON.parse($(this).val())['ProductCurrency'],
        "TotalLineAmount": '',
        "ReturnReasonId": reason,
        "StatusName": "In Transit"
      }
      counter++;
    });
    
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
    
    
    submition.FKCustomerId=customerId;
    submition.StatusName='In transit';
    submition.CarriedId=$('input[name=sample1]:checked').val();
    submition.Status=result.result.Status;
    submition.Shipfromwarehouseid=result.result.ShipFromWarehouseId;
    submition.Source=result.result.Source;
    submition.Ordertype=result.result.OrderType;
    submition.ShipmentId=result.result.ShipmentId;
    submition.OrderId=result.result.OrderId;
    submition.ConsumerId='';
    submition.ConsumerEmail=result.result.ConsumerEmail;
    submition.Consumerphonenumber=result.result.ConsumerPhoneNumber;
    submition.ConsumerName1=result.result.ConsumerName1;
    submition.Consumername2=result.result.ConsumerName2;
    submition.ConsumerShipStreet1='';
    submition.Consumershipstreet2='';
    submition.Consumershipstreet3='';
    submition.ConsumerFromShipHouseNumber='';
    submition.ConsumerFromShipPostalCode='';
    submition.ConsumerFromShipCity='';
    submition.Consumershipstate=result.result.ConsumerShipState;
    submition.ConsumerFromShipCountry='';
    submition.ReturnsOrderTrackingCode='';
    submition.ReturnsOrderCarrier='';
    submition.ReturnsOrderCarrierService='';
    submition.ReturnsOrderParcelBarcode='';
    submition.ReturnOrderTotalRefundAmount='';
    submition.CarrierId='';
    submition.FKCustomerId='';
    submition.CarrierName='';
    submition.StatusName='';
    
    
    apiCall=url+'returnorder/PostBMReturnorder';
    $('#button3').hide('slow');
	//console.log(submition);
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
        $('#carrier-label-modal').modal('show');
        $('#label-iframe').attr('href', API_BASE_URL_FE+'RoyalMail/'+response.Id+'.pdf');
        $('.loading-screen').slideUp('slow');
        //'http://ws.developer.bleckmann.apoyaretail.com/RoyalMail/'+response.Id+'.pdf', '_blank'
      },
    }).fail(function(response){
        console.log('!THIS IS THE RESPONSE FROM THE SERVER!');
        console.log(response);
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
});
