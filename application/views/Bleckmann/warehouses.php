<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #E25176;padding-bottom: 40px;">
			<h4>Manage Warehouses</h4>
				<?php
		          if(isset($_SESSION['message']['warehouse_panel'])){
		            echo'
		            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
		              '.$_SESSION['message']['warehouse_panel'].'
		            </div>';
		          }
	        	?>
	        	<div style="padding: 15px;">
					<form method="POST" action="submitWarehouses">
						<div class="row">
							<button type="button" data-toggle="modal" data-target="#add-Warehouse-modal" id='add-Warehouse' class='btn btn-raised btn-warning pull-right add_wh_pop'>Add New</button>							
						</div>
						<div class="row">							
							<table  id="wh_data" class="table table-striped table-bordered" cellspacing="0">
								<thead>
									<tr>
									  <th class="col-md-2 nosort">Name</th>
									  <th class="col-md-1">ID</th>
									  <th class="col-md-2">Contacts</th>
									  <th class="col-md-2">Address</th>
									  <th>City</th>									  									  
									  <th>Country</th>
									  <th class="nosort col-md-2 text-right">Action</th>
									</tr>
								</thead>
							    <tbody>
		              		<?php
		              			//echo json_encode($allWarehouses);
								//echo count($allWarehouses);								
								//print_r($allWarehouses);
								//print_r($allCountries);								
								
		              			for ($i=0; $i<count($allWarehouses); $i++) {
									$CountryName = '';
									foreach($allCountries as $value){
										//echo($value['PKCountryId']).'<br />';
										if($value['PKCountryId'] == $allWarehouses[$i]['Country']){
											$CountryName = $value['CountryName'];
										}
									}
									
									echo '<tr>
									  <td class="nosort">'.$allWarehouses[$i]['Name'].'</td>
									  <td>'.$allWarehouses[$i]['WarehouseID'].'</td>
									  <td>Phone : '.$allWarehouses[$i]['Phone'].'<br />Email :'.$allWarehouses[$i]['Email'].'</td>
									  <td> Street1 :'.$allWarehouses[$i]['Street'].'<br />Street2 :'.$allWarehouses[$i]['Street2'].'<br />House Number :'.$allWarehouses[$i]['HouseNumber'].'<br />Postal Code : '.$allWarehouses[$i]['PostalCode'].'</td>
									  <td>'.$allWarehouses[$i]['City'].'</td>									  									  
									  <td>'.$CountryName.'</td>
									  <td class="nosort  text-center">									  
									  <a data-toggle="modal" style="color:#f44336;cursor:pointer;" data-target="#delete-warehouse-modal'.$allWarehouses[$i]['PKWarehouseID'].'" id="delete-wh" class=" pull-right"><i class="material-icons">delete</i></a>
										
										
										<a type="button" class="pull-right edit_wh_pop" style="padding-right:12px;color:#4caf50;cursor:pointer;" data-toggle="modal" data-target="#add-Warehouse-modal" id="edit_wh_'.$allWarehouses[$i]['PKWarehouseID'].'">
										<i class="material-icons">mode_edit</i></a>
									  </td>
									</tr>';
									//delete warehouse modal
									echo '<div class="modal fade" id="delete-warehouse-modal'.$allWarehouses[$i]['PKWarehouseID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								              <div class="modal-dialog" role="document">
								                <div class="modal-content">
								                  <form method="POST" action="deleteWarehouse">
								                  <div class="modal-header">
								                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								                    <h4 class="modal-title" id="myModalLabel">Delete Warehouse - '. $allWarehouses[$i]['Name'].'?</h4>
								                  </div>
								                  <div class="modal-body">
								                    <p>Are you sure you want to delete this Warehouse?</p>';
								    echo '<input type="hidden" name="PKWarehouseID" value="'. $allWarehouses[$i]['PKWarehouseID'].'">';
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
								</tbody>
							</table>
			          	</div>
			        </form>
		        </div>
	    </div>
	</div>
</div>

        <!-- Add Warehouses Modal -->
        <div class="modal fade" id="add-Warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myWarehouseLabel" >Add a Warehouse</h4>
	              </div>
	              <form method="POST" action="submitWarehouses" id="add-warehouse-form">
				  <input type="hidden" name="Warehouses[0][PKWarehouseID]" class="form-control" id="hdn_warehouseid" value="">
		              <div class="modal-body">
			            <div class='loading' style="display:none;">
						  <div style='height: 15vh'></div>
						  <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
						  <br>
						  <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
						  <div style='height: 15vh'></div>				      
						  </center>
						</div>    
						<div id="warehouse_modal">	
							<div class="row">
			                	<div class="col-md-6">
					              	<div class="form-group label-floating required">
					                  <label class="control-label">Name</label>
					                  <input id="Name" type="text" name="Warehouses[0][Name]" class="form-control" value="">
					                  <span class="help-block">Enter Warehouse Name</span>
					                </div>
					            </div>
								<div class="col-md-6">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Warehouse ID</label>
					                  <input id="WarehouseID" type="text" name="Warehouses[0][WarehouseID]" class="form-control" value="">
					                  <span class="help-block">Enter Warehouse ID</span>
					                </div>
					            </div>
			          		</div>
							<div class="row">
			                	<div class="col-md-6">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Phone</label>
					                  <input id="Phone" type="text" name="Warehouses[0][Phone]" class="form-control" value="">
					                  <span class="help-block">Enter Phone Number</span>
					                </div>
					            </div>
								<div class="col-md-6">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Email</label>
					                  <input id="Email" type="text" name="Warehouses[0][Email]" class="form-control" value="">
					                  <span class="help-block">Enter Email</span>
					                </div>
					            </div>
			          		</div>
							<div class="row">
				            	<div class="col-md-6">
					              	<div class="form-group label-floating">
									    <label class="control-label">Street1</label>
							            <input type="text" id="Street" name="Warehouses[0][Street]" class="form-control" value="">
				   	                    <span class="help-block">Enter Street1</span>
									</div>
					            </div>
				            	<div class="col-md-6">
					              	<div class="form-group label-floating">
									    <label class="control-label">Street2</label>
							            <input type="text" id="Street2" name="Warehouses[0][Street2]" class="form-control" value="">
				   	                    <span class="help-block">Enter Street2</span>
									</div>
					            </div>
			          		</div>
			          		<div class="row">
							    <div class="col-md-6">
								   	<div class="form-group label-floating required">
									    <label class="control-label">House Number</label>
									    <input type="text" name="Warehouses[0][HouseNumber]" class="form-control" id="HouseNumber" value="">
									    <span class="help-block">Enter House Number</span>
									</div>
								</div>
			                	<div class="col-md-6">
									<div class="form-group label-floating required">
									    <label class="control-label">PostalCode</label>
									    <input type="text" name="Warehouses[0][PostalCode]" class="form-control" id="PostalCode" value="">
									    <span class="help-block">Enter PostalCode</span>
									</div>
								</div>
			          		</div>
							<div class="row">
							    <div class="col-md-6">
									<div class="form-group label-floating">
									    <label class="control-label">City</label>
							            <input type="text" name="Warehouses[0][City]" class="form-control"  id="City" value="">
				  	                    <span class="help-block">Enter City</span>
						            </div>
					            </div>
							    <div class="col-md-6">
					              	<div class="form-group label-floating required">
					              		<label class="control-label">Country</label>
					                  <?php
					                  	//echo json_encode($allCountries);
					                  	echo '<select class="form-control" id="Country" name="Warehouses[0][Country]">';
					                  	echo '<option value="-1">Select a Country &darr;</option>';
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