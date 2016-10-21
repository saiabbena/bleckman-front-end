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
		/*
		var parentdiv_html = $('#'+parentdivId).html();
		var updiv_html = $(updivId).html();		
		$('#'+parentdivId).html(updiv_html);
		$(updivId).html(parentdiv_html);
		*/
		
		//Switch reason_text
		//alert($('#reason_div'+parseInt(divid-1)+' .reason_text').eq(0).val());
		/**/
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
		//console.log(parentdiv_reason_text1);
		
		//Change the sequence number to reorder Sequenceno
		/*
		var updiv_sequenceno1 = $(updivId +' .Sequenceno').eq(0).val();
		var parentdiv_sequenceno1 = $('#'+parentdivId +' .Sequenceno').eq(0).val();		
		$(updivId +' .Sequenceno').eq(0).val(parentdiv_sequenceno1);
		$('#'+parentdivId +' .Sequenceno').eq(0).val(updiv_sequenceno1);
		*/		
		
  });
});
