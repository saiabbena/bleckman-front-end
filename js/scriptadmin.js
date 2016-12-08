$(document).ready(function(){
	//init material design skin  
	$.material.init();
	//TODO: MAKE THIS PASSED FROM PHP
	//var customerId=1;
	var url=API_BASE_URL_FE+'api/';
	//var url='http://128.0.210.37/Bleckmannapi/api/';
	var apiCall=url+'';
	var result=false;
	var customerSettings={};
	var submition={};
	
  function retrieveReturnOrders(customerId){
	  var searchInput = {};
    $('.loading-screen').slideDown('slow');
    // apiCall=url+'returnorder/GetReturnOrderbyCustomerid';
    //apiCall=url+'returnorder/GetBMReturnOrderbyCustomerId';
	apiCall=url+'returnorder/PostBMReturnOrderbyKeywords';
    //console.log("apoyarToken : " + apoyarToken );	
	console.log(customerId);
	searchInput['pageno'] = 1;
	searchInput['pagesize'] = 15;
	searchInput['FKCustomerId'] = customerId;
    $.ajax({
      url: apiCall,
      type: 'post',
      data: searchInput,
      headers: {
          Apoyar: apoyarToken
      },
      dataType: 'json',
      success: function (response) {
        $('.loading-screen').slideUp('slow');
        console.log(response);
        renderReturnOrders(response);
      },
      fail: function(){
        $('.loading-screen').slideDown('slow');
      }
    });

    // $.get(apiCall, {Customerid: customerId})
    // .success(function(data){
    //   $('.loading-screen').slideUp('slow');
    //   console.log(data);
    //   renderReturnOrders(data);
    // })
    // .fail(function(){
    //   $('.loading-screen').slideDown('slow');
    // })
    // .always(function(){
      
    // });
  }

  function renderReturnOrders(raw_data){
    html='';
    html2='';
    html3='';
	console.log(raw_data);
    for(i=0; i<raw_data['ReturnOrders'].length; i++){
	  var data = raw_data['ReturnOrders'];
      date=new Date(data[i].ReturnsOrderCreationDate);
      resultDate=date.getDate()+'/'+(date.getMonth()+1)+'/'+(date.getYear()+1900);
      html=html+'\
        <tr>\
          <tr>\
              <td style="white-space: nowrap;">'+resultDate+'</td>\
              \
              <td style="white-space: nowrap;">'+data[i].OrderId+'</td>\
              \
              <td style="white-space: nowrap;">'+data[i].ReturnId+'</td>\
              \
              <td style="white-space: nowrap;"><a target="_blank" href="'+data[i].ReturnsOrderTrackingCode+'">Link</a></td>\
              \
			  <td style="white-space: nowrap;"><b>'+' '+data[i].ReturnOrderTotalRefundAmount.toFixed(2)+'</b></td>\
              \
              <td style="white-space: nowrap;">'+data[i].CarrierName+'</td>\
              \
              <td style="white-space: normal !important;">'+data[i].StatusName+'</td>\
              \
              <td style="white-space: nowrap;">\
              <button data-toggle="modal" data-target="#moreInfo" id="'+data[i].ReturnId+'" style="margin-top: 0;" class="btn btn-primary btn-raised btn_more_info">More info</button>\
              <button data-toggle="modal" data-target="#rOrderComment'+data[i].ReturnId+'" style="margin-top: 0;" class="btn btn-warning btn-raised">Comment</button>\
        </tr>\
      ';
	  
      

      html3=html3+'\
      <div class="modal fade" id="rOrderComment'+data[i].ReturnId+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
        <div class="modal-dialog" role="document">\
          <div class="modal-content">\
            <form action="postComment" method="POST">\
              <div class="modal-header">\
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
                <h4 class="modal-title" id="myModalLabel">Comment for return order: '+data[i].ReturnId+'</h4>\
              </div>\
              <div class="modal-body">\
                <input type="hidden" name="ReturnId" value="'+data[i].ReturnId+'">\
                <div class="form-group label-floating">\
                  <label for="t1" class="control-label">Comment:</label>\
                  <textarea rows="20" name="Comment" id="t1" name="comment" class="form-control" placeholder="No comment has been made yet">'+data[i].Comment+'</textarea>\
                </div>\
              </div>\
              <div class="modal-footer">\
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
                <button type="submit" class="btn btn-success">Save</button>\
              </div>\
            </form>\
          </div>\
        </div>\
      </div>\
      ';

    }
    $('body').append(html2);
    $('body').append(html3);
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody').html(html);
	//$('#override #orders_data tbody').html(html);
  }
	$(document).on('click', '.btn_more_info', function() {
		//alert($(this).attr('id')); //ReturnId
		var ReturnId = $(this).attr('id');
		var moreinfo_html = '';			
		//var customerId = $('#orders_by_customer_id').val();
		$('#moreInfo').html('');
		var apiCall=url+'returnorder/GetBMReturnOrderlinesbyReturnOrderid?ReturnId=' + ReturnId;
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
				//data[i].OrderId
				//console.log(data.OrderId);
				//console.log(data['Returnorderline'][0].EanBarcode);
				/**/
				moreinfo_html = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title" id="myModalLabel">Full info on return order: '+data.ReturnId+'</h4></div><div class="modal-body"><b>Full date/time:</b>'+data.ReturnsOrderCreationDate+',<b>Orderid:</b>'+data.OrderId+',	<b>Return status:</b>'+data.StatusName+'<br><br><b>Customer Email:</b> '+data.ConsumerEmail+'<br><br><b>Customer Phone:</b>'+data.Consumerphonenumber+' <br><br>	<b>Comment:</b><br>'+(data.Comment?data.Comment:'No comment has been made yet')+'<br><br><b>Items returned ('+data.Returnorderline.length+'):</b><hr>';
				for(a=0; a<data.Returnorderline.length; a++){
					var r=data.Returnorderline[a];
					moreinfo_html=moreinfo_html+'\
					<b>Item name:</b> '+r.ProductName+'<br> <b>Product SKU:</b> '+r.SKU+'<br> <b>Product info:</b> '+r.ProductInfo+'<br> <b>Return reason:</b> '+r.ReturnReason+'<br> <b>Quantity:</b> '+r.QtyReturned+'<br> <b>Price:</b> '+r.Price+' <hr>\
					'
				}
				moreinfo_html=moreinfo_html+'<hr></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div>';
				$('#moreInfo').html(moreinfo_html);
				
				$.material.init();
			},
			fail: function(data){
			  console.log(data);
			}
		  });
					
		});
  function search(){
    //apiCall=url+'returnorder/PostReturnOrderbyKeywords';
    apiCall=url+'returnorder/PostBMReturnOrderbyKeywords';

    var searchInput={};
    var default_render=true;
    searchInput['FKCustomerId'] = customerId;
    
    $('tr input[type]').each(function(){
      if($(this).val()){
        searchInput[$(this).attr('name')]=$(this).val();
        default_render=false;
      }
    });
	//Change the date format to YYYY-DD-MM
    var ReturnsOrderCreationDate = $('#ReturnsOrderCreationDate').val();
	var date_array = [];    
    date_array = ReturnsOrderCreationDate.split("-");    
    var newDateFormat = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
	var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];
	
	if(typeof(pageno)==='undefined'){				
		searchInput['pageno'] = 1;
	}else{
		searchInput['pageno'] = pageno;
	} 
	searchInput['pagesize'] = 15;
    
    if(default_render){
      console.log(" in default_render");
      retrieveReturnOrders(customerId);
      $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.alert.alert-dismissible.alert-primary').html('Listing the latest 20 returned orders')
    }
    else{
      $('.loading-screen').slideDown('slow');      
	  searchInput['ReturnsOrderCreationDate']= newDateFormat;
	  console.log(searchInput);
      $.ajax({
        url: apiCall,
        type: 'post',
        data: searchInput,
        headers: {
            Apoyar: apoyarToken
        },
        dataType: 'json',
        success: function (data) {
		  searchInput['ReturnsOrderCreationDate']= newDateFormatToShow;
          $('.loading-screen').slideUp('slow');
          console.log(data);
          renderReturnOrders(data);
          updateMessage(searchInput);
        },
        fail: function(){
          $('.loading-screen').slideUp('slow');
          renderReturnOrders({});
          //console.log(data);
        }
      });

      // $.post(apiCall, searchInput)
      // .success(function(data){
      //   $('.loading-screen').slideUp('slow');
      //   console.log(data);
      //   renderReturnOrders(data);
      //   updateMessage(searchInput);
      // }).fail(function(data){
      //   $('.loading-screen').slideUp('slow');
      //   renderReturnOrders({});
      //   console.log(data);
      // });
    }

  }
  //this function is to update the search message
  function updateMessage(searchData){
    var html='Searching for (';
    for(v in searchData){
      html=html+v+' : '+searchData[v]+' ';
    }
    html=html+')';
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.alert.alert-dismissible.alert-primary').html(html);
  }

  function updateStats(){
    var from=$('#stat-from').val();
    var to=$('#stat-to').val();
    var from_array = [];
    var to_array = [];
    from_array = from.split("-");
    to_array = to.split("-");
    var newFrom = from_array[2] + "-" + from_array[1] + "-" + from_array[0];
    var newTo = to_array[2] + "-" + to_array[1] + "-" + to_array[0];

    // console.log("from : " + from );
    // console.log("newFrom : " + newFrom );
    // console.log("to : " + to );
    // console.log("newTo : " + newTo );

    //apiCall=url+'returnorder/GetReturnOrderbydates';
    apiCall=url+'returnorder/GetBMReturnOrderbydates';
    $('.loading-screen').slideDown('slow');


    $.ajax({
      url: apiCall,
      type: 'get',
      data: {FromDate: newFrom, ToDate: newTo, Customerid: customerId},
      headers: {
          Apoyar: apoyarToken
      },
      dataType: 'json',
      success: function (data) {
        //console.log(data);
        $('.loading-screen').slideUp('slow');

        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html(data.length);

        var sum=0;
        
        for(i=0; i<data.length; i++){
          sum=sum+data[i].ReturnOrderTotalRefundAmount;
        }

        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('<b> &euro; '+(Math.round(sum * 100) / 100).toFixed(2)+'</b>');

        if(data.length==0){
          $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
          $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
        }
      },
      fail: function(){
        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
        $('.loading-screen').slideUp('slow');
      }
    });

    // $.get(apiCall, {FromDate: new_from, ToDate: new_to, Customerid: customerId})
    // .success(function(data){
    //   $('.loading-screen').slideUp('slow');

    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html(data.length);

    //   var sum=0;
      
    //   for(i=0; i<data.length; i++){
    //     sum=sum+data[i].Returnordertotal;
    //   }

    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('<b> &euro; '+(Math.round(sum * 100) / 100).toFixed(2)+'</b>');

    //   if(data.length==0){
    //     $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
    //     $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
    //   }

    // }).fail(function(data){
    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
    //   $('.loading-screen').slideUp('slow');

    // }).always(function(data){
    //   console.log(data);
    
    // });

  }

  //execute
  $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > button').click(function(){
    updateStats();
  });
  
  $('#search-button').click(function(){
    search();
  });
  //Added this code for submit button, so that user can enter submit for search
  $("#orders_data .form-control").keyup(function(event){
		if(event.keyCode == 13){
			$("#search-button").trigger('click');
		}
	});	
  
  retrieveReturnOrders(customerId);
  
});