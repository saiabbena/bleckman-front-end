$(document).ready(function(){
  //init material design skin
  $.material.init();

  //TODO: MAKE THIS PASSED FROM PHP
  //var customerId=1;

  var url=API_BASE_URL_FE+'api/';
  //var url='http://128.0.210.37/Bleckmannapi/api/';
  var apiCall=url+'';
  
  function retrieveCarrierInfo(PKCarrierID){    
    apiCall=url+'Carrier/ GetCarrierbyId';    
    $.ajax({
      url: apiCall,
      type: 'get',
      data: {CarrierId: carrierId},
      headers: {
          Apoyar: apoyarToken
      },
      dataType: 'json',
      success: function (response) {
       
      },
      fail: function(){
        //$('.loading-screen').slideDown('slow');
      }
    });    
  }

  
  
});