<?php
	$border_bottom = 'style="border-bottom: 10px solid '.$accent_2.' !important;"';
	$btn_bg = 'style="background-color:'.$accent_1.' !important"';
?>
<?php echo '<script> mode="' . $Mode.'";</script>';?>
  <!--I just added some commented text for testing-->
  <div class='container-fluid form1 form_con_login'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><?php echo (isset($translations[13]['Translation'])?$translations[13]['Translation']:'');?>
			<?php //echo $translations[13]['Translation'];?></center></h2>
            <p class='text-center'><?php if (isset($customerLanguages['Page1heading'])) { echo ($customerLanguages['Page1heading']); } ?></p>
            <div class="inputs">
              <form>
                <div class="form-group label-floating">
                  <label for="f2" class="control-label"><?php if (isset($translations[0]['Translation'])) { echo strtoupper($translations[0]['Translation']); } ?></label>
                  <input name='sc1[Orderid]' type="text" class="form-control" id="f2">
                  <span class="help-block"><?php echo (isset($translations[14]['Translation'])?$translations[14]['Translation']:'');?>
  				<?php //echo $translations[14]['Translation'];?></span>
                </div>
                <div class="form-group label-floating">
                  <label for="f1" class="control-label"><?php if (isset($translations[1]['Translation'])) { echo strtoupper($translations[1]['Translation']); } ?></label>
                  <input type="text" name='sc1[email]' class="form-control" id="f1">
                  <span class="help-block"><?php echo (isset($translations[28]['Translation'])?$translations[28]['Translation']:'');?>
  				<?php //echo $translations[28]['Translation']?></span>
                </div>              
                
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1' <?php echo $btn_bg?>><?php if (isset($translations[7]['Translation'])) { echo strtoupper($translations[7]['Translation']); } ?></button><br>
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
			  <div class="alert alert-dismissible alert-danger" id='reason_error'>
                <strong>Whoops!</strong>
                Please select the return reason.
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
            
            <div class="form-group">
              <label for="f1" class="control-label">Email</label>
              <input type="text" id='emailConfirm' value='' class="form-control" id="f1">
              <span class="help-block">Select at email where you would like to recieve your label
            </div>
            
            <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button3' <?php echo $btn_bg?>><?php echo (isset($translations[20]['Translation'])?$translations[20]['Translation']:'');?></button><br>
			<p style="text-align:right;"><a href="javascript:void(0)" id="btn_career_back">&laquo; Back</a></p>
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
  
  <div class='container-fluid form4'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
          <h2><center>Thank You!</center></h2>
          <p class='text-center'><?php echo $customerLanguages['Page4heading']?></p>
          <b>Dear Customer</b><br><br>
          You can print your label by following this link: <a id='label-iframe2' target="_blank" href=''>Print label</a><br><br>
          You can read additional instructions for returning your order based on the carrier you chose by following this link: <a href='#'>Go to the carriers web-portal</a><br><br>
          Additionally all of this information has been forwarded to your email address.<br><br>
          Thank you for using our service.
          <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <div class='container-fluid form5'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
          <h2><center>Thank You!</center></h2>
          <p class='text-center'><?php echo $customerLanguages['Page4heading']?></p>
          <b>Dear Customer</b><br><br>
          At this moment our servers are too busy to proccess your request. As soon as we are able, we will send you and email confirmation with the label and further instructions on what to do.
          <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <div class='container-fluid form1_mode1' style="display: none;">
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><?php echo (isset($translations[13]['Translation'])?$translations[13]['Translation']:'');?></center></h2>
            <p class='text-center'><?php if (isset($customerLanguages['Page1heading'])) { echo ($customerLanguages['Page1heading']); } ?></p>
            <div class="inputs">
              <form id="Form1-Mode1">
                <div class="alert alert-dismissible alert-danger" id='mode1-fail' style="display: none;">
                  <strong>Whoops!</strong></strong>
                  Something went wrong, please refresh the page and try again.
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group label-floating required">
                        <label class="control-label">First Name</label>
                        <input name="Consumername1" id="Consumername1" type="text" class="form-control">
                        <span class="help-block">Enter First Name</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Last Name</label>
                        <input name="Consumername2" id="Consumername2" type="text" class="form-control">
                        <span class="help-block">Enter Last Name</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <div class="form-group label-floating required">
                        <label class="control-label">Email</label>
                        <input name="ConsumerEmail" id="ConsumerEmail" type="email" class="form-control">
                        <span class="help-block">Enter email address to send label</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating required">
                        <label class="control-label">Street</label>
                        <input name="ConsumerShipStreet1" id="ConsumerShipStreet1" type="text" class="form-control">
                        <span class="help-block">Enter Street</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating required">
                        <label class="control-label">House Number</label>
                        <input name="ConsumerFromShipHouseNumber" id="ConsumerFromShipHouseNumber" type="text" class="form-control">
                        <span class="help-block">Enter House Number</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="form-group label-floating required">
                        <label class="control-label">PostalCode</label>
                        <input name="ConsumerFromShipPostalCode" id="ConsumerFromShipPostalCode" type="text" class="form-control">
                        <span class="help-block">Enter PostalCode</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group label-floating required">
                        <label class="control-label">City</label>
                        <input name="ConsumerFromShipCity" id="ConsumerFromShipCity" type="text" class="form-control">
                        <span class="help-block">Enter City</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group label-floating">
                        <label class="control-label">State</label>
                        <input name="Consumershipstate" id="Consumershipstate" type="text" class="form-control">
                        <span class="help-block">Enter State</span>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group label-floating required">
                        <label class="control-label">Country</label>
                        <!-- <input name="ConsumerFromShipCountry" type="text" class="form-control"> -->
                            <?php
                              //echo json_encode($allCountries);
                              echo '<select class="form-control" id="ConsumerFromShipCountry" name="ConsumerFromShipCountry">';
                              echo '<option value="-1">Select a Country &darr;</option>';
                              for ($i=0; $i<count($allCountries); $i++) { 
                                if ( $allCountries[$i]['IsActive'] ) {
                                  echo '<option value="' . $allCountries[$i]['CountryCode'].'">' . $allCountries[$i]['CountryName'] . '</option>';
                                }
                              }
                              echo '</select>';
                            ?>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1' <?php echo $btn_bg?>><?php if (isset($translations[7]['Translation'])) { echo strtoupper($translations[7]['Translation']); } ?></button>
                <br>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>