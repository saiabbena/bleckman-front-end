<?php
	$border_bottom = 'style="border-bottom: 10px solid '.$accent_2.' !important;"';
	$btn_bg = 'style="background-color:'.$accent_1.' !important"';

?>
<?php echo '<script> mode="' . $Mode.'";</script>';?>
<?php echo '<script> customername="' . $customername.'";</script>';?>
<?php echo '<script> bccemail="' . $bccemail.'";</script>';?>
<?php echo '<script> isspeciallabel="' . $isspeciallabel.'";</script>';?>
<?php echo '<script> Reference1="' . $Reference1.'";</script>';?>

  <!--I just added some commented text for testing-->
  <div class='container-fluid form1 form_con_login'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><span class='tran-13'><?php echo (isset($translations[13]['Translation'])?$translations[13]['Translation']:'');?></span>
			    <?php //echo $translations[13]['Translation'];?></center></h2>
            <p class='text-center'><span class='tran-Page1heading'><?php if (isset($customerLanguages['Page1heading'])) { echo ($customerLanguages['Page1heading']); } ?></span></p>
            <div class="inputs">
              <form>
                <div class="form-group label-floating">
                  <label for="f2" class="control-label"><span class='tran-0'><?php if (isset($translations[0]['Translation'])) { echo strtoupper($translations[0]['Translation']); } ?></span></label>
                  <input name='sc1[Orderid]' type="text" class="form-control" id="f2">
                  <span class="help-block"><span class='tran-14'><?php echo (isset($translations[14]['Translation'])?$translations[14]['Translation']:'');?></span>
  				<?php //echo $translations[14]['Translation'];?></span>
                </div>
                <div class="form-group label-floating">
                  <label for="f1" class="control-label"><span class='tran-1'><?php if (isset($translations[1]['Translation'])) { echo strtoupper($translations[1]['Translation']); } ?></span></label>
                  <input type="text" name='sc1[email]' class="form-control" id="f1">
                  <span class="help-block"><span class='tran-28'><?php echo (isset($translations[28]['Translation'])?$translations[28]['Translation']:'');?></span>
  				<?php //echo $translations[28]['Translation']?></span>
                </div>              
                
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1' <?php echo $btn_bg?>><span class='tran-7'><?php if (isset($translations[7]['Translation'])) { echo strtoupper($translations[7]['Translation']); } ?></span></button><br>
                <div class="alert alert-dismissible alert-danger" id='screen1-error'>
                  <strong><span class='tran-16'><?php echo $translations[16]['Translation']?></span></strong>
                  <span class='tran-15'><?php echo $translations[15]['Translation']?></span>
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
            <h2><center><span class='tran-17'><?php echo (isset($translations[17]['Translation'])?$translations[17]['Translation']:'');?></span>
			<?php //echo $translations[17]['Translation']?></center></h2>
            <p class='text-center'><span class='tran-Page2heading'><?php echo $customerLanguages['Page2heading']?></span></p>
            <br>
            
            <div class="inputs">
              <table class='table' id='table123'>
                <thead>
                  <tr>
                    <th data-field="0" tabindex="0"></th> <th data-field="1" tabindex="0"><span class='tran-2'><?php echo $translations[2]['Translation'];?></span></th> 
                    <th data-field="2" tabindex="0"><span class='tran-3'><?php echo $translations[3]['Translation'];?></span></th> 
                    <th data-field="3" tabindex="0"><span class='tran-4'><?php echo $translations[4]['Translation'];?></span></th>
                    <th data-field="4" tabindex="0"><span class='tran-5'><?php echo $translations[5]['Translation'];?></span></th>
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
              <h3><center><span class='tran-6'><?php echo $translations[6]['Translation'];?></span>: <b style='color: #cc1543;' id='total-price'>&euro; 0.00</b></center></h3>
              <br>
              <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button2' <?php echo $btn_bg?>><span class='tran-7'><?php echo strtoupper($translations[7]['Translation']);?></span></button><br>
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
          <h2><center><span class='tran-8'><?php echo $translations[8]['Translation'];?></span></center></h2>
          <p class='text-center'><span class='tran-Page3heading'><?php echo $customerLanguages['Page3heading']?></span></p>
          <div class="inputs">
            <table class='table' id='table1234'>
              <thead>
                <tr>
                  <th data-field="0" tabindex="0"></th>
                  <th data-field="1" tabindex="0"><span class='tran-9'><?php echo $translations[9]['Translation'];?></span></th>
                  <th data-field="2" tabindex="0"><span class='tran-10'><?php echo $translations[10]['Translation'];?></span></th>
                </tr>
              </thead>
              <tbody>           
                
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
			  <span id="email_validation" style="display:none;color:#FF0000;">Please enter the valid email id</span>
              <span class="help-block">Select at email where you would like to recieve your label</span>
            </div>
            
            <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button3' <?php echo $btn_bg?>>
            <span class='tran-20'><?php echo (isset($translations[20]['Translation'])?$translations[20]['Translation']:'');?></span>
            </button><br>
			<!--<p style="text-align:right;"><a href="javascript:void(0)" id="btn_career_back">&laquo; Back</a></p>-->
            <div class="alert alert-dismissible alert-success" id='screen3-success'>
              <strong><span class='tran-21'><?php echo $translations[21]['Translation']?></span></strong></strong>
              <span class='tran-22'><?php echo $translations[22]['Translation']?></span>
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
          <p class='text-center'><span class='tran-Page4heading'><?php echo $customerLanguages['Page4heading']?></span></p>
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
          <p class='text-center'><span class='tran-Page4heading'><?php echo $customerLanguages['Page4heading']?></span></p>
          <b>Dear Customer</b><br><br>
          At this moment our servers are too busy to proccess your request. As soon as we are able, we will send you and email confirmation with the label and further instructions on what to do.
          <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <div class='container-fluid form1_mode1' id="mode1form" style="display: none;">
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3'>
        <div class='well bm-well' <?php echo $border_bottom?>>
            <h2><center><span class='tran-13'><?php echo (isset($translations[13]['Translation'])?$translations[13]['Translation']:'');?></span></center></h2>
            <p class='text-center'><span class='tran-Page1heading'><?php if (isset($customerLanguages['Page1heading'])) { echo ($customerLanguages['Page1heading']); } ?></span></p>
            <div class="inputs">
              <form id="Form1-Mode1">
                <div class="alert alert-dismissible alert-danger" id='mode1-fail' style="display: none;">
                  <strong>Whoops!</strong></strong>
                  Something went wrong, please refresh the page and try again.
                </div>
				<div class="row">
		                  <div class="col-md-12">
							
							<div class="col-md-6">
								<div class="form-group label-floating">
		                        <label class="control-label">Order ID</label>
		                        <input name="OrderId" id="OrderId" type="text" class="form-control" maxlength="35">
		                        <span class="help-block">Enter Order Number</span>
		                      </div>
							</div>						  
						  </div>
						</div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group label-floating required">
                        <label class="control-label">First Name</label>
                        <input name="Consumername1" id="Consumername1" type="text" class="form-control" maxlength="35">
                        <span class="help-block">Enter First Name</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Last Name</label>
                        <input name="Consumername2" id="Consumername2" type="text" class="form-control" maxlength="35">
                        <span class="help-block">Enter Last Name</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <div class="form-group label-floating">
                        <label class="control-label">Email</label>
                        <input name="ConsumerEmail" id="ConsumerEmail" type="email" class="form-control" maxlength="255">
                        <span class="help-block">Enter email address to send label</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating required">
                        <label class="control-label">Street</label>
                        <input name="ConsumerShipStreet1" id="ConsumerShipStreet1" type="text" class="form-control" maxlength="35">
                        <span class="help-block">Enter Street</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating required">
                        <label class="control-label">House Number</label>
                        <input name="ConsumerFromShipHouseNumber" id="ConsumerFromShipHouseNumber" type="text" class="form-control" maxlength="15">
                        <span class="help-block">Enter House Number</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group label-floating required">
                        <label class="control-label">PostalCode</label>
                        <input name="ConsumerFromShipPostalCode" id="ConsumerFromShipPostalCode" type="text" class="form-control" maxlength="10">
                        <span class="help-block">Enter PostalCode</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group label-floating required">
                        <label class="control-label">City</label>
                        <input name="ConsumerFromShipCity" id="ConsumerFromShipCity" type="text" class="form-control" maxlength="35">
                        <span class="help-block">Enter City</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group label-floating">
                        <label class="control-label">State</label>
                        <input name="Consumershipstate" id="Consumershipstate" type="text" class="form-control" maxlength="35">
                        <span class="help-block">Enter State</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group label-floating required">
                        <label class="control-label">Country</label>
                        <!-- <input name="ConsumerFromShipCountry" type="text" class="form-control"> -->
                            <?php
                              //echo json_encode($customerCountries);
                              echo '<select class="form-control" id="ConsumerFromShipCountry" name="ConsumerFromShipCountry">';
                              echo '<option value="-1">Select a Country &darr;</option>';
                              for ($i=0; $i<count($customerCountries); $i++) { 
                                if ( $customerCountries[$i]['IsActive'] ) {
                                  echo '<option value="' . $customerCountries[$i]['CountryCode'].'">' . $customerCountries[$i]['CountryName'] . '</option>';
                                }
                              }
                              echo '</select>';
                            ?>
                      </div>
                    </div>
                  </div>
                </div>
                    <?php 
                      if ( isset($Reference1)) {
                        if ( $Reference1 != '' ) {
                        echo '<div class="row">
                            <div class="col-md-12">
                              <div class="col-md-6">
                                <div class="form-group label-floating required">
                                  <label class="control-label">' . $Reference1 .'</label>
                                  <input name="Reference1" id="Reference1" type="text" class="form-control" maxlength="35">
                                  <span class="help-block">Enter ' . $Reference1 .'</span>
                                </div>
                              </div>
                            </div>
                          </div>';
                      }
                      }
                    ?>
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1' <?php echo $btn_bg?>>
                  <span class='tran-7'><?php if (isset($translations[7]['Translation'])) { echo strtoupper($translations[7]['Translation']); } ?></span>
                </button>
                <br>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="no-op-modes" style="display: none;">
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3'>
        <div class='well bm-well'>
          <h3>Operation mode not available. Please contact administrator.</h3>
        </div>
      </div>
    </div>
  </div>
  <?php 
    echo "<script>$('.no-op-modes').hide();</script>";
    echo "<script>var om1=" . $om1 . "</script>";
    echo "<script>var om2=" . $om2 . "</script>";
        if ( $Mode == 1 ) {
          if ( $om1 == true ) {
            echo "<script>$('#mode1form').show();$('.no-op-modes').hide();</script>";
          } else {
            echo "<script>$('#mode1form').hide();$('.no-op-modes').show();$('.form1_mode1').hide();</script>";
          }
        }
        if ( $Mode == 2 ) {
          if ( $om2 == true ) {
            echo "<script>$('.form1').show();$('.no-op-modes').hide();</script>";
          } else {
            echo "<script>$('.form1').hide();$('.no-op-modes').show();</script>";
          }
        }
  ?>