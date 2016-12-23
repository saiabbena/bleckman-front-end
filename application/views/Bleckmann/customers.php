<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>	
	<br>
	  	<div class='row' id="list">
		 <div class="col-sm-12">
			<div class="col-md-11"><h4 id="header" class="pull-left"></h4></div>
			<div class="col-md-1"><button type="button" data-toggle="modal" data-target="#add-customer-modal" id='add-customer' class='add-customer-pop btn btn-raised btn-warning pull-right'>Add</button>
			</div>			
		 </div>
        <?php			
          if(isset($_SESSION['message']['customer_panel'])){
            echo'
            <div class="col-sm-12 alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
              '.$_SESSION['message']['customer_panel'].'
            </div>';
          }
        ?>
			<style>
				
			</style>
	  		<?php				
	  			for($i=0; $i<count($allCustomers); $i++) {
	  				$selCountry = '';
	  				for($j=0;$j<count($allCountries);$j++) {
				    	if ( $allCustomers[$i]['Country'] == $allCountries[$j]['PKCountryId']) {
				    		$selCountry = $allCountries[$j]['CountryName'];
				        	break;
						}
				    }
	  				//echo "details : " . $allCustomers[$i]['CustomerName'];
	  				echo '<div class="col-xs-12 col-sm-4 col-md-3 entry" height="100%">
							<div class="well" style="border-bottom: 5px solid #7C6062;">
								<div class="customer_name"><h2><center>'. $allCustomers[$i]['CustomerName'] .'&nbsp;</center></h2><h4><center>'.
								$allCustomers[$i]['Customerid'].'&nbsp;</center></h4></div>
								
								<center><a data-toggle="modal" data-target="#add-customer-modal" id="edit-customer-'. $allCustomers[$i]['PKCustomerID'] .'" href="#" class="edit-customer-pop"><img src="'.base_url().'/img/settings-btn.png" class="settings-btn-link img-responsive"></a></center>
								
								<div class="row">
								
								<br>
								
								</div>
								<div class="row">
									<div class="col-md-12">
										<a href="'.base_url().'?Customer='.$allCustomers[$i]['PKCustomerID'].'" target="_blank">View Consumer URL</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a class="" href="#" data-toggle="modal" data-target="#moreInfo-' . $allCustomers[$i]['PKCustomerID'] .'">More Info</a> &nbsp; | 
										<a class="" href="managecarriers?Customerid='.$allCustomers[$i]['PKCustomerID'].'">Manage Carriers</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a href="users?Customerid='.$allCustomers[$i]['PKCustomerID'].'">Users</a> | 
										<a href="orders/Customerid/'.$allCustomers[$i]['PKCustomerID'].'">Orders</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a href="languages?Customerid='.$allCustomers[$i]['PKCustomerID'].'">Languages</a> | 
										<a href="settings?Customerid='.$allCustomers[$i]['PKCustomerID'].'">Settings</a>
									</div>
								</div>
								<button type="button" data-toggle="modal" data-target="#delete-customer-modal'. $allCustomers[$i]['PKCustomerID'] .'" id="delete-customer" class="btn btn-raised btn-warning pull-right">Delete</button>
								<br>
								<br>
								</p>
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
				                  		<div class="col-md-6"><a href="'.base_url().'?Customer='. $allCustomers[$i]['PKCustomerID'].'" target="_blank">' .base_url().'?Customer='. $allCustomers[$i]['PKCustomerID'] . '</a></div>
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
				                  		<div class="col-md-6">Postal Code
				                  		</div>
				                  		<div class="col-md-6">' . $allCustomers[$i]['PostalCode'] . '
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
				                  		<div class="col-md-6">' . $selCountry . '
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
				              	<div class="form-group label-floating required">
				                  <label class="control-label">Customer Name</label>
				                  <input id="CustomerName" type="text" name="CustomerName" class="form-control" value="">
				                  <span class="help-block">Enter Customer Name</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label class="control-label">Customer ID</label>
				                  <input id="Customerid" type="text" name="Customerid" class="form-control" value="">
				                  <span class="help-block">Enter Customer ID</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
								<div class="form-group label-floating required">
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
				              	<div class="form-group label-floating required">
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
			                <div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label for="i5" class="control-label">Postal Code</label>
				                  <input id="PostalCode" type="text" name="PostalCode" class="form-control" value="">
				                  <span class="help-block">Enter Postal Code</span>
				                </div>
			                </div>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">City</label>
				                  <input id="City" type="text" name="City" class="form-control" value="">
				                  <span class="help-block">Enter City</span>
				                </div>
			                </div>
		                </div>
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">State</label>
				                  <input id="State" type="text" name="State" class="form-control" value="">
				                  <span class="help-block">Enter State</span>
				                </div>
			                </div>
			                <div class="col-md-6">
				              	<div class="form-group label-floating required">
				              		<label class="control-label">Country</label>
				                  <?php
				                  	//echo json_encode($allCountries);
				                  	echo '<select class="form-control" id="Country" name="Country">';
				                  	echo '<option value="-1">Select</option>';
				                  	for ($i=0; $i<count($allCountries); $i++) { 
				                  		if ( $allCountries[$i]['IsActive'] ) {
				                  			echo '<option value="' . $allCountries[$i]['PKCountryId'].'">' . $allCountries[$i]['CountryName'] . '</option>';
				                  		}
				                  	}
				                  	
				                  	echo '</select>';
				                  ?>
				                </div>
			                </div>
		                </div>


<!-- 		               	<div class="row login-info">
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
				                  <span class="help-block">Enter Password(e.g. Abcde5#)</span>
				                </div>
				            </div>
		            	</div> -->
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