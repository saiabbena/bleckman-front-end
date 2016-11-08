<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
	<div class='row'>
		<div class="col-xs-12 col-md-12">
			<button type="button" data-toggle="modal" data-target="#add-customer-modal" id='add-customer' class='btn btn-raised btn-warning pull-right'>Add</button>
		</div>
	</div>
	<br>
	  	<div class='row'>
        <?php
          if(isset($_SESSION['message']['customer_panel'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['customer_panel'].'
            </div>';
          }
        ?>

	  		<?php 
	  			for($i=0; $i<count($allCustomers); $i++) {
	  				//echo "details : " . $allCustomers[$i]['CustomerName'];
	  				echo '<div class="col-xs-12 col-md-3" height="100%"">
							<div class="well" style="border-bottom: 5px solid #22B8AA; padding-bottom: 40px;">
								<h3>'. $allCustomers[$i]['CustomerName'] .'</h3>
								<p>'. $allCustomers[$i]['Country'] .'</p>
								<p>'. $allCustomers[$i]['PhoneNumber'] .'</p>
								<p>'. $allCustomers[$i]['URL'] .'</p>
								<p><a href="#" >More Info</a></p>
								<div class="row">
									<button type="button" data-toggle="modal" data-target="#delete-customer-modal'. $allCustomers[$i]['PKCustomerID'] .'" id="delete-customer" class="btn btn-raised btn-danger pull-right">Delete</button>
									<button type="button" data-toggle="modal" data-target="#add-customer-modal" id="add-customer" class="btn btn-raised btn-success pull-right">Edit</button>
								</div>
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
	  			}
			?>
		</div>
	</div>
</div>
        <!-- Add Customer Modal -->
        <div class="modal fade" id="add-customer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              	<form method="POST" action="submitCustomerInfo">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel" >Add a Customer</h4>
	              </div>
	              <div class="modal-body">
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Customer Name</label>
				                  <input id="CustomerName" type="text" name="CustomerName" class="form-control" value="">
				                  <span class="help-block">Enter Customer Name</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				               	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">URL</label>
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
				                  <input id="AddressLine1" type="text" name="AddressLine1" class="form-control" id="i5" value="">
				                  <span class="help-block">Enter Address Line 1</span>
				                </div>
		                	</div>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Address Line 2</label>
				                  <input id="AddressLine1" type="text" name="AddressLine2" class="form-control" id="i5" value="">
				                  <span class="help-block">Enter Address Line 2</span>
				                </div>
		                	</div>
		                </div>
		                <div class="row">
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
				                  <input id="URL" type="text" name="Country" class="form-control" value="">
				                  <span class="help-block">Enter Country</span>
				                </div>
			                </div>
			                <div class="col-md-3">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Postal Code</label>
				                  <input id="PostalCode" type="text" name="PostalCode" class="form-control" id="i5" value="">
				                  <span class="help-block">Enter Postal Code</span>
				                </div>
			                </div>
		                </div>
		                
		               	<div class="row">
		               		<h4>Login Details</h4>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Username</label>
				                  <input id="Username" type="text" name="Username" class="form-control" id="i5" value="">
				                  <span class="help-block">Enter Username</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Password</label>
				                  <input id="Password" type="text" name="Password" class="form-control" id="i5" value="">
				                  <span class="help-block">Enter Password</span>
				                </div>
				            </div>
		            	</div>
		          </div>
	              <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">add</button>
	              </div>
              	</form>
            </div>
          </div>
        </div>