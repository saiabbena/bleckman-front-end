<div class='col-xs-12 col-md-9' height='100%'>
<?php echo'
<script>
	allUsers = '. json_encode($allUsers) .'
</script>';
?>
<?php echo '<script> customerId="' . $customerId.'";</script>';?>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #7C6062; padding-bottom: 40px;">
		<form method="POST" action="assignUsers">
			<div class='row'>
				<div class="col-xs-12 col-md-12">
					<button type="button" data-toggle="modal" data-target="#add-user-modal" id='add-user' class='add-user-pop btn btn-raised btn-warning pull-right'>Add User</button>
					<button type="submit" id='save-users' class='btn btn-raised btn-success pull-right'>Save</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<h4>Manage Users for a specific customer ?</h4>
				</div>
				<div class="col-md-4">
					<div class="form-group" style="text-align: left;vertical-align: middle;padding-bottom: 12px;margin:9px 0 0 0;" >
						<div class="togglebutton">
							<label>
								<input type="checkbox" id="showcustomerSelect-Users" value="0">
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h4 id="user_header" class="pull-left"></h4>
				</div>
			
				<div class="col-md-offset-1 col-md-8">
					<?php
						//echo "allCustomers : " . json_encode($allCustomers);
						echo '<div class="form-group" id="select-customer-div-users" style="display:none;"><label>Select a Customer</label><select id="select-customer-user" name="Fkcustomerid" class="form-control">';
						echo '<option value="-1">Select a Customer</option>';
						for($i=0;$i<count($allCustomers);$i++) {
							echo '<option value="'. $allCustomers[$i]['Customerid'] . '">' . $allCustomers[$i]['CustomerName'] . '</option>';
						}
						echo '</select></div>';
					?>
				</div>
			</div>
	        	    <?php echo'
    					<script>
	        				allCountries = '. json_encode($allCountries) .'
	        			</script>';
	        	?>
			<div class="row col-xs-12">
				<div id="users_list">
					<div class="list-group">
			        <?php
			          if(isset($_SESSION['message']['user_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['user_panel'].'
			            </div>';
			          }
			        ?>
			        <table class="table" ><!-- id="user_datatable"-->
			        	<thead>
			        		<tr>
			        			<th class="customer-assign col-md-4">Assigned to Customer?</th>
			        			<th class="col-md-8">User Details</th>
			        		</tr>
			        	</thead>
			        	<tbody id="CustomerUsers">
			        		<!-- Loaded from formatUsersData function-->
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
        <!-- Add User Modal -->
        <div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              	<form method="POST" action="submitUserInfo" id="user-info-form">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myUserLabel" ></h4>
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
					<div class="user_div">
		                <div class="row">
					<?php
						//echo "allCustomers : " . json_encode($allCustomers);						
						echo '<div class="form-group col-md-12 required" id="Fkcustomerid-div"><label class="control-label">Select a Customer</label><select id="Fkcustomerid" name="Fkcustomerid" required class="form-control">';
						echo '<option value="-1">Select a Customer</option>';
						
						for($i=0;$i<count($allCustomers);$i++) {							
							echo '<option  value="'. $allCustomers[$i]['Customerid'] . '">' . $allCustomers[$i]['CustomerName'] . '</option>';
						}
						echo '</select></div>';
					?>
		                </div>
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label class="control-label">First Name</label>
				                  <input id="FirstName" type="text" name="FirstName" class="form-control" value="">
				                  <span class="help-block">Enter First Name</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label class="control-label">Last Name</label>
				                  <input id="LastName" type="text" name="LastName" class="form-control" value="">
				                  <span class="help-block">Enter Last Name</span>
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
				                  <input id="Phone" type="text" name="Phone" class="form-control" value="">
				                  <span class="help-block">Enter Phone Number</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating required">
				              		<label class="control-label">Role Name</label>
				                  <?php
				                  	echo '<select class="form-control" id="FKRoleID" name="FKRoleID">';
				                  	echo '<option value="-1">Select a Role &darr;</option>';
				                  	for ($i=0; $i<count($allRoles); $i++) { 
				                  		if ( $allRoles[$i]['IsActive'] ) {
				                  			echo '<option value="' . $allRoles[$i]['PKRoleID'].'">' . $allRoles[$i]['RoleName'] . '</option>';
				                  		}
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
			                <div class="col-md-6">
				              	<div class="form-group label-floating">
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
					            <div class="form-group label-floating">
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

 		               	<div class="row login-info">
		               		<h4>Login Details</h4>
		                	<div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label for="i5" class="control-label">Username</label>
				                  <input id="Username" type="text" name="Username" class="form-control" value="">
				                  <span class="help-block">Enter Username</span>
				                </div>
				            </div>
				            <div class="col-md-6">
				              	<div class="form-group label-floating required">
				                  <label for="i5" class="control-label">Password</label>
				                  <input id="Password" type="password" name="Password" class="form-control" value="">
				                  <span class="help-block">Enter Password(e.g. Abcde5#)</span>
				                </div>
				            </div>
		            	</div>
 		               	<div class="row edit-login-info">
 		               		<div class="col-md-12">
			               		<h4>Login Details</h4>
			                	<div class="col-md-6">
					              	<div class="form-group">
					                  <label for="i5" class="control-label">Username</label>
					                  <input id="Username" disabled type="text" name="Username" class="form-control" value="">
					                  <span class="help-block">Enter Username</span>
					                </div>
					            </div>
					            <div class="col-md-6">
					              	<div class="" style="margin-top: 42px;text-align: center;">
					              		<a class="btn btn-default btn-raised btn-warning" href="#" id="changePwd">Change Password</a>
					                </div>
					            </div>
				            </div>
		            	</div>
 		               	<div class="row change-password">
 		               		<div class="col-md-12">
			               		<h4>Change Password</h4>
			               		<input type="hidden" name="IsPasswordChanged" id="IsPasswordChanged" value="false">
			               		
			                	<div class="col-md-6">
					              	<div class="form-group label-floating required">
					                  <label for="i5" class="control-label">New Password</label>
					                  <input id="newPassword" type="password" name="newPassword" class="form-control showpassword" value="">
					                  <span class="help-block">Enter Password(e.g. Abcde5#)</span>
					                </div>
					            </div>
					            <div class="col-md-5">
					              	<div class="form-group label-floating required">
					                  <label for="i5" class="control-label">Confirm Password</label>
					                  <input id="confirmPassword" type="password" name="confirmPassword" class="form-control showpassword" value="">
					                  <span class="help-block">Enter Password(e.g. Abcde5#)</span>
					                </div>
					            </div>
								<div class="col-md-1"><a href="javascript:void(0)" class="btnshowpw" id="btnshowpw" alt="View Password" title="View Password" ><i style="margin-top: 30px;" class="medium material-icons">visibility</i></a></div>
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
    </div>
</div>
