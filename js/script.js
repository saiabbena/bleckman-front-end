//var url='http://128.0.210.37/Bleckmannapi/api/';
var url='http://returns.dev.apoyar.eu/api/';

var apiCall=url+'';

var result=false;

var customerSettings={};

var submition={};

function getCustomerSettings(){
  apiCall=url+'ReturnReason/GetAllReturnReasonsbyCustomerid';
  $.get(apiCall, {'Customerid': customerId, 'Languageid': 2})
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
  
  apiCall=url+'Order/GetAllOrdersbyid';
  
  $.get(apiCall, inputData)
  .always(function(data){
    console.log(data)
  })
  .success(function(data, status, xhr){
    console.log(data);
    //function validate stuff
    if(data.hasOwnProperty('Order') && data['Order']['ConsumerEmail']==inputData['Email']){
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
  for (i=0; i<result['result']['Orderlines'].length; i++){
    result['result']['Orderlines'][i]['Price']=(result['result']['Orderlines'][i]['Price']/result['result']['Orderlines'][i]['Quantity']);
  }
  for(i=0; i<result['result']['Orderlines'].length; i++){
    var disabled=0;
    disabled=disabled+result['result']['Orderlines'][i]['Quantity'];
    if(result['result']['Orderlines'][i]['Quantity']==0){
      html=html+'\
        <tr id="disabled-orderline">\
          <td>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b style="color: #999;">'+result['result']['Orderlines'][i]['ProductName']+'</b>\
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
                  <input type="checkbox" value=\''+JSON.stringify(result['result']['Orderlines'][i])+'\'>\
                </label>\
              </div>\
            </div>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <a href="#">'+result['result']['Orderlines'][i]['ProductName']+'</a>\
          </td>\
\
          <td>\
            <br style="font-size: 21px;">\
            <b>&euro; '+(result['result']['Orderlines'][i]['Price']).toFixed(2)+'</b>\
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
      for (a=1; a<=result.result.Orderlines[i]['Quantity']; a++){
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
  submition.Returnordertotal=sum.toFixed(2);
  
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
  
  //change load
  $('#button1').click(function(){
    console.log('working');
    $('.loading-screen').slideDown('slow');
    setTimeout(function(){
      $('.form1').hide();
      var inputData={'Orderid': $('#f2').val(), 'Email': $('#f1').val(), Customerid: customerId};
      getOrderAndAuth(inputData);
    }, 500);
    submition.OrderID=($('#f2').val()).toString();
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
        "ProductName": JSON.parse($(this).val())['ProductName'], 
        "ProductInfo": JSON.parse($(this).val())['ProductInfo'], 
        "Quantity": quantity, 
        "Price": (JSON.parse($(this).val())['Price']*quantity).toFixed(2), 
        "FKReasonID": reason, 
        "FKReturnStatusID": 1, 
        "ProductSKU": (JSON.parse($(this).val())['ProductSKU']).toString()
      }
      counter++;
    });
    
    setTimeout(function(){ 
      $('.form2').hide();
      $('.form3').show();
    }, 500);
    for (i=0; i<result['result']['Orderlines'].length; i++){
      result['result']['Orderlines'][i]['Price']=(result['result']['Orderlines'][i]['Price']*result['result']['Orderlines'][i]['Quantity']);
    }
    
  });
  
  //logic
  $('#button3').click(function(){
    submition.FKCustomerID=result['result']['Order']['FKCustomerID'];
    submition.FKReturnStatusID=1;
    submition.FKCarriedID=$('input[name=sample1]:checked').val();
    apiCall=url+'Returnorder/PostReturnorder';
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
      success: function () {
        $('#screen3-success').show('slow');
        console.log(submition);
      },
      fail: function(){
        $('#screen3-fail').show('slow')
      }
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
