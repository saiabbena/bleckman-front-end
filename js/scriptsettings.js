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
		var updivUid1 = $(updivId +' .Uid').eq(0).val();
		var updivUid2 = $(updivId +' .Uid').eq(1).val();
		var updivUid3 = $(updivId +' .Uid').eq(2).val();
		
		var parentdivUid1 = $('#'+parentdivId +' .Uid').eq(0).val();
		var parentdivUid2 = $('#'+parentdivId +' .Uid').eq(1).val();
		var parentdivUid3 = $('#'+parentdivId +' .Uid').eq(2).val();
		
		$(updivId +' .Uid').eq(0).val(parentdivUid1);
		$(updivId +' .Uid').eq(1).val(parentdivUid2);
		$(updivId +' .Uid').eq(2).val(parentdivUid3);
		
		$('#'+parentdivId +' .Uid').eq(0).val(updivUid1);
		$('#'+parentdivId +' .Uid').eq(1).val(updivUid2);
		$('#'+parentdivId +' .Uid').eq(2).val(updivUid3);
		
		//alert($(updivId +' .PKReasonID').eq(0).val());
		//console.log($('#'+parentdivId +' .PKReasonID').eq(2).val());
		
		//Swith  PKReasonID		
		var updivPKReasonID1 = $(updivId +' .PKReasonID').eq(0).val();
		var updivPKReasonID2 = $(updivId +' .PKReasonID').eq(1).val();
		var updivPKReasonID3 = $(updivId +' .PKReasonID').eq(2).val();
		
		var parentdivPKReasonID1 = $('#'+parentdivId +' .PKReasonID').eq(0).val();
		var parentdivPKReasonID2 = $('#'+parentdivId +' .PKReasonID').eq(1).val();
		var parentdivPKReasonID3 = $('#'+parentdivId +' .PKReasonID').eq(2).val();
		
		$(updivId +' .PKReasonID').eq(0).val(parentdivPKReasonID1);
		$(updivId +' .PKReasonID').eq(1).val(parentdivPKReasonID2);
		$(updivId +' .PKReasonID').eq(2).val(parentdivPKReasonID3);
		
		$('#'+parentdivId +' .PKReasonID').eq(0).val(updivPKReasonID1);
		$('#'+parentdivId +' .PKReasonID').eq(1).val(updivPKReasonID2);
		$('#'+parentdivId +' .PKReasonID').eq(2).val(updivPKReasonID3);
		
		//moveUp($(this));Uid, Pkreasonid
  });
});
