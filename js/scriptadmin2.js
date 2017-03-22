$(document).ready(function(){
  //init material design skin
  $.material.init();
  $('#def-lang-ip').click(function(){
    if($('#def-lang-ip:checked').length>0){
      console.log('check');
      $('#language-panel > form > div.form-group > div input[type="radio"]').attr({'disabled': true});
    }
    else{
      $('#language-panel > form > div.form-group > div input[type="radio"]').attr({'disabled': false});
      console.log('uncheck');
    }
  });

  /*var url='http://ws.developer.bleckmann.apoyaretail.com/api/';
  //var url='http://128.0.210.37/BleckmannApi/api/';
  var apiCall='';
  var submition=[];
  var customerId=1;
  $('.loading-screen').show();

  function getReturnOrderReasons(){
    apiCall=url+'ReturnReason/GetAllReturnReasonsbyCustomerid';

    $.get(apiCall, {'Customerid': customerId})
    .success(function(data){
      $('.loading-screen').slideUp('slow');
      renderReturnOrderReasons(data);
    }).fail(function(data){

    }).always(function(data){
      $('.loading-screen').slideUp('slow');
      console.log(data);
    });
  }
  function renderReturnOrderReasons(data){
    html='';
    for(i=0; i<data.length; i++){
      html=html+'\
      <tr json=\''+JSON.stringify(data[i])+'\'>\
        <td>\
          <div class="form-group label-floating">\
            <label for="i5" class="control-label">Reason</label>\
            <input id="search-admin" type="text" class="form-control reason-input" id="i5" value="'+data[i].Reason+'">\
            <span class="help-block">Edit the reason for returning an item</code></span>\
          </div>\
        </td>\
        <td>\
          <button class="btn btn-raised btn-danger remove-reason pull-right">Remove</button>\
        </td>\
      </tr>\
      \
      ';
    }
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody').html(html);
  }

  function getCustomerLanguages(){
    apiCall=url+'CustomerLanguage/GetCustomerLanguagebyId';
    
    $.get(apiCall, {Customerid: customerId})
    .success(function(data){
      console.log(data);
      var html='';
      var langcounter=data.length;
      for(i=0; i<data.length; i++){
        console.log(data[i].Isdefault);
        html=html+'\
        <tr>\
          <td class="text-center">'+data[i].LanguageName+'\
          </td>\
          <td>\
            <div class="togglebutton text-center">\
              <label>\
                <input value="'+data[i].FKLanguageid+'" type="checkbox" checked>\
              </label>\
            </div>\
          </td>\
          <td>\
            <div class="radio text-center">\
              <label>\
                <input type="radio" name="langDefault" value="true">\
                Default\
              </label>\
            </div>\
          </td>\
        </tr>\
        ';
      }
      $('#language-panel tbody').html(html);
      html='';
      for(a=0; a<4; a++){
        html=html+'\
        <p>Screen '+(a+1)+' headers</p>\
        <div style="border: 1px solid #ddd; padding: 20px;">\
        '
        for(i=0; i<langcounter; i++){
          html=html+'\
          <div class="form-group label-floating">\
            <label for="i5" class="control-label">'+data[i]['LanguageName']+'</label>\
            <input id="search-admin" type="text" class="form-control" id="i5" value="'+data[i]['Page'+(a+1)+'heading']+'">\
            <span class="help-block">Edit the header</code></span>\
          </div>\
          ';
        }
        html=html+'</div><br>'
      }
      $('#header-translations').html(html)
      $.material.init();
    });
  }


  getCustomerLanguages();
  getReturnOrderReasons();

  //save language
  $('#language-panel > h3 > button').click(function(){
    var submitionLang=[];
    $('#language-panel checkbox :checked').each(function(){
      
      var parent=$(this).parent().parent().parent().parent();
      var isDefault=$('input[type="radio"]', parent).val();
      submitionLang.push({
        Customerid: customerId,
        FKLanguageid: $(this).val(),
        Isdefault: false
      } );

    });
    
  });

  $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody')
  .on('click', '.remove-reason', function(){
    console.log('working');
    console.log($('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody tr')
    .length);
    
    var parent=$(this).parent().parent();

    var attr=JSON.parse(parent.attr('json'));


    if(attr['PKReasonID'] != -1){
      submition.push({PKReasonID: attr['PKReasonID'], IsActive: false, FKCustomerID: attr['FKCustomerID'], Reason: attr['Reason']});
    }

    if($('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody tr')
    .length==2){
      $('.remove-reason').prop('disabled', true);
    }
    parent.remove();
  });
  $('#add-return').click(function(){
    html='\
    <tr json=\''+JSON.stringify({PKReasonID: -1, FKCustomerID: customerId, IsActive: true})+'\'>\
      <td>\
        <div class="form-group label-floating">\
          <label for="i5" class="control-label">Reason</label>\
          <input id="search-admin" type="text" class="form-control reason-input" id="i5" value="">\
          <span class="help-block">Edit the reason for returning an item</code></span>\
        </div>\
      </td>\
      <td>\
        <button class="btn btn-raised btn-danger remove-reason pull-right">Remove</button>\
      </td>\
    </tr>\
    \
    ';
    $('.remove-reason').prop('disabled', false);
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody')
    .append(html);
  });

  $('.save-reasons').click(function(){
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div:nth-child(1) > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody tr')
    .each(function(){
      reason=($('.reason-input', this).val());
      attr=JSON.parse($(this).attr('json'));
      submition.push(
        {
          FkLanguageid: 2,
          Reason: reason,
          FKCustomerID: attr.FKCustomerID,
          PKReasonID: attr.PKReasonID,
          IsActive: attr.IsActive
        }
      );
      
    });
    apiCall=url+'ReturnReason/PostManageReturnReason';
    $('.loading-screen').slideDown('slow');
    submition={ReturnReasons: submition};
    $.post(apiCall, submition).always(function(data){
      console.log(submition);
      console.log(data);
      submition=[];
    }).success(function(){
      getReturnOrderReasons();
      $('.success-message').show();
      $('.loading-screen').slideUp('slow');
    });
  });
  */
});