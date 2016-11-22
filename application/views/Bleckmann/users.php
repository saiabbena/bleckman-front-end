<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #E25176; padding-bottom: 40px;">
		<div class='row'>
			<div class="col-xs-12 col-md-12">

				<button type="button" data-toggle="modal" data-target="#add-user-modal" id='add-user' class='add-user-pop btn btn-raised btn-warning pull-right'>Add User</button>
			</div>
		</div>
	<br>

	<div class="row col-xs-12">
		<div>
			<div class="list-group">
	        <?php
	          if(isset($_SESSION['message']['user_panel'])){
	            echo'
	            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
	              '.$_SESSION['message']['user_panel'].'
	            </div>';
	          }
	        ?>

	  		<?php 
	  			for($i=0; $i<count($allUsers); $i++) {
					echo '
						<div class="well" style="background-color:#f2f2f2;border-bottom: 5px solid #22B8AA; padding-bottom: 40px;">
						  <div class="list-group-item">
						    <div class="row-action-primary">
						      <img class="img-circle" style="line-height:104px;height:72px;width:72px;" src="' .base_url(). 'img/user.png">
						    </div>
						    <div class="row-content">
						      <div class="least-content hide-xs">
						      		<p>'. $allUsers[$i]['RoleName'] . '</p>
										<a data-toggle="modal" style="color:#f44336;cursor:pointer;" data-target="#delete-user-modal'. $allUsers[$i]['PKUserID'] .'" id="delete-user" class=" pull-right"><i class="material-icons">delete</i></a>
										<a type="button" style="padding-right:12px;color:#4caf50;cursor:pointer;" data-toggle="modal" data-target="#add-user-modal" id="edit-user-'. $allUsers[$i]['PKUserID'] .'" class="pull-right edit-user-pop"><i class="material-icons">mode_edit</i></a>
						      </div>
						      <h3 class="list-group-item-heading"><b>'. $allUsers[$i]['FirstName'] .' ' . $allUsers[$i]['LastName'] .'</b></h3>
						      <p class="list-group-item-text" style="padding-bottom:8px;"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">phone</i>'. $allUsers[$i]['Phone'] . '</p>
						      <p class="list-group-item-text" style="padding-bottom:8px;"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">email</i>'. $allUsers[$i]['EmailAddress'] .'</p>
						      <p class="list-group-item-text"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">location_on</i>'. $allUsers[$i]['City'] . ', ' . $allUsers[$i]['State'] . ', ' . $allUsers[$i]['Country'] . ', ' . $allUsers[$i]['PostalCode'] .'</p>
						    </div>
						  </div>
						</div>';
					//delete user modal
					echo '<div class="modal fade" id="delete-user-modal'.$allUsers[$i]['PKUserID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <form method="POST" action="deleteUser">
				                  <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title" id="myModalLabel">Delete User - '. $allUsers[$i]['FirstName'].'?</h4>
				                  </div>
				                  <div class="modal-body">
				                    <p>Are you sure you want to delete this User?</p>';
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
				}
			?>
			</div>
		</div>
	</div>
	
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