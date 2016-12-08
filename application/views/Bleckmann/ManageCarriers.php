
<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
	    	<h3>Manage Carriers - <?php echo $customerName; ?></h3>

				<div class="row">
					<div class="col-md-12">
					<?php
			          if(isset($_SESSION['message']['carrier_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['carrier_panel'].'</div>';
			          }
			        ?>
			        </div>
			    </div>

			    <div class="row">

			    	<form method="POST" id="setCustomerCarrierMap" action="setCustomerCarrier">
			    		
			    		<input type="hidden" name="FkCustomerid" id="FkCustomerid" value="<?php echo $customerId; ?>">
			    		<input type="hidden" name="CountryCode" id="CountryCode" value="">
			    		
			    		<input type="hidden" name="FKCountryID" id="FKCountryID" value="">
				    	<div class="col-md-12">
				    		<div class="col-md-3">
								<?php
									echo '<div class="form-group" id="select-carrier-div"><label>Select a Carrier</label><select id="FKCarrierId" name="FKCarrierId" class="form-control">';
									echo '<option value="-1">Select a Carrier</option>';
									for($i=0;$i<count($carriers);$i++) {
										echo '<option value="'. $carriers[$i]['PKCarrierID'] . '">' . $carriers[$i]['CarrierName'] . '</option>';
									}
									echo '</select></div>';
								?>
							</div>
							<div class="col-md-3">
								<div id="carrierCountry">
									<?php
										echo '<div class="form-group" id="select-carrier-div">
										
										<label>Select a Country</label><select   class="form-control">';
										echo '<option value="-1">Select a Country</option>';
										for($i=0;$i<count($allCountries);$i++) {
											echo '<option value="'. $allCountries[$i]['PKCountryId'] . '">' . $allCountries[$i]['CountryName'] . '</option>';
										}
										echo '</select></div>';
									?>
								</div>
							</div>
							<div class="col-md-3" >
								<?php
									echo '<div class="form-group" id="select-warehouse-div"><label>Select a Warehouse</label><select id="select-warehouse" name="Warehouseid" class="form-control">';
									echo '<option value="-1">Select a Warehouse</option>';
									for($i=0;$i<count($allWarehouses);$i++) {
										echo '<option value="'. $allWarehouses[$i]['WarehouseID'] . '">' . $allWarehouses[$i]['Name'] . '</option>';
									}
									echo '</select></div>';
								?>
							</div>
							<div class="col-md-3" style="text-align: center;margin-top: 38px;">
								<button type="submit" id='setSettings' class='btn btn-raised btn-warning'>Add</button>
								<br>
							</div>
						</div>
					</form>
			    </div>
			    <hr/>
			    <br>
			    <br>
			    <br>
			    <div class="row">
			    	<div class="col-md-offset-1 col-md-10">
				    	<table class="table table-responsive">
				    		<thead>
					    		<tr>
					    			<th>Carrier</th>
					    			<th>Country</th>
					    			<th>Warehouse</th>
					    			<th>Manage Carrier Settings</th>
					    		</tr>
				    		</thead>
				    		<tbody>
					    		<?php
					    			//echo json_encode($allSettings);
					    			if (count($allSettings) > 0 ) {
					    			for($i=0;$i<count($allSettings);$i++) {
					    				echo '<tr>';
					    				echo '<td><br>' . $allSettings[$i]['CarrierName'] .'</td>';
					    				echo '<td><br>' . $allSettings[$i]['CountryName'] .'</td>';
					    				echo '<td><br>' . $allSettings[$i]['LocationName'] .'</td>';
					    				echo '<td >
					    						<button type="button" class="manage-carrier-pop btn btn-raised btn-success" data-toggle="modal" data-target="#manage-carrier-modal" id="manage-carrier-' . $allSettings[$i]['PKCCWId']. '-'.$allSettings[$i]['FKCarrierId']. '" >Settings</button>
					    						<button type="button" class="btn btn-raised btn-danger" data-toggle="modal" data-target="#remove-setting-modal'. $allSettings[$i]['PKCCWId'] .'" >Remove</button>
					    					</td>';
					    				echo '</tr>';
										echo '<div class="modal fade" id="remove-setting-modal'. $allSettings[$i]['PKCCWId'] .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									              <div class="modal-dialog" role="document">
									                <div class="modal-content">
									                  <form method="POST" action="deleteCustomerCarrier">
									                  <div class="modal-header">
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									                    <h4 class="modal-title" id="myModalLabel">Delete Setting?</h4>
									                  </div>
									                  <div class="modal-body">
									                  	<h4>'. $customerName .' - '. $allSettings[$i]['CarrierName']. ' - ' . $allSettings[$i]['CountryName'] .'</h4>
									                    <p>Are you sure you want to delete this Setting?</p>';
									    echo '<input type="hidden" name="PKCCWId" value="'. $allSettings[$i]['PKCCWId'].'">';
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
					    		} else {
					    			echo '<div class="row"><h4>Oops! Carrier Settings not available yet.</h4></div>';
					    		}
					    		?>
				    		</tbody>
				    	</table>
			    	</div>
			    </div>
		</div>
	</div>
</div>
 <!-- Add Manage Carrier Modal -->
        <div class="modal fade" id="manage-carrier-modal" tabindex="-1" role="dialog" aria-labelledby="manageCarrierLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="manageCarrier">Manage Carrier Settings</h4>
	              </div>
	              <form method="POST" action="submitCustomerCarrierSettings" id="manage-carrier-form">
		              <div class="modal-body">
							<div class='loading' style="display:none;">
							  <div style='height: 15vh'></div>
							  <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
							  <br>
							  <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
							  <div style='height: 15vh'></div>				      
							  </center>
							</div>
							<div class="carrier-modal">
								
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