    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
        <h3>Manage Carriers</h3>		
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
				//print_r($all_carriers);			
	  			for($i=0; $i<count($all_carriers); $i++) {
	  				//Array ( [0] => Array ( [PKCarrierID] => 1 [CarrierName] => Royal Mail [APIUserName] => dtdc [APIPassword] => ap0yar [APIKey] => dtdc [APIURL] => dtdc.com [FKCustomerID] => 1 [ConsumerCountryName] => Belgium [Isactive] => 1 [LabelAPI] => [AnnounceAPI] => [TrackTraceURL] => ) )
					
	  				echo '<div class="col-xs-12 col-md-3" height="100%"">
							<div class="well" style="border-bottom: 5px solid #22B8AA; padding-bottom: 40px;">
								<h3>'. $all_carriers[$i]['CarrierName'] . '</h3>
								<p>User Name: '. $all_carriers[$i]['APIUserName'] .'</p>
								<p>Key : '. $all_carriers[$i]['APIKey'] .'</p>
								<p>URL: '. $all_carriers[$i]['APIURL'] .'</p>
								<p>Country: '. $all_carriers[$i]['ConsumerCountryName'] .'</p>
								<p>Label: '. $all_carriers[$i]['LabelAPI'] .'</p>
								<p>Announce API: '. $all_carriers[$i]['AnnounceAPI'] .'</p>
								<p>TraceURL: '. $all_carriers[$i]['TrackTraceURL'] .'</p>
								<p><a href="#" data-toggle="modal" data-target="#moreInfo-' . $all_carriers[$i]['PKCarrierID'] .'">More Info</a></p>
								<div class="row">
									<button type="button" data-toggle="modal" data-target="#delete_carrier_modal'. $all_carriers[$i]['PKCarrierID'] .'" id="delete_carrier" class="btn btn-raised btn-danger pull-right">Delete</button>
									<button type="button" data-toggle="modal" data-target="#add_carrier_modal" id="editcarrrier_'. $all_carriers[$i]['PKCarrierID'] .'" class="btn btn-raised btn-success pull-right edit_carrier">Edit</button>
								</div>
							</div>
						</div>';
					echo '<div class="modal fade" id="delete_carrier_modal'.$all_carriers[$i]['PKCarrierID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				              <div class="modal-dialog" role="document">
				                <div class="modal-content">
				                  <form method="POST" action="deleteCarrier">
				                  <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title" id="myModalLabel">Delete Carrier - '. $all_carriers[$i]['CarrierName'].'?</h4>
				                  </div>
				                  <div class="modal-body">
				                    <p>Are you sure you want to delete this Carrier?</p>';
									echo '<input type="hidden" name="PKCarrierID" value="'. $all_carriers[$i]['PKCarrierID'].'">';
									echo '<input type="hidden" name="IsActive" value="false">';
									
									echo'</div>
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
		
		<!-- Add Carriers Modal 
		//Array ( [0] => Array ( [PKCarrierID] => 1 [CarrierName] => Royal Mail [APIUserName] => dtdc [APIPassword] => ap0yar [APIKey] => dtdc [APIURL] => dtdc.com [FKCustomerID] => 1 [ConsumerCountryName] => Belgium [Isactive] => 1 [LabelAPI] => [AnnounceAPI] => [TrackTraceURL] => ) )
		-->
        <div class="modal fade" id="add_carrier_modal" tabindex="-1" role="dialog" aria-labelledby="carrierLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
			
              	<form method="POST" action="submitCarrierInfo" id="carrier_info_form">
				<input type="hidden" name="FKCustomerID" value="1" />
				<input id="PKCarrierID" type="hidden" name="PKCarrierID" value="">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="carrierLabel" >Add a Carrier</h4>
	              </div>
	              <div class="modal-body">
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
				                  <label for="i5" class="control-label">Consumer Country Name</label>
				                  <input id="ConsumerCountryName" type="text" name="ConsumerCountryName" class="form-control" value="" required />
				                  <span class="help-block">Enter Consumer Country Name</span>
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
		               	
		          </div>
		          
	              <div class="modal-footer">
					<img style="margin-left:250px;margin-top:10px;float:left;" src='<?php echo base_url();?>img/spin.gif' alt="Loading" title="Loading" class="uploading" id="loadingspin"	style="display:none;" />
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