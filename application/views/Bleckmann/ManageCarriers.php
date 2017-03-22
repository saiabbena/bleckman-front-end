
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
				    		<div class="col-md-2">
								<?php
									echo '<div class="form-group" id="select-carrier-div"><label>Select a Carrier</label><select id="FKCarrierId" name="FKCarrierId" class="form-control">';
									echo '<option value="-1"></option>';
									for($i=0;$i<count($carriers);$i++) {
										if ($carriers[$i]['Isactive']) {
											echo '<option value="'. $carriers[$i]['PKCarrierID'] . '">' . $carriers[$i]['CarrierName'] . '</option>';
										}
									}
									echo '</select></div>';
								?>
							</div>
							<div class="col-md-3">
								<div id="carrierCountry">
									<?php
										echo '<div class="form-group" id="select-carrier-div">
										
										<label>Select a Country</label><select   class="form-control">';
										echo '<option value="-1"></option>';
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
									echo '<option value="-1"></option>';
									for($i=0;$i<count($allWarehouses);$i++) {
										echo '<option value="'. $allWarehouses[$i]['WarehouseID'] . '">' . $allWarehouses[$i]['Name'] . '</option>';
									}
									echo '</select></div>';
								?>
							</div>
							<div class="col-md-3">
								<div class="form-group" style="text-align: center;">
										<label>Preffered Carrier?
										</label>
									<div class="checkbox" >
										<label>
											<input type="checkbox" name="PreferredCarrier">
										</label>
										
									</div>
								</div>
							</div>
							<div class="col-md-1" style="margin-left:-30px;margin-top: 38px;">
								<button type="submit" id='setSettings' class='btn btn-raised btn-warning'>Add</button>
								<br>
							</div>
						</div>
						<div class="col-md-12">

						</div>
					</form>
			    </div>
			    <hr/>
			    <br>
			    <br>
			    <br>
			    <div class="row">
                
                <div class="col-md-12">
						<!--<h4 id="manage_carrier_search" class="pull-right"></h4>-->
					
			    	<div class="col-md-12">
				    	<table class="table table-responsive" id="example">
				    		<thead>
					    		<tr>
					    			<th style="width: 10%;">PreferredCarrier</th>
					    			<th style="width: 10%;">Carrier</th>
					    			<th style="width: 20%;">Country</th>
					    			<th style="width: 20%;">Warehouse</th>
					    			<th style="width: 40%;">Manage Carrier Settings</th>
					    		</tr>
				    		</thead>
				    		<tbody>
					    		<?php
					    			//echo json_encode($allSettings);
					    			if (isset($allSettings)) {
					    			if (count($allSettings) > 0 ) {
									
					    			for($i=0;$i<count($allSettings);$i++) {
					    				echo '<tr>';
					    				echo '<td style="text-align:center;">
		              								<div class="checkbox">
		                								<label style="padding-top:7px;">
		                								<input type="hidden" name="prefCarrier" value="0">
		                								<input type="checkbox" disabled="disabled" name="prefCarrier" value="1" '.
										                ((int)($allSettings[$i]['PreferredCarrier'] > 0 ) ? " checked='checked'" : "")
										                .' >
										                </label>
										              </div>
					    						</td>';
					    				echo '<td><div class="carrier_info"><br>' . $allSettings[$i]['CarrierName'] .'</div></td>';
					    				echo '<td><div class="country_info"><br>' . $allSettings[$i]['CountryName'] .'</div></td>';
					    				echo '<td><div class="location_info"><br>' . $allSettings[$i]['LocationName'] .'</div></td>';
					    				echo '<td >
				    							<button type="button" class=" btn btn-raised btn-success btn-sm" data-toggle="modal" id="#edit-setting-modal-'. $allSettings[$i]['PKCCWId'] .'-'. $allSettings[$i]['FKCarrierId'].'-'. $allSettings[$i]['CountryCode'] .'" data-target="#edit-setting-modal-'. $allSettings[$i]['PKCCWId'] .'-'. $allSettings[$i]['FKCarrierId'] .'-'. $allSettings[$i]['CountryCode']  .'" >Edit</button>
					    						<button type="button" class="manage-carrier-pop btn btn-raised btn-warning btn-sm " data-toggle="modal" data-target="#manage-carrier-modal" id="manage-carrier-' . $allSettings[$i]['PKCCWId']. '-'.$allSettings[$i]['FKCarrierId']. '" >Settings</button>
					    						<button type="button" class="btn btn-raised btn-danger btn-sm" data-toggle="modal" data-target="#remove-setting-modal'. $allSettings[$i]['PKCCWId'] .'" >Remove</button>
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
										echo '<div class="modal fade edit-setting-modal"  id="edit-setting-modal-'. $allSettings[$i]['PKCCWId'] .'-'. $allSettings[$i]['FKCarrierId'].'-'. $allSettings[$i]['CountryCode'] .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									              <div class="modal-dialog" role="document">
									                <div class="modal-content">
									                  <form method="POST" action="setCustomerCarrier">
									                  <div class="modal-header">
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									                    <h4>Edit Settings for '. $customerName .' - '. $allSettings[$i]['CarrierName']. '</h4>
									                  </div>
									                  <div class="modal-body">
														<div class="loading" style="display:none;">
														  <div style="height: 15vh"></div>
														  <center><img src="'. base_url() . 'img/loading-pink.gif" style="height: 10vh">
														  <br>
														  <p style="color: #CC1543;"">&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
														  <div style="height: 15vh"></div>				      
														  </center>
														</div>
									                  <div class="carrier_div">';
										// echo '<div class="form-group" id="select-carrier-div1"><label>Select a Carrier</label><select id="FKCarrierId1" name="FKCarrierId" class="form-control" disabled>';
										// echo '<option value="-1">Select a Carrier</option>';
										// for($j=0;$j<count($carriers);$j++) {
										// 	if ($carriers[$j]['Isactive']) {
										// 		if ( $allSettings[$i]['FKCarrierId'] == $carriers[$j]['PKCarrierID'] ) {
										// 		echo '<option value="'. $carriers[$j]['PKCarrierID'] . '" selected="selected">' . $carriers[$j]['CarrierName'] . '</option>';
										// 	 	} else {
										// 			echo '<option value="'. $carriers[$j]['PKCarrierID'] . '">' . $carriers[$j]['CarrierName'] . '</option>';
										// 	 	}
										// 	}
										// }
										// echo '</select></div>';
										echo '<div class="form-group" id="carrierCountry1"></div>';
										echo '<div class="form-group" id="select-warehouse-div"><label>Select a Warehouse</label><select id="select-warehouse" name="Warehouseid" class="form-control">';
										echo '<option value="-1">Select a Warehouse</option>';
										for($k=0;$k<count($allWarehouses);$k++) {
											if ( $allSettings[$i]['Warehouseid'] == $allWarehouses[$k]['WarehouseID'] ) {
												echo '<option value="'. $allWarehouses[$k]['WarehouseID'] . '" selected="selected">' . $allWarehouses[$k]['Name'] . '</option>';
											} else {
												echo '<option value="'. $allWarehouses[$k]['WarehouseID'] . '">' . $allWarehouses[$k]['Name'] . '</option>';
											}
										}
										echo '</select></div>';
										echo '<div class="col-md-12">
												<div class="form-group" >
													<div class="checkbox" >
														<label>Set as preffered carrier? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<input type="checkbox" name="PreferredCarrier"' . ((int)($allSettings[$i]['PreferredCarrier'] > 0 ) ? " checked='checked'" : "") .'>
														</label>
													</div>
												</div>
											</div>';
									    echo '<input type="hidden" name="PKCCWId" value="'. $allSettings[$i]['PKCCWId'].'">';
			    						echo '<input type="hidden" name="FkCustomerid" id="FkCustomerid" value="'. $customerId . '">
			    							<input type="hidden" name="FKCarrierId" id="FKCarrierId1" value="'.$allSettings[$i]['FKCarrierId'].'">
								    		<input type="hidden" name="CountryCode" id="CountryCode1" value="'.$allSettings[$i]['CountryCode'].'">
								    		<input type="hidden" name="FKCountryID" id="FKCountryID1" value="'.$allSettings[$i]['FKCountryID'].'">
								    		';
							            echo '
							                  </div></div>
							                  <div class="modal-footer">
							                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							                    <button type="submit" class="btn btn-danger">Save</button>
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
      
<script language="javascript" type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
		 "autoWidth": false,
		"oLanguage": { "sSearch": "" } 
		

    
    } );
	 $('div.dataTables_filter input').attr('placeholder', 'Search...');
	 $('div.dataTables_filter input').addClass( "search_input" );
	
	
} );
</script>
<style type="text/css">
.dataTables_filter
{
text-align:left;
xwidth:955px;
}

</style>