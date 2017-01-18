<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-multiselect.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-multiselect.css">	
<style type="text/css">
	.multiselect-container {
		max-width: 250px;
		overflow-x: auto;
	}
	.multiselect-native-select .error {
		position: absolute;
		top:24px;
		left:42px;
	}
</style>

<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class='well body_btm_bdr' id='ap-panel'>
			<form method="POST" action="<?php echo base_url()?>index.php/Bleckmann/updateCarrier" id="edit-carrier-form">
	    	<h3>Edit Carrier</h3>
				<div class='row'>
					<div class="col-md-8">						
					</div>
					<div class="col-md-4">						
						<a type="button" id='cancel-carrier' class='btn btn-raised btn-warning pull-right' href="<?php echo base_url()?>index.php/Bleckmann/carriers">Cancel</a>
						<button type="submit" id='add-carrier' class='btn btn-raised btn-success pull-right'>Save</button>
						
					</div>
				</div>
				<br>
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
			    	<div class="col-md-12" id="carrier_edit">						
						<input type="hidden" name="hdn_carrier_id" id="hdn_carrier_id" value="<?php echo $carrier_id;?>" />
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
								<div class="row" id="settings-alert" style="display:none">
									<div class="alert alert-dismissible alert-success">
				        				Saved
				    				</div>
		   						</div>
				                <div class="row">
				                	<div class="col-md-6">
						              	<div class="form-group label-floating required">
						                  <label class="control-label">Carrier Name</label>
						                  <input id="CarrierName" type="text" name="CarrierName" class="form-control" value="<?php echo $editCarrierInfo['CarrierName']?>">
						                  <span class="help-block">Enter Carrier Name</span>
						                </div>
						            </div>
									<div class='col-md-6'>
						            	<div class="form-group label-floating required">
						                  	<h5>Select Countries</h5>
											<?php						                  	
											echo '<select class="form-control chosen-select-width" id="Countries" name="Countries[]" placeholder="Select Countries" multiple >';
											
							                  	//echo '<option value="-1">Select a Country</option>';
							                  	for ($i=0; $i<count($allCountries); $i++) {
													//editCarrierInfo['Countries'];
													$selected = (in_array($allCountries[$i]['PKCountryId'], $editCarrierInfo['Countries']))?' selected':'';
							                  		if ( $allCountries[$i]['IsActive'] ) {
							                  			echo '<option '.$selected.' value="' . $allCountries[$i]['PKCountryId'].'">' . $allCountries[$i]['CountryName'] . '</option>';
							                  		}
							                  	}
						                  	echo '</select>';
						                  	?>
					                  	</div>
						            </div>
						            
				          		</div>
				          		
				          		<div id="all-settings">
					          		<div class="row" style="margin-top: 10px !important;">
					          			<div class="col-md-12">
							                <div style="border: 1px solid #ddd; padding: 20px;margin-bottom:5px;">
							                	<h4>Global Settings <a class="pull-right" id="add-carrier-global-setting" href="javascript:void(0)">Add New</a></h4>
							                	<div id="global-settings-error" style="color:red;font-size:13px;display: none;">Please enter Global Settings</div>
							                	<div id="global-setting">
												<?php
												$i = 0;
												foreach($GlobalSetting as $GlobalSettingInfo){													
												?>
												<div class="row" id="<?php echo 'GlobalSettingDiv'.$GlobalSettingInfo['PKGlobalCarrierId']?>">
													<div class="col-md-12">
														<input type="hidden" name="GlobalSetting[<?php echo $i?>][PKGlobalCarrierId]" value="<?php echo $GlobalSettingInfo['PKGlobalCarrierId']?>">
														<div class="col-md-5">
															<div class="form-group label-floating">
															  <label class="control-label">Settings Name</label>
															  <input id="SettingsName" type="text" name="GlobalSetting[<?php echo $i?>][SettingName]" class="form-control SettingsNameCls" value="<?php echo $GlobalSettingInfo['SettingName']?>">
															  <span class="help-block">Enter Settings Name</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group label-floating">
															  <label class="control-label">Settings Value</label>
															  <input id="SettingsValue" type="text" name="GlobalSetting[<?php echo $i?>][SettingValue]" class="form-control SettingsValueCls" value="<?php echo $GlobalSettingInfo['SettingValue']?>">
															  <span class="help-block">Enter Settings Value</span>
															</div>
														</div>
														<div class="col-md-1" style="vertical-align:bottom;">
															<div class="form-group">
																<a data-toggle="modal" style="color:#f44336;cursor:pointer;"
																data-target="<?php echo '#delete-g-settings-modal'.$GlobalSettingInfo['PKGlobalCarrierId']?>" id="delete-settings" class="pull-right"><i class="material-icons" style="color:red;">delete</i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="modal fade" id="<?php echo 'delete-g-settings-modal'.$GlobalSettingInfo['PKGlobalCarrierId']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title" id="myModalLabel">Delete Setting - <?php echo $GlobalSettingInfo['SettingName']?>?</h4>
															</div>
															<div class="modal-body">
																<p>Are you sure you want to delete this Setting?</p>
																<input type="hidden" id="PKGlobalCarrierId" name="PKGlobalCarrierId" value="<?php echo $GlobalSettingInfo['PKGlobalCarrierId']?>">
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																<button type="button" id="<?php echo 'delete-g-'.$GlobalSettingInfo['PKGlobalCarrierId'].'-'.$editCarrierInfo['PKCarrierID']?>" class="btn btn-danger delete-global-settings-btn" data-dismiss="modal" data-backdrop="false">Delete</button>
															</div>
														</div>
													</div>
												</div>							
												<?php
												$i++;//Increament $i value
												}
												?>

							                	</div>
							                </div>
						                </div>
					                </div>
					                <br/>
					                <div class="row">
					                	<div class="col-md-12">
							                <div style="border: 1px solid #ddd; padding: 20px;margin-bottom:5px;">
							                	<h4>Carrier Settings <a class="pull-right" id="add-carrier-local-setting" href="javascript:void(0)">Add New</a></h4>
							                	<div id="local-settings-error" style="color:red;font-size:13px;display: none;">Please enter Carrier Settings</div>
							                	<div id="carrier-setting">
												<?php
												$i = 0;
												foreach($CarrierSetting as $CarrierSettingInfo){													
												?>
													<div class="row" id="<?php echo 'CarrierSettingDiv'.$CarrierSettingInfo['PKGlobalCarrierId'];?>">
														<div class="col-md-12">
														<input type="hidden" name="CarrierSetting[<?php echo $i?>][PKGlobalCarrierId]" 
														value="<?php echo $CarrierSettingInfo['PKGlobalCarrierId'];?>" />
															<div class="col-md-6">
																<div class="form-group label-floating">
																  <label class="control-label">Settings Name</label>
																  <input readonly="readonly" id="SettingsName" type="text" name="CarrierSetting[<?php echo $i?>][SettingName]" class="form-control LocalSettingsCls" value="<?php echo $CarrierSettingInfo['SettingName'];?>">
																  <span class="help-block">Enter Settings Name</span>
																</div>
															</div>
															<div class="col-md-2" style="vertical-align:bottom;">
																<div class="form-group">
																	<a data-toggle="modal" style="color:#f44336;cursor:pointer;" data-target="<?php echo '#delete-c-settings-modal'.$CarrierSettingInfo['PKGlobalCarrierId'];?>" id="delete-settings" class="pull-right"><i class="material-icons" style="color:red;">delete</i></a>
																</div>
															</div>
														</div>
													</div>
													<div class="modal fade" id="<?php echo 'delete-c-settings-modal'.$CarrierSettingInfo['PKGlobalCarrierId'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="myModalLabel"><?php echo 'Delete Setting - '.$CarrierSettingInfo['SettingName'];?></h4>
																</div>
																<div class="modal-body">
																	<p>Are you sure you want to delete this Setting?</p>
																	<input type="hidden" id="PKGlobalCarrierId" name="PKGlobalCarrierId" 
																	value="<?php echo $CarrierSettingInfo['PKGlobalCarrierId'];?>">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button type="button" id="<?php echo 'delete-c-'.$CarrierSettingInfo['PKGlobalCarrierId'].'-'.$carrier_id;?>" class="btn btn-danger delete-carrier-settings-btn" data-dismiss="modal" data-backdrop="false">Delete</button>
																</div>
															</div>
														</div>
													</div>
												<?php
													$i++;
												}
												?>
							                	</div>
							                </div>
						                </div>
					                </div>
				    			</div>
				    		</div>
			          </div>
			          <input id="PKCarrierId" type="hidden" name="PKCarrierId" value="<?php echo $editCarrierInfo['PKCarrierID']?>">
			          <input id="Isactive" type="hidden" name="Isactive" value="true"> 
										
					</div>
			
				</div></form>	
			</div>
		</div>
