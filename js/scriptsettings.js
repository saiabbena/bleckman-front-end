//initialization
function moveUp(element){	
	thisElement=element.parent().parent().html();
	alert(element);
	previousElement=element.parent().parent().prev().prev().html();
	thisOb=$('.order-btn', element.parent().parent()).first().html();
	prevOb=$('.order-btn', element.parent().parent().prev().prev()).first().html();
	$('.order-btn', element.parent().parent()).first().html(prevOb);
	$('.order-btn', element.parent().parent().prev().prev()).first().html(thisOb);
	element.parent().parent().prev().prev().html(thisElement);
	element.parent().parent().html(previousElement);
}

//execution
$(document).ready(function(){

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

  $('.move-up-btn').click(function(){
	  var selected= $(this).index();
		var parentdivId = $(this).closest('div').prop('id');		
		var divid = parentdivId.substring(10);
		var updivId = '#reason_div'+parseInt(divid-1);
		
		//Switch reason_text
		//alert($('#reason_div'+parseInt(divid-1)+' .reason_text').eq(0).val());		
		var updiv_reason_text1 = $(updivId +' .reason_text').eq(0).val();		
		var updiv_reason_text2 = $(updivId +' .reason_text').eq(1).val();
		var updiv_reason_text3 = $(updivId +' .reason_text').eq(2).val();		
		
		var parentdiv_reason_text1 = $('#'+parentdivId +' .reason_text').eq(0).val();
		var parentdiv_reason_text2 = $('#'+parentdivId +' .reason_text').eq(1).val();
		var parentdiv_reason_text3 = $('#'+parentdivId +' .reason_text').eq(2).val();
		//alert(parentdiv_reason_text3);
		
		$(updivId +' .reason_text').eq(0).val(parentdiv_reason_text1);
		$(updivId +' .reason_text').eq(1).val(parentdiv_reason_text2);
		$(updivId +' .reason_text').eq(2).val(parentdiv_reason_text3);
		
		$('#'+parentdivId +' .reason_text').eq(0).val(updiv_reason_text1);
		$('#'+parentdivId +' .reason_text').eq(1).val(updiv_reason_text2);
		$('#'+parentdivId +' .reason_text').eq(2).val(updiv_reason_text3);
		
		//Swith Uid
		//console.log($('#'+parentdivId +' .Uid').eq(0).val());
		//alert($('#'+parentdivId +' .Uid').eq(0).val());
		$(updivId +' .Uid').eq(0).val($('#'+parentdivId +' .Uid').eq(0).val());
		$(updivId +' .Uid').eq(1).val($('#'+parentdivId +' .Uid').eq(1).val());
		$(updivId +' .Uid').eq(2).val($('#'+parentdivId +' .Uid').eq(2).val());
		
		$('#'+parentdivId +' .Uid').eq(0).val($(updivId +' .Uid').eq(0).val());
		$('#'+parentdivId +' .Uid').eq(1).val($(updivId +' .Uid').eq(1).val());
		$('#'+parentdivId +' .Uid').eq(2).val($(updivId +' .Uid').eq(2).val());
		
		//Swith  PKReasonID		
		/*
		$(updivId +' .PKReasonID').eq(0).val($('#'+parentdivId +' .PKReasonID').eq(0).val());
		$(updivId +' .PKReasonID').eq(1).val($('#'+parentdivId +' .PKReasonID').eq(1).val());
		$(updivId +' .PKReasonID').eq(2).val($('#'+parentdivId +' .PKReasonID').eq(2).val());
		
		$('#'+parentdivId +' .PKReasonID').eq(0).val($(updivId +' .PKReasonID').eq(0).val());
		$('#'+parentdivId +' .PKReasonID').eq(1).val($(updivId +' .PKReasonID').eq(1).val());
		$('#'+parentdivId +' .PKReasonID').eq(2).val($(updivId +' .PKReasonID').eq(2).val());
		*/
		//moveUp($(this));Uid, Pkreasonid
  });
});
