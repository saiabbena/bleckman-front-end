<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
	<div class='row'>
		<div class="col-xs-12 col-md-12">
			<button type="button" data-toggle="modal" data-target="#add-customer-modal" id='add-customer' class='add-customer-pop btn btn-raised btn-warning pull-right'>Add</button>
		</div>
	</div>
	<br>
	  	<div class='row'>
        <?php
          if(isset($_SESSION['message']['customer_panel'])){
            echo'
            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
              '.$_SESSION['message']['customer_panel'].'
            </div>';
          }
        ?>

	  		<?php				
				//print_r($this->unit->result());
				//print_r($this->unit->report());
				//exit();
	  			for($i=0; $i<count($allCustomers); $i++) {
	  				//echo "details : " . $allCustomers[$i]['CustomerName'];
	  				echo '<div class="col-xs-12 col-md-3" height="100%"">
							<div class="well" style="border-bottom: 5px solid #22B8AA;">
								<h3>'. $allCustomers[$i]['CustomerName'] .'&nbsp;</h3>
								<p>'. $allCustomers[$i]['Country'] .'&nbsp;</p>
								<p>'. $allCustomers[$i]['PhoneNumber'] .'&nbsp;</p>
								<p>'. $allCustomers[$i]['URL'] .'&nbsp;</p>
								<p><a href="#" data-toggle="modal" data-target="#moreInfo-' . $allCustomers[$i]['PKCustomerID'] .'">More Info</a></p>
								<div class="row">
									<button type="button" data-toggle="modal" data-target="#delete-customer-modal'. $allCustomers[$i]['PKCustomerID'] .'" id="delete-customer" class="btn btn-raised btn-danger pull-right">Delete</button>
									<button type="button" data-toggle="modal" data-target="#add-customer-modal" id="edit-customer-'. $allCustomers[$i]['PKCustomerID'] .'" class="btn btn-raised btn-success pull-right edit-customer-pop">Edit</button>
								</div>
								<p><a href="carriers/searchbyCID/'.$allCustomers[$i]['PKCustomerID'].'">Carriers</a>
								<a class="pull-right" href="languages?Customerid='.$allCustomers[$i]['PKCustomerID'].'">Languages</a></p>
							</div>
						</div>';
					echo '<div class="modal fade" id="delete-customer-modal'.$allCustomers[$i]['PKCustomerID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <form method="POST" action="deleteCustomer">
				                  <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title" id="myModalLabel">Delete Customer - '. $allCustomers[$i]['CustomerName'].'?</h4>
				                  </div>
				                  <div class="modal-body">
				                    <p>Are you sure you want to delete this Customer?</p>';
				    echo '<input type="hidden" name="PKCustomerID" value="'. $allCustomers[$i]['PKCustomerID'].'">';
		            echo'
		                  </div>
		                  <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                    <button type="submit" class="btn btn-danger">Delete</button>
		                  </div>
		                  </form>						  
		                </div>
		              </div>
		            </div>
		            ';
		            //modal for More Info
		            echo '<div class="modal fade" id="moreInfo-'.$allCustomers[$i]['PKCustomerID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <div class="modal-header" >
				                  	<h3>Customer Information</h3>
				                  </div>
				                  <div class="modal-body">
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Customer Name
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['CustomerName'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Email Address
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['EmailAddress'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">URL
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['URL'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Phone Number
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['PhoneNumber'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Address Line1
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['AddressLine1'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Address Line2
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['AddressLine2'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">City
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['City'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">State
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['State'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Country
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['Country'] . '
				                  		</div>
				                  	</div>
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">Postal Code
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['PostalCode'] . '
				                  		</div>
				                  	</div>
				                  </div>
				                  <div class="modal-footer">
				                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				                  </div>
				                </div>
				              </div>
				              </div>
				        ';
	  			}
			?>
		</div>
	</div>
</div>

        <!-- Add Customer Modal -->
        <div class="modal fade" id="add-customer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              	<form method="POST" action="submitCustomerInfo" id="customer-info-form">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel" >Add a Customer</h4>
	              </div>
	              <div class="modal-body">
				    <div class='loading' style="display:none;">
				      <div style='height: 15vh'></div>
				      <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
					  <br>
				      <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
					  <div style='height: 15vh'></div>				      
				      </center>
				    </div>
    				<div class="customer-modal">
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Customer Name</label>
				                  <input id="CustomerName" type="text" name="CustomerName" class="form-control" value="">
				                  <span class="help-block">Enter Customer Name</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				               	<div class="form-group label-floating">
				                  <label class="control-label">URL</label>
				                  <input id="URL" type="text" name="URL" class="form-control" value="">
				                  <span class="help-block">Enter URL value</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
								<div class="form-group label-floating">
			                        <label for="i5" class="control-label">Email</label>
			                        <input id="EmailAddress" type="email" name="EmailAddress" class="form-control" value="">
			                        <span class="help-block">Enter Email</span>
			                    </div>
			                </div>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Phone Number</label>
				                  <input id="PhoneNumber" type="text" name="PhoneNumber" class="form-control" value="">
				                  <span class="help-block">Enter Phone Number</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Address Line 1</label>
				                  <input id="AddressLine1" type="text" name="AddressLine1" class="form-control" value="">
				                  <span class="help-block">Enter Address Line 1</span>
				                </div>
		                	</div>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Address Line 2</label>
				                  <input id="AddressLine1" type="text" name="AddressLine2" class="form-control" value="">
				                  <span class="help-block">Enter Address Line 2</span>
				                </div>
		                	</div>
		                </div>
		                <div class="row">
			                <div class="col-md-3">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Postal Code</label>
				                  <input id="PostalCode" type="text" name="PostalCode" class="form-control" value="">
				                  <span class="help-block">Enter Postal Code</span>
				                </div>
			                </div>
		                	<div class="col-md-3">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">City</label>
				                  <input id="City" type="text" name="City" class="form-control" value="">
				                  <span class="help-block">Enter City</span>
				                </div>
			                </div>
		                	<div class="col-md-3">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">State</label>
				                  <input id="State" type="text" name="State" class="form-control" value="">
				                  <span class="help-block">Enter State</span>
				                </div>
			                </div>
			                <div class="col-md-3">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Country</label>
				                  <input id="Country" type="text" name="Country" class="form-control" value="">
				                  <span class="help-block">Enter Country</span>
				                </div>
			                </div>
		                </div>
		                
		               	<div class="row login-info">
		               		<h4>Login Details</h4>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Username</label>
				                  <input id="Username" type="text" name="Username" class="form-control" value="">
				                  <span class="help-block">Enter Username</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Password</label>								  
				                  <input id="Password" type="password" name="Password" class="form-control" value="">
				                  <span class="help-block">Enter Password(e.g. Abcde5)</span>
				                </div>
				            </div>
		            	</div>
		            </div>
		          </div>
		          <input id="PKCustomerID" type="hidden" name="PKCustomerID" value="">
	              <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">save</button>
	              </div>
              	</form>
            </div>
          </div>
        </div>