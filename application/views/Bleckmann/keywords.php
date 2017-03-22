<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		
		<div class="well body_btm_bdr">
			<h3>Manage Keywords Translation</h3>
			<?php
		          if(isset($_SESSION['message']['languages_panel'])){
		            echo '<div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">'.$_SESSION['message']['languages_panel'].'      </div>';
		          }
	        	?>
	        	<?php echo'<script>allLanguages = '. json_encode($allLanguages) .'</script>';?>
			<div class="row">			
				<div class="form-group col-md-12">							
					<div class="col-md-3"><h4>Choose Language</h4></div>
					<div class="col-md-5">
						<select id="keywords_by_langid" class="form-control">
						  <?php
						  //print_r($allLanguages);
						  for ($i=0; $i<count($allLanguages); $i++) {
							  if($allLanguages[$i]['IsActive'] > 0 )
							  {
								  $selected = ($this->uri->segment(3) == $allLanguages[$i]['PKLanguageID'])?'selected':'';
								  echo '<option value="'.$allLanguages[$i]['PKLanguageID'].'" '.$selected.' >'.$allLanguages[$i]['LanguageName'].'</option>';
							  }			          	
						  }
						  ?>
						</select>
					</div>			  
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-12">
				<?php
		          if(isset($_SESSION['message']['keywords_panel'])){
		            echo'
		            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
		              '.$_SESSION['message']['keywords_panel'].'
		            </div>';
		          }
	        	?>
					<div class="alert alert-dismissible alert-success keywords_msg" id="keywords_saved" style="display:none;">Saved</div>
					<div class="alert alert-dismissible alert-warning keywords_msg" id="keywords_error" style="display:none;">Error</div>
					<form method="post" id="fromSaveKeywords" action="<?php echo base_url() . 'index.php/Bleckmann/saveTranslationsKeywords'?>">
					<table class='table' id="keyword_transalation">
						<thead>					
							<tr>
								<th class="col-md-4 pull-left"><h4>Keyword</h4></th>
								<th  class="col-md-8"><div class="col-md-6 pull-left"><h4>Translation</h4></div>
									<div class="col-md-6 pull-right">
										<button type="button" id='save_keywords_cancel' class='btn btn-raised btn-warning pull-right btn_save_keywords_cancel'>Cancel</button>
										<button type="button" id='save_keywords' class='btn btn-raised btn-success pull-right btn_save_keywords'>
										Save
										</button>
									</div>
								</th>								
							</tr>
							<tr>
								<th></th>
								<th><div class='loading' style="display:none;">
									<div style='height: 15vh'></div>
									<img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
									<br>
									<p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
									<div style='height: 15vh'></div>				      
									
								</div></th>
								
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
					</form>
					<!--<div class="col-md-8 pull-right">
						<button type="button" id='save_keywords_cancel' class='btn btn-raised btn-warning pull-right btn_save_keywords_cancel'>Cancel</button>
						<button type="button" id='save_keywords' class='btn btn-raised btn-success pull-right btn_save_keywords'>
						Save
						</button>
					</div>-->
				</div>
			</div>
					
			
		</div>
		
		
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
    
		