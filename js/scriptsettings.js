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
		/**/
		var parentdiv_html = $('#'+parentdivId+' .reason_span').html();
		var updiv_html = $(updivId+' .reason_span').html();
		//console.log(parentdiv_html);		
		$('#'+parentdivId+' .reason_span').html(updiv_html);
		$(updivId+' .reason_span').html(parentdiv_html);		
		
		//Change the sequence number to reorder Sequenceno
		
		var updiv_sequenceno1 = $(updivId +' .Sequenceno').val();
		var parentdiv_sequenceno1 = $('#'+parentdivId +' .Sequenceno').val();		
		
		$(updivId +' .Sequenceno').val(parentdiv_sequenceno1);
		$('#'+parentdivId +' .Sequenceno').val(updiv_sequenceno1);
		//console.log(updiv_sequenceno1);
				
		
  });
});
