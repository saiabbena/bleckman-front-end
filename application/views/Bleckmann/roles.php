<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #E25176; padding-bottom: 40px;">
			<h4>Manage Roles</h4>
				<button type="button" data-toggle="modal" data-target="#add-role-modal" id='add-role' class='btn btn-raised btn-warning pull-right'>Add Role</button>
	              		<?php
	              			for ($i=0; $i<count($allRoles); $i++) {
			              		echo '
					                <div class="row">
					                	<div class="col-md-12">
							              	<div class="form-group label-floating">
							                  <label class="control-label">Role Name</label>
							                  <input id="RoleName" type="text" name="RoleName" class="form-control" value="'. $allRoles[$i]['RoleName'] .'">
							                  <input type="hidden" id="PKRoleID" name="PKRoleID" value="'.$allRoles[$i]['PKRoleID'].'">
							                  <span class="help-block">Enter Role Name</span>
							                </div>
							            </div>
					          		</div>';
				          	}
		          		?>
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
	              <form method="POST" action="addRole">
	              <div class="modal-body">
		                <div class="row">
		                	<div class="col-md-12">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Role Name</label>
				                  <input id="RoleName" type="text" name="RoleName" class="form-control" value="">
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