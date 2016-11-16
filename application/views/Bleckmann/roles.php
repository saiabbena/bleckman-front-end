<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #E25176; padding-bottom: 40px;">
			<h4>Manage Roles</h4>
				<?php
		          if(isset($_SESSION['message']['roles_panel'])){
		            echo'
		            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
		              '.$_SESSION['message']['roles_panel'].'
		            </div>';
		          }
	        	?>
				<form method="POST" action="submitRoles">
					<div class="row">
						<button type="button" data-toggle="modal" data-target="#add-role-modal" id='add-role' class='btn btn-raised btn-warning pull-right'>Add Role</button>
						<button type="submit" id='save-roles' class='btn btn-raised btn-success pull-right'>Save</button>
					</div>
					<div class="row">
						<h4>Edit Role Names</h4>
					<div style="border: 1px solid #ddd; padding: 20px;">
						<table style="width: 100%">
							<thead>
								<tr>
									<th style="text-align:center;">Is Active?</th>
									<th>Role Name</th>
								</tr>
							</thead>

	              		<?php
	              			for ($i=0; $i<count($allRoles); $i++) {
			              		echo '
			              			<tr>

						                <div class="row">
						                	<td style="text-align:center;vertical-align:middle;">
						                	<div class="">
							                	<div class="form-group">
		              								<div class="">
		                								<label class="class="control-label"">
										                </label>
										                <input type="hidden" name="Roles[' . $i .'][IsActive]" value="0">
										                <input type="checkbox" name="Roles[' . $i .'][IsActive]" value="1" '.
										                ((int)($allRoles[$i]['IsActive'] > 0 ) ? " checked='checked'" : "")
										                .' >
										              </div>
										        </div>
									        </div>
									        </td>
									        <td>
						                	<div class="col-md-10">
								              	<div class="form-group label-floating">
								                  <label class="control-label"></label>
								                  <input id="RoleName" type="text" name="Roles[' . $i .'][RoleName]" class="form-control" value="'. $allRoles[$i]['RoleName'] .'">
								                  <input type="hidden" id="PKRoleID" name="Roles[' . $i .'][PKRoleID]" value="'.$allRoles[$i]['PKRoleID'].'">
								                  <span class="help-block">Edit Role Name</span>
								                </div>
								            </div>
								            </td>
						          		</div>
					          		</tr>';
				          	}
		          		?>
		          		</table>
		          	</div>
		          	</div>
		        </form>
		</div>
	</div>
</div>
        <!-- Add RolesModal -->
        <div class="modal fade" id="add-role-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myUserLabel" >Add a Role</h4>
	              </div>
	              <form method="POST" action="submitRoles" id="add-role-form">
		              <div class="modal-body">
			                <div class="row">
			                	<input type="hidden" name="Roles[0][IsActive]" value="true">
			                	<input type="hidden" name="Roles[0][PKRoleID]" value="-1">
			                	<div class="col-md-12">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Role Name</label>
					                  <input id="RoleName" type="text" name="Roles[0][RoleName]" class="form-control" value="">
					                  <span class="help-block">Enter Role Name</span>
					                </div>
					            </div>
			          		</div>
			          </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-success">save</button>
		              </div>
              	</form>
            </div>
          </div>
        </div>