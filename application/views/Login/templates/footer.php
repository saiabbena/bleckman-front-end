  <script>
    $('.js-valid').hide();
    function emptyError(){
      $('.js-valid').show();
      $('.js-valid').html('Please fill in both fields');
    }
    function whiteSpaceError(){
      $('.js-valid').show();
      $('.js-valid').html('No spaces allowed');
    }
    $('#override > div.container-fluid.form1 > div > div > div.well.bm-well > div > form').submit(function(){
      
      //validation flag
      var valid=1;
      
      //validation logic
      $('input', $(this)).each(function(){
        if($(this).val()==''){
          emptyError();
          valid=0;
        }
        if (/\s/.test($(this).val())){
          whiteSpaceError();
          valid=0;
        }
      });
      
      //check validation pass/fail
      if(valid==0){
        return false;
      }
      else{
        
      }
    });
  </script>
  </body>
</html>