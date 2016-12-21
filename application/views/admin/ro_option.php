    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
        <h4>Create Return Order</h4>	
        <br>		
		<div class='container-fluid form1 form_ro'>
			<div class='row'>
			  <div class='col-xs-12 col-sm-12' style="padding-bottom: 22px;">
				<div class=' form-inputs' style="border: 1px solid #ddd; padding: 20px;">	
					<h4>By Order Details</h4>									
					<div class="inputs">
					  <!-- <form method="post" onsubmit="javascript:return false;"> -->
						<div class="row">
							<div class="col-md-12">
								<input type="hidden" name="hdn_ro_customerid" id="hdn_ro_customerid" value="<?php echo $_SESSION['Customerid'];?>" />
								<div class="col-md-6">
									<div class="form-group label-floating">
									  <label for="f2" class="control-label">Order ID</label>
									  <input name='Orderid' type="text" class="form-control" id="f2">
									  <span class="help-block">	</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating">
									  <label for="f1" class="control-label">Email</label>
									  <input type="text" name='email' class="form-control" id="f1">
									  <span class="help-block"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">							
								<div class="col-md-6">
									<div class="form-group label-floating">
									  <label for="f1" class="control-label">Phone</label>
									  <input type="text" name='Phone' class="form-control" id="f3">
									  <span class="help-block"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating">
									  <label for="f2" class="control-label">Name</label>
									  <input name='Name' type="text" class="form-control" id="f4">
									  <span class="help-block">	</span>
									</div>
								</div>					
							</div>		
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group text-center">
									<button class='btn btn-raised btn-block btn-success btn-bm' id="btn_create_ro">Search</button><br>
								</div>
							</div>
							<div class="col-md-12">
								<div class="alert alert-dismissible alert-danger"  id='screen1-error'><strong>Whoops! No inputs or you entered something incorrectly or something went wrong... please try again.</strong>
								<?php //echo $translations[15]['Translation']?>
								</div>
							</div>		
						</div>
					  <!-- </form> -->
					</div>
				</div>
			  </div>
			</div>
		  </div>
  
		<div class='container-fluid form2'>
		    <div class='row'>
		      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1'>
		        <div class='well bm-well' >
		            <h2><center>Pick the items you want to return</center></h2>
		            <p class="text-center">PLease select what you wish to return</p>
		            <br>
		            
		            <div class="inputs">
		              <table class='table' id='table123'>
		                <thead>
		                  <tr>
		                    <th data-field="0" tabindex="0"></th> 
							<th data-field="1" tabindex="0">Item</th>
							<th data-field="2" tabindex="0">Product Price</th>
							<th data-field="3" tabindex="0">Reason for Return</th>
							<th data-field="4" tabindex="0">Quantity</th>
		                  </tr>
		                </thead>				
		                <tbody>              
		                </tbody>
		              </table>
		              
		              <br>
		              <h3><center>Total Refund<?php //echo $translations[6]['Translation'];?>: <b style='color: #cc1543;' id='total-price'>&euro; 0.00</b></center></h3>
		              <br>
		              <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button2'>Submit<?php //echo strtoupper($translations[7]['Translation']);?></button><br>
					  <p style="text-align:right;"><a href="javascript:void(0)" class="btn_admin_career_back2">&laquo; Back</a></p>
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
		<div class='container-fluid form3 ro_option_carriers'>
			<div class='row'>
			  <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3'>
				<div class='well bm-well'>
				  <h2><center>Select a Carrier<?php //echo $translations[8]['Translation'];?></center></h2>
				  <p class='text-center'>Please choose a Carrier<?php //echo $customerLanguages['Page3heading']?></p>
				  <div class="inputs">
					<table class='table' id='table1234'>
					  <thead>
						<tr>
						  <th data-field="0" tabindex="0"></th><th data-field="1" tabindex="0">Carrier<?php //echo $translations[9]['Translation'];?></th><th data-field="2" tabindex="0">Instructions<?php //echo $translations[10]['Translation'];?></th>
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
					  <span class="help-block">Select at email where you would like to recieve your label
					</div>
					
					<button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button3'>CONFIRM AND PRINT POSTAGE LABEL<?php //echo (isset($translations[20]['Translation'])?$translations[20]['Translation']:'');?></button><br>
					<p style="text-align:right;"><a href="javascript:void(0)" class="btn_admin_career_back">&laquo; Back</a></p>
					<div class="alert alert-dismissible alert-success" id='screen3-success'>
					  <strong><?php //echo $translations[21]['Translation']?></strong></strong>
					  <?php //echo $translations[22]['Translation']?>
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
  
		<div id="thank_you" class='container-fluid form4'>
			<div class='row'>
			  <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
				<div class='well bm-well'>
				  <button type="button" class="close" id="thank_you_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h2><center>Thank You!</center></h2>
				  <p class='text-center'><?php //echo $customerLanguages['Page4heading']?></p>
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
			  <div class='col-xs-12'>
				
					<h2><center>Orders List</center></h2>
					<p class='text-center'><?php //echo $customerLanguages['Page2heading']?></p>
					<br>
					
					<div class="inputs">
					  <table class='table table-striped table-bordered' id='list_to_create_RO'>
						<thead>
						  <tr>
							  <th>Shipped Date</th>
							  <th>Consumer ID</th>	
							  <th>Consumer Email</th>
							  <th>Order Id</th>							  						  
							  <th>Name</th>
							  <th>Status</th>
							  <th class="nosort ">Return</th>
							</tr>
						</thead>
						<tbody> 
							
						</tbody>
					  </table>		  
					 
					</div>
				
			  </div>
			</div>
		</div>
		<div class='container-fluid form1_mode1'>
		    <div class='row' >
		      <div class='col-xs-12 col-sm-10 col-md-12  col-lg-12'>
		        <div style="border: 1px solid #ddd; padding: 20px;">
		            <h4>By Address</h4>
		            <p class='text-center'></p>
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
		                              echo json_encode($allCountries);
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
		                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm'>Submit</button>
		                <br>
		              </form>
		            </div>
		        </div>
		      </div>
		    </div>
		</div>
      </div>
	  	  
    </div>
  </div>
</div>	
<script>  
$(document).ready(function () {
	$("#thank_you_close").on('click', function(event){		
		location.reload()
	});
	
	$('.btn_admin_career_back').click(function(){		
		location.reload() 
	});
	$('.btn_admin_career_back2').click(function(){	  		
		location.reload()	  
	});
});
</script>