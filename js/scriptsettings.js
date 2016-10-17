//initialization
function moveUp(element){
  thisElement=element.parent().parent().html();
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
    moveUp($(this));
  });
});
