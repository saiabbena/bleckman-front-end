<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
	    	<h3>Final Warehouse Settings</h3>

				<div class="row">
					<div class="col-md-12">
					<?php
			          if(isset($_SESSION['message']['final_warehouse_settings_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['final_warehouse_settings_panel'].'</div>';
			          }
			        ?>
			        </div>
			    </div>
				<div class="row align-text-bottom">						
					<div class=" col-md-4">
					<form method="POST" id="save-op-modes" action="saveFinalWarehouse">
						<input type="hidden" name="Customerid" value="<?php echo $customerId; ?>">						
						<?php					
							//print_r($allWarehouses);
							echo '<div class="form-group" id="final_warehouse_div"><label><h4>Final Warehouse Location</h4></label><select id="final_warehouse" name="Finalwarehouseid" class="form-control">';
							echo '<option value="-1">Select Warehouse</option>';
							for ($i=0; $i<count($allWarehouses); $i++) {
								$selected = ($Finalwarehouseid == $allWarehouses[$i]['PKWarehouseID'])?'selected':'';
								echo '<option '.$selected.' value="'. $allWarehouses[$i]['PKWarehouseID'] . '">' . $allWarehouses[$i]['Name']. '</option>';
								}
							echo '</select></div>';
					?></div>
					<div class=" col-md-4 align-text-bottom"><button type="submit" id='btn_save_final_warehouse' class='btn btn-raised btn-success' style="margin-top:72px;">Save</button></div></form>
				</div>
				<hr />				
				<h3>Operation Modes - <?php echo $customerName; ?></h3>
				<div class="row">
					<div class="col-md-12">
					<?php
			          if(isset($_SESSION['message']['OM_settings_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['OM_settings_panel'].'</div>';
			          }
			        ?>
			        </div>
			    </div>
			    <form method="POST" id="save-op-modes" action="saveOpModes">
				    <div class="row">
				    	<div class="col-md-12">
				    		<button type="submit" id='save-opmodes' class='btn btn-raised btn-success pull-right'>Save</button>
				    	</div>
				    </div>
					
				    <div class="row">
					    <div class=" col-md-10">
							
							<table style="width: 100%" class='table'>
								<thead>
									<tr>
										<th>Name</th>
										<th style="text-align:center;">Assigned?</th>
										<th  class="wms-param">WMS Parameter</th>
									</tr>
								</thead>
									<input type="hidden" name="Customerid" value="<?php echo $customerId; ?>">
								<tbody>
							    	<?php
							    		// echo json_encode($allOpModes);
							    		// echo '<br>';
							    		// echo json_encode($customerOpModes);
							    		if ( count($allOpModes) > 0 ) {
								    		for ($i=0; $i<count($allOpModes); $i++) {
								    			$selected = false;
								    			$SystemOption='';
							              		echo '
							              			<tr>
							              				<input type="hidden" name="Operations[' . $i .'][FKOperationId]" value="'.$allOpModes[$i]['PKOperationId'].'">';
												echo '<td style="vertical-align:middle;padding-top:19px;font-size:15px;">
															' . $allOpModes[$i]['OperationName']. '
												        </td>
												        <td style="text-align:center;vertical-align:middle;">
												            <input type="hidden" name="Operations[' . $i .'][IsAssigned]" value="0">';
												if ( count($customerOpModes) > 0 ) {
									    			for ($j=0; $j<count($customerOpModes); $j++) {
									    				if ( $customerOpModes[$j]['FKOperationId'] == $allOpModes[$i]['PKOperationId'] ) {
									    					echo '<input type="hidden" id="PKMMId" name="Operations[' . $i .'][PKMMId]" value="'.$customerOpModes[$j]['PKMMId'].'">';
															echo '<div class="form-group">
																      	<div class="togglebutton">
																		  <label>';
															echo '<input type="checkbox" name="Operations[' . $i .'][IsAssigned]" id="assigned-' . $allOpModes[$i]['PKOperationId'] . '" class="custOpMode" checked="checked" value="1">';
															echo '</label>
																		</div>
																	</div>';
															$selected = true;
															$SystemOption = $customerOpModes[$j]['SystemOption'];
									    				}
									    			}
									    		}
								    			if ( !$selected ) {
													echo '<div class="form-group">
															<div class="togglebutton">
																<label>';
													echo '<input type="checkbox" class="custOpMode" id="assigned-' . $allOpModes[$i]['PKOperationId'] . '" name="Operations[' . $i .'][IsAssigned]" value="1" >';
													echo '</label>
														</div>
														</div>';
												}

												echo '</td>';
												if ( ($allOpModes[$i]['PKOperationId'] == 1) || ($allOpModes[$i]['PKOperationId'] ==3) ) {
													// if ( $selected ) {
														echo '<td id="sysOptionTD-' . $allOpModes[$i]['PKOperationId'] . '">
																<div class="form-group required" style="margin:20px 0 0 0;">
																	<label>WMS Parameter</label>
																	<select class="form-control" id="sysOption-' . $allOpModes[$i]['PKOperationId'] . '" name="Operations[' . $i .'][SystemOption]" >
																		<option value="-1">Select a WMS Parameter</option>';
																	if ( $SystemOption == "RITROV NL" ) {
																		echo '<option value="RITROV NL" selected="selected">RITROV NL</option>';
																	} else {
																		echo '<option value="RITROV NL">RITROV NL</option>';
																	}
																	if ( $SystemOption == "RITROV BE" ) {
																		echo '<option value="RITROV BE" selected="selected">RITROV BE</option>';
																	} else {
																		echo '<option value="RITROV BE">RITROV BE</option>';
																	}
																	if ( $SystemOption == "BTIS" ) {
																		echo '<option value="BTIS" selected="selected">BTIS</option>';
																	} else {
																		echo '<option value="BTIS">BTIS</option>';
																	}
																	'</select>
																</div>
															</td>';
													// } else {
													// 	echo '<td id="sysOptionTD-' .$i. '" name="Operations[' . $i .'][SystemOption]" style="display:none;" class="wms-param">
													// 			<div class="form-group required">
													// 				<label>WMS Parameter</label>
													// 				<select id="sysOption-' . $allOpModes[$i]['PKOperationId'] . '" class="form-control">
													// 					<option value="-1">Select a WMS Parameter</option>
													// 					<option value="RITROV NL">RITROV NL</option>
													// 					<option value="RITROV BE">RITROV BE</option>
													// 					<option value="BTIS">BTIS</option>
													// 				</select>
													// 			</div>
													// 		</td>';
													// }
												}
									          	echo '</tr>';
								    		}
								    	}
							    	?>
						    	</tbody>
						    </table>
					    </div>
				    </div>
			    </form>
		</div>
	</div>
</div>