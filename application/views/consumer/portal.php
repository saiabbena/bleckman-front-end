<?php			
	$border_bottom = 'style="border-bottom: 10px solid '.$accent_2.' !important;"';
	$btn_bg = 'style="background-color:'.$accent_1.' !important"';
?>
  <!--I just added some commented text for testing-->
  <div class='container-fluid form1'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><?php echo (isset($translations[13]['Translation'])?$translations[13]['Translation']:'');?>
			<?php //echo $translations[13]['Translation'];?></center></h2>
            <p class='text-center'><?php echo $customerLanguages['Page1heading']?></p>
            <div class="inputs">
              <form>
                <div class="form-group label-floating">
                  <label for="f2" class="control-label"><?php echo strtoupper($translations[0]['Translation']);?></label>
                  <input name='sc1[Orderid]' type="text" class="form-control" id="f2">
                  <span class="help-block"><?php echo (isset($translations[14]['Translation'])?$translations[14]['Translation']:'');?>
  				<?php //echo $translations[14]['Translation'];?></span>
                </div>
                <div class="form-group label-floating">
                  <label for="f1" class="control-label"><?php echo strtoupper($translations[1]['Translation']);?></label>
                  <input type="text" name='sc1[email]' class="form-control" id="f1">
                  <span class="help-block"><?php echo (isset($translations[28]['Translation'])?$translations[28]['Translation']:'');?>
  				<?php //echo $translations[28]['Translation']?></span>
                </div>              
                
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1' <?php echo $btn_bg?>><?php echo strtoupper($translations[7]['Translation']);?></button><br>
                <div class="alert alert-dismissible alert-danger" id='screen1-error'>
                  <strong><?php echo $translations[16]['Translation']?></strong>
                  <?php echo $translations[15]['Translation']?>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class='container-fluid form2'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><?php echo (isset($translations[17]['Translation'])?$translations[17]['Translation']:'');?>
			<?php //echo $translations[17]['Translation']?></center></h2>
            <p class='text-center'><?php echo $customerLanguages['Page2heading']?></p>
            <br>
            
            <div class="inputs">
              <table class='table' id='table123'>
                <thead>
                  <tr>
                    <th data-field="0" tabindex="0"></th> <th data-field="1" tabindex="0"><?php echo $translations[2]['Translation'];?></th> <th data-field="2" tabindex="0"><?php echo $translations[3]['Translation'];?></th> <th data-field="3" tabindex="0"><?php echo $translations[4]['Translation'];?></th><th data-field="4" tabindex="0"><?php echo $translations[5]['Translation'];?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value='3444'>
                          </label>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <a href='#'>VIVALLO COATIGAN_EBONY</a>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <b>&euro; 34.44</b>
                    </td>
                    
                  </tr>
                  
                  <tr>
                    <td>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value='3444'>
                          </label>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <a href='#'>VIVALLO COATIGAN_EBONY</a>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <b>&euro; 34.44</b>
                    </td>
                    
                  </tr>
                  
                  <tr>
                    <td>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value='3444'>
                          </label>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <a href='#'>VIVALLO COATIGAN_EBONY</a>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <b>&euro; 34.44</b>
                    </td>
                    
                  </tr>
                  
                  <tr>
                    <td>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value='3444'>
                          </label>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <a href='#'>VIVALLO COATIGAN_EBONY</a>
                    </td>
                    
                    <td>
                      <br style='font-size: 21px;'>
                      <b>&euro; 34.44</b>
                    </td>
                    
                  </tr>
                </tbody>
              </table>
              
              <br>
              <h3><center><?php echo $translations[6]['Translation'];?>: <b style='color: #cc1543;' id='total-price'>&euro; 0.00</b></center></h3>
              <br>
              <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button2' <?php echo $btn_bg?>><?php echo strtoupper($translations[7]['Translation']);?></button><br>
              <div class="alert alert-dismissible alert-danger" id='screen2-error'>
                <strong>Whoops!</strong>
                Please select at least one item to return.
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class='container-fluid form3'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
          <h2><center><?php echo $translations[8]['Translation'];?></center></h2>
          <p class='text-center'><?php echo $customerLanguages['Page3heading']?></p>
          <div class="inputs">
            <table class='table' id='table1234'>
              <thead>
                <tr>
                  <th data-field="0" tabindex="0"></th><th data-field="1" tabindex="0"><?php echo $translations[9]['Translation'];?></th><th data-field="2" tabindex="0"><?php echo $translations[10]['Translation'];?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class='form-group'>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sample1" value="option1" checked="">
                        </label>
                      </div>
                    </div>
                  </td>
                  
                  <td>
                    <br style='font-size: 21px;'>
                    <b>DHL</b>
                  </td>
                  
                  <td>
                    <br style='font-size: 21px;'>
                    <a href='#'  class='pull-right'>more info</a>
                  </td>
                  
                </tr>
                
                <tr>
                  <td>
                    <div class='form-group'>
                      <div class="radio">
                        <label>
                          <input type="radio" name="sample1" value="option2">
                        </label>
                      </div>
                    </div>
                  </td>
                  
                  <td>
                    <br style='font-size: 21px;'>
                    <b>NL POST</b>
                  </td>
                  
                  <td>
                    <br style='font-size: 21px;'>
                    <a href='#' class='pull-right'>more info</a>
                  </td>
                  
                </tr>
              </tbody>
            </table>
            
            <!--modal for label-->
            <div class="modal fade" tabindex="-1" role="dialog" id='carrier-label-modal'>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Print your label</h4>
                  </div>
                  <div class="modal-body"> 
                    <b>Dear Customer</b><br><br>
                    You can print your label by following this link: <a id='label-iframe' target="_blank" href=''>Print label</a><br><br>
                    You can read additional instructions for returning your order based on the carrier you chose by following this link: <a href='#'>Go to the carriers web-portal</a><br><br>
                    Additionally all of this information has been forwarded to your email address.<br><br>
                    Thank you for using our service.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
            <br>
            <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button3' <?php echo $btn_bg?>><?php echo (isset($translations[20]['Translation'])?$translations[20]['Translation']:'');?></button><br>
            <div class="alert alert-dismissible alert-success" id='screen3-success'>
              <strong><?php echo $translations[21]['Translation']?></strong></strong>
              <?php echo $translations[22]['Translation']?>
            </div>
            <div class="alert alert-dismissible alert-danger" id='screen3-fail'>
              <strong>Whoops!</strong></strong>
              Something went wrong, please refresh the page and try again.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>