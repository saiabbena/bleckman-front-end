<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
	    	<h3>Operation Modes - <?php echo $customerName; ?></h3>

				<div class="row">
					<div class="col-md-12">
					<?php
			          if(isset($_SESSION['message']['settings_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['settings_panel'].'</div>';
			          }
			        ?>
			        </div>
			    </div>
			    <form method="POST" action="saveOpModes">
				    <div class="row">
				    	<div class="col-md-12">
				    		<button type="submit" id='save-opmodes' class='btn btn-raised btn-success pull-right'>Save</button>
				    	</div>
				    </div>
				    <div class="row">
					    <div class="col-md-offset-2 col-md-8">

							<table style="width: 100%" class='table'>
								<thead>
									<tr>
										<th>Name</th>
										<th style="text-align:center;">Assigned to Customer?</th>
									</tr>
								</thead>
									<input type="hidden" name="Customerid" value="<?php echo $customerId; ?>">
								<tbody>
							    	<?php
							    		for ($i=0; $i<count($allOpModes); $i++) {
							    			$notselected = true;
						              		echo '
						              			<tr>
						              				<input type="hidden" name="Operations[' . $i .'][FKOperationId]" value="'.$allOpModes[$i]['PKOperationId'].'">';
											echo '<td style="vertical-align:middle;">
														' . $allOpModes[$i]['OperationName']. '
											        </td>
											        <td style="text-align:center;vertical-align:middle;">
											            <input type="hidden" name="Operations[' . $i .'][IsAssigned]" value="0">';
							    			for ($j=0; $j<count($customerOpModes); $j++) {
							    				if ( $customerOpModes[$j]['FKOperationId'] == $allOpModes[$i]['PKOperationId'] ) {
							    					echo '<input type="hidden" id="PKMMId" name="Operations[' . $i .'][PKMMId]" value="'.$customerOpModes[$j]['PKMMId'].'">';
													echo '<div class="form-group">
														      	<div class="togglebutton">
																  <label>';
													echo '<input type="checkbox" name="Operations[' . $i .'][IsAssigned]" checked="checked" value="1">';
													echo '</label>
																</div>
															</div>';
													$notselected = false;
							    				}
							    			}
							    			if ( $notselected ) {
												echo '<div class="form-group">
														<div class="togglebutton">
															<label>';
												echo '<input type="checkbox" class="AssignedtoCustomer" id="assigned-"' .$i. ' name="Operations[' . $i .'][IsAssigned]" value="1">';
												echo '</label>
													</div>
													</div>';
											}

											echo '</td>
								          		</tr>';
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