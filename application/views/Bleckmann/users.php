<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
	<div class='row'>
		<div class="col-xs-12 col-md-12">
			<button type="button" data-toggle="modal" data-target="#add-user-modal" id='add-user' class='add-pop btn btn-raised btn-warning pull-right'>Add</button>
		</div>
	</div>
	<br>
	  	<div class='row'>
        <?php
          if(isset($_SESSION['message']['user_panel'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['user_panel'].'
            </div>';
          }
        ?>

	  		<?php 
	  			for($i=0; $i<count($allUsers); $i++) {
	  				//echo "details : " . $allCustomers[$i]['CustomerName'];
	  				echo '<div class="col-xs-12 col-md-3" height="100%"">
							<div class="well" style="border-bottom: 5px solid #22B8AA; padding-bottom: 40px;">
								<h3>'. $allUsers[$i]['FirstName'] .' ' . $allUsers[$i]['LastName'] . '</h3>
								<p>'. $allUsers[$i]['Country'] .'</p>
								<p>'. $allUsers[$i]['Phone'] .'</p>
								<p>'. $allUsers[$i]['EmailAddress'] .'</p>
								<p><a href="#" data-toggle="modal" data-target="#moreInfo-' . $allUsers[$i]['PKUserID'] .'">More Info</a></p>
								<div class="row">
									<button type="button" data-toggle="modal" data-target="#delete-customer-modal'. $allUsers[$i]['PKUserID'] .'" id="delete-customer" class="btn btn-raised btn-danger pull-right">Delete</button>
									<button type="button" data-toggle="modal" data-target="#add-customer-modal" id="edit-customer-'. $allUsers[$i]['PKUserID'] .'" class="btn btn-raised btn-success pull-right edit-pop">Edit</button>
								</div>
							</div>
						</div>';
					echo '<div class="modal fade" id="delete-customer-modal'.$allUsers[$i]['PKUserID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <form method="POST" action="deleteCustomer">
				                  <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title" id="myModalLabel">Delete Customer - '. $allUsers[$i]['UserName'].'?</h4>
				                  </div>
				                  <div class="modal-body">
				                    <p>Are you sure you want to delete this Customer?</p>';
				    echo '<input type="hidden" name="PKUserID" value="'. $allUsers[$i]['PKUserID'].'">';

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
		            echo '<div class="modal fade" id="moreInfo-'.$allUsers[$i]['PKUserID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <div class="modal-header">
				                  	Customer Information
				                  </div>
				                  <div class="modal-body">
				                  	<div class="col-md-12">
				                  		<div class="col-md-6">First Name
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['FirstName'] . '
				                  		</div>
				                  		<div class="col-md-6">First Name
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['LastName'] . '
				                  		</div>
				                  		<div class="col-md-6">Email Address
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['EmailAddress'] . '
				                  		</div>
				                  		<div class="col-md-6">Phone Number
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['Phone'] . '
				                  		</div>
				                  		<div class="col-md-6">City
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['City'] . '
				                  		</div>
				                  		<div class="col-md-6">State
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['State'] . '
				                  		</div>
				                  		<div class="col-md-6">Country
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['Country'] . '
				                  		</div>
				                  		<div class="col-md-6">Postal Code
				                  		</div>
				                  		<div class="col-md-6">' . $allUsers[$i]['PostalCode'] . '
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
        <div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              	<form method="POST" action="submitUserInfo" id="user-info-form">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myUserLabel" >Add a User</h4>
	              </div>
	              <div class="modal-body">
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">First Name</label>
				                  <input id="FirstName" type="text" name="FirstName" class="form-control" value="">
				                  <span class="help-block">Enter First Name</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Last Name</label>
				                  <input id="LastName" type="text" name="LastName" class="form-control" value="">
				                  <span class="help-block">Enter Last Name</span>
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
				                  <input id="Phone" type="text" name="Phone" class="form-control" value="">
				                  <span class="help-block">Enter Phone Number</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
<!-- 				                  <label class="control-label">Role Name</label>
				                  <input id="RoleName" type="text" name="RoleName" class="form-control" value="">
				                  <span class="help-block">Enter Role Name</span> -->
				                  <?php
				                  	echo '<select class="form-control" id="FKRoleID" name="FKRoleID">';
				                  	echo '<option value="-1">Select a Role</option>';
				                  	for ($i=0; $i<count($allRoles); $i++) { 
				                  		echo '<option value="' . $allRoles[$i]['PKRoleID'].'">' . $allRoles[$i]['RoleName'] . '</option>';
				                  	}
				                  	
				                  	echo '</select>';
				                  ?>
				                  
				                  	
				                  
				                </div>
		                	</div>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Address</label>
				                  <input id="Address" type="text" name="Address" class="form-control" value="">
				                  <span class="help-block">Enter Address</span>
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
				                  <input id="PostalCode" type="text" name="PostalCode" class="form-control" value="">
				                  <span class="help-block">Enter Postal Code</span>
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
				                  <span class="help-block">Enter Password</span>
				                </div>
				            </div>
		            	</div>
		          </div>
		          <input id="PKUserID" type="hidden" name="PKUserID" value="">
	              <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">save</button>
	              </div>
              	</form>
            </div>
          </div>
        </div>