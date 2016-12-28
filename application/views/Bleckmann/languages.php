<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="well body_btm_bdr">
			<h3>Manage Languages</h3>
				<?php
		          if(isset($_SESSION['message']['languages_panel'])){
		            echo'
		            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
		              '.$_SESSION['message']['languages_panel'].'
		            </div>';
		          }
	        	?>
	        	    <?php echo'
    					<script>
	        				allLanguages = '. json_encode($allLanguages) .'
	        			</script>';
	        	?>
	        	<?php echo '<script> customerId="' . $customerId.'";</script>';?>

				<form method="POST" action="submitLanguages">
					<div style="border: 1px solid #ddd; padding: 20px;">
					<div class="row">
						<button type="button" data-toggle="modal" data-target="#add-language-modal" id='add-language' class='btn btn-raised btn-warning pull-right'>Add</button>
						<button type="submit" id='save-languages' class='btn btn-raised btn-success pull-right'>Save</button>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<h4>Manage langauges for a specific customer ?</h4>
							</div>
							<div class="col-md-6">
												<div class="form-group" style="text-align: left;vertical-align: middle;padding-bottom: 12px;margin:9px 0 0 0;" >
											      	<div class="togglebutton">
													  <label>
													    <input type="checkbox" id="showcustomerSelect" value="0">
													  </label>
													</div>
												</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-8">
								<?php
									//echo "allCustomers : " . json_encode($allCustomers);
									echo '<div class="form-group" id="select-customer-div" style="display:none;"><label>Select a Customer</label><select id="select-customer" name="Customerid" class="form-control">';
									echo '<option value="-1">Select a Customer</option>';
									for($i=0;$i<count($allCustomers);$i++) {
										echo '<option value="'. $allCustomers[$i]['PKCustomerID'] . '">' . $allCustomers[$i]['CustomerName'] . '</option>';
										}
									echo '</select></div>';
								?>
						</div>
					</div>
					
					<div class="row">
							<table style="width: 100%" class='table'>
								<thead>
									<tr>
										<th style="text-align:center;">Is Active?</th>
										<th>Language Name</th>
										<th class="customer-assign" style="display: none;">Assigned to Customer?</th>
									</tr>
								</thead>
								<tbody>
	              		<?php
	              			//echo "all languages : " . json_encode($allLanguages);

	              			//echo "all customer languages : " . json_encode($customerLanguages);
	              			for ($i=0; $i<count($allLanguages); $i++) {
			              		echo '
			              			<input type="hidden" name="Languages[' . $i .'][IsModified]" value="1">
			              			<tr>
						                	<td style="text-align:center;vertical-align:middle;">
						                		<input type="hidden" name="Languages[' . $i .'][IsActive]" value="0">
								            		<div class="form-group">
											      	<div class="checkbox">
													  <label>
														<input type="checkbox" id="languageActive' . $i . '" name="Languages[' . $i .'][IsActive]" value="1"' 
														. ((int)($allLanguages[$i]['IsActive'] > 0 ) ? " checked='checked'" : "") . '>
													  </label>
													</div>
												</div>
									        </td>
									        <td>
								              	<div class="form-group label-floating">
								                  <label class="control-label"></label>
								                  <input id="RoleName" type="text" name="Languages[' . $i .'][LanguageName]" class="form-control" value="'. $allLanguages[$i]['LanguageName'] .'">
								                  <input type="hidden" id="PKRoleID" name="Languages[' . $i .'][PKLanguageID]" value="'.$allLanguages[$i]['PKLanguageID'].'">
								                  <span class="help-block">Edit Role Name</span>
								                </div>
								            </td>
								            <td class="customer-assign" style="display: none;">
								            	<input type="hidden" name="Languages[' . $i .'][AssignedtoCustomer]" value="0">
								            	<div class="form-group">
											      	<div class="togglebutton">
													  <label>
													    <input type="checkbox" class="AssignedtoCustomer" id="AssignedtoCustomer-'. $i .'" name="Languages[' . $i .'][AssignedtoCustomer]" value="1">
													  </label>
													</div>
												</div>
								            </td>
					          		</tr>';
				          	}
		          		?>
		          			</tbody>
			          		</table>
			          	
		          	</div>
		          	</div>
		        </form>
		</div>
		
		
		<!--THIS IS THE MANAGE KEYWORDS SECTION-->
		
		<!--<br><br>		
		<div class="well body_btm_bdr">
			<h3>Manage keywords</h3>
			<br>
			<table class='table'>
				<thead>
					<tr>
						
						<th>
						<div class="form-group">
				      <h4>	&nbsp;	&nbsp;Choose Language
				
				      <div class="col-md-10">
				        <select id="select111" class="form-control">
				          <?php/**/
				          foreach ($allLanguages as $lang) {
				          	echo '<option>'.$lang['LanguageName'].'</option>';
				          }
				          ?>
				        </select>
				      </div>
				      </h4>
				    </div>
		      	</th>
					
						<th></th>
					</tr>
					<tr>
						<th><h4>Keyword</h4></th>
						<th><h4>Translation</h4></th>
					</tr>	
				</thead>
				<tbody>
					<?php
					/*
					foreach ($keywords as $keyword) {
						echo'
						<tr>
							<td>
								<b>'.$keyword['Keyword'].'</b>
							</td>
							<td>
								<div class="form-group label-floating">
                  <label class="control-label"></label>
                  <input type="text" class="form-control" value="'.$keyword['Keyword'].'">
                  <span class="help-block">Change keyword</span>
                </div>
							</td>
						</tr>
						';
						
					}*/
					?>
				</tbody>
			</table>
		</div>-->
		
		
	</div>
</div>
        <!-- Add Languages Modal -->
        <div class="modal fade" id="add-language-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myUserLabel">Add a Language</h4>
	              </div>
	              <form method="POST" action="addLanguage" id="add-language-form">
		              <div class="modal-body">
			                <div class="row">
			                	<div class="col-md-12">
					              	<div class="form-group label-floating required">
					                  <label class="control-label">Language Name</label>
					                  <input id="LanguageName" type="text" name="LanguageName" class="form-control" value="">
					                  <span class="help-block">Enter Language Name</span>
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
    
		