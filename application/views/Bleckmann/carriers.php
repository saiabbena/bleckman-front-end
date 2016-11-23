    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
        <h3>Manage Carriers, <?php echo $customer_name;//($carriers['Customer']['CustomerName']);?></h3>		
        <div class='row'>
			<div class="col-xs-12 col-md-12">
				<button type="button" data-toggle="modal" data-target="#add_carrier_modal" id='add_carrier' class='add-pop btn btn-raised btn-warning pull-right'>Add</button>
			</div>
		</div>		
		<div class='row'>
        <?php
          if(isset($_SESSION['message']['carrier_panel'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['carrier_panel'].'
            </div>';
          }
        ?>

	  		<?php				
				$all_carriers_data = $carriers['Carriers'];
				//echo count($all_carriers_data);
				$existing_country_list = array();
				if(count($all_carriers_data)>0){
					for($i=0; $i<count($all_carriers_data); $i++) {
						$existing_country_list[] = $all_carriers_data[$i]['ConsumerCountryName'];						
						echo '<div class="col-xs-12 col-md-3" height="100%"">
								<div class="well" style="border-bottom: 5px solid #22B8AA; padding-bottom: 40px;">
									<h3>'. $all_carriers_data[$i]['CarrierName'] . '</h3>
									<p>User Name: '. $all_carriers_data[$i]['APIUserName'] .'</p>
									<p>Key : '. $all_carriers_data[$i]['APIKey'] .'</p>
									<p>URL: '. $all_carriers_data[$i]['APIURL'] .'</p>
									<p>Country: '. $all_carriers_data[$i]['ConsumerCountryName'] .'</p>
									<p>Label: '. $all_carriers_data[$i]['LabelAPI'] .'</p>
									<p>Announce API: '. $all_carriers_data[$i]['AnnounceAPI'] .'</p>
									<p>TraceURL: '. $all_carriers_data[$i]['TrackTraceURL'] .'</p>
									<p>ApplicationID: '. $all_carriers_data[$i]['ApplicationID'] .'</p>									
									
									<div class="row">
										<button type="button" data-toggle="modal" data-target="#delete_carrier_modal'. $all_carriers_data[$i]['PKCarrierID'] .'" id="delete_carrier" class="btn btn-raised btn-danger pull-right">Delete</button>
										<button type="button" data-toggle="modal" data-target="#add_carrier_modal" id="editcarrrier_'. $all_carriers_data[$i]['PKCarrierID'] .'" class="btn btn-raised btn-success pull-right edit_carrier">Edit</button>
									</div>
								</div>
							</div>';
						echo '<div class="modal fade" id="delete_carrier_modal'.$all_carriers_data[$i]['PKCarrierID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <form method="POST" action="'. base_url().'index.php/Bleckmann/carriers/deleteCarrier">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Delete Carrier - '. $all_carriers_data[$i]['CarrierName'].'?</h4>
									  </div>
									  <div class="modal-body">
										<p>Are you sure you want to delete this Carrier?</p>';
										echo '<input type="hidden" name="PKCarrierID" value="'. $all_carriers_data[$i]['PKCarrierID'].'">';
										echo '<input type="hidden" name="IsActive" value="false">';
										echo '<input type="hidden" name="FKCustomerID" value="'. $all_carriers_data[$i]['FKCustomerID'].'">';
										
										echo'</div>
										  <div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-danger">Delete</button>
										  </div>
										  </form>
										</div>
									  </div>
									</div>';
						
					}
				}else{
					echo '<div class=" col-md-10" height="100%"><h4 style="text-align: center;">No Carrier has been added.</h4></div>';					
				}
			?>
		</div>		
		
        <div class="modal fade" id="add_carrier_modal" tabindex="-1" role="dialog" aria-labelledby="carrierLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
			
              	<form method="POST" action="<?php echo base_url()?>index.php/Bleckmann/carriers/submitCarrierInfo" id="carrier_info_form">
				<input type="hidden" name="FKCustomerID" value="<?php echo $Customerid;?>" />
				<input id="PKCarrierID" type="hidden" name="PKCarrierID" value="">
				<input id="existing_country_list" type="hidden" name="existing_country_list" value="<?php echo implode(',', $existing_country_list);?>">
				
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="carrierLabel" >Add a Carrier</h4>
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
						<div class="carrier_div">
		                <div class="row">
		                	<div class="col-md-10">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Carrier Name</label>
				                  <input id="CarrierName" type="text" name="CarrierName" class="form-control" value="" required />
				                  <span class="help-block">Enter Carrier Name</span>
				                </div>
				            </div>
						 </div>
						 <div class="row">
				            <div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">API User Name</label>
				                  <input id="APIUserName" type="text" name="APIUserName" class="form-control" value="" required />
				                  <span class="help-block">Enter API User Name</span>
				                </div>
				            </div>				        
				            <div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label class="control-label">Password</label>
				                  <input id="APIPassword" type="text" name="APIPassword" class="form-control" value="" required />
				                  <span class="help-block">Enter API Password</span>
				                </div>
				            </div>
				        </div>
		                <div class="row">
		                	<div class="col-md-6">
								<div class="form-group label-floating">
			                        <label for="i5" class="control-label">API Key</label>
			                        <input id="APIKey" type="text" name="APIKey" class="form-control" value="" required />
			                        <span class="help-block">Enter API Key</span>
			                    </div>
			                </div>
						
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">API URL</label>
				                  <input id="APIURL" type="text" name="APIURL" class="form-control" value="" required />
				                  <span class="help-block">Enter API URL</span>
				                </div>
				            </div>
				        </div>
						<div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Customer Country Name</label>
				                  <input id="ConsumerCountryName" type="text" name="ConsumerCountryName" class="form-control" value="" required />				                  
								  <span id="duplicate_country" style="display:none;color:#FF0000;">Duplicate Country Name</span>
								  <span class="help-block">Enter Customer Country Name</span>
				                </div>
				            </div>
				        
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Label API</label>
				                  <input id="LabelAPI" type="text" name="LabelAPI" class="form-control" value="" required />
				                  <span class="help-block">Enter Label API</span>
				                </div>
				            </div>
				        </div>
						<div class="row">
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Announce API</label>
				                  <input id="AnnounceAPI" type="text" name="AnnounceAPI" class="form-control" value="" required />
				                  <span class="help-block">Enter Announce API</span>
				                </div>
				            </div>
				        
		                	<div class="col-md-6">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Track Trace URL</label>
				                  <input id="TrackTraceURL" type="text" name="TrackTraceURL" class="form-control" value="" required />
				                  <span class="help-block">Enter Track Trace URL</span>
				                </div>
				            </div>
				        </div>
												
		               	<div class="row">
							<div class="col-md-8">
				              	<div class="form-group label-floating">
				                  <label for="i5" class="control-label">Application ID</label>
				                  <input id="ApplicationID" type="text" name="ApplicationID" class="form-control" value="" />
				                  <span class="help-block">Enter ApplicationID</span>
				                </div>
				            </div>							
						  </div>
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































		
        
      </div>
	  	  
    </div>
  </div>
</div>