<?php	
	$PKSettingID = (isset($appearanceSettings['CustomerSetting']['PKSettingID']))?$appearanceSettings['CustomerSetting']['PKSettingID']:'';
	$FKCustomerid = (isset($appearanceSettings['CustomerSetting']['FKCustomerid']))?$appearanceSettings['CustomerSetting']['FKCustomerid']:'';
	$ShowEmail = (isset($appearanceSettings['CustomerSetting']['ShowEmail']) && $appearanceSettings['CustomerSetting']['ShowEmail'] == '1')?'checked="checked"':'';
	//echo $appearanceSettings['CustomerSetting']['ShowEmail'];exit();
?>
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well body_btm_bdr' id='ap-panel'>
		<?php
          if(isset($_SESSION['message']['appearance'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['appearance'].'
            </div>';
          }
        ?>
		<form method="POST" action="save_appearance_settings">
        <h3 >Appearance</h3>		
        <br><br>
			
        <div class='row'>
          <div class='col-xs-12 col-md-4'>
            <h4 >COLORS </h4>
            <hr>
			
			<input name="CustomerSetting[PKSettingID]" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
			<input name="CustomerSetting[FKCustomerid]" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
            <table data-toggle="table">
              <thead>
                <tr>
                  <th>
                    Element
                  </th>
                  <th>
                    Colors
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    HEADER
                  </td>
                  <td>
                    <input type='color' name="CustomerSetting[Colours][Header]" value="<?php echo $header_color;?>" />
                  </td>
                </tr>
                <tr>
                  <td>
                    MENU
                  </td>
                  <td>
                    <input type='color'  name="CustomerSetting[Colours][Menu][]" value="<?php echo $menu_bg;?>" />
					          <input type='color'  name="CustomerSetting[Colours][Menu][]" value="<?php echo $menu_font;?>" />
                  </td>
                </tr>
                <tr>
                  <td>
                    DROP DOWN
                  </td>
                  <td>
                    <input type='color'  name="CustomerSetting[Colours][Dropdown][0]" value="<?php echo $dd_bg;?>" />
					          <input type='color'  name="CustomerSetting[Colours][Dropdown][1]" value="<?php echo $dd_font;?>" />
                  </td>
                </tr>
                <tr>
                  <td>
                    ACCENT
                  </td>
                  <td>
                    <input type='color'  name="CustomerSetting[Colours][Accent][0]" value="<?php echo $accent_1;?>" />
					          <input type='color'  name="CustomerSetting[Colours][Accent][1]" value="<?php echo $accent_2;?>" />
                  </td>
                </tr>
              </tbody>
            </table>		
            <br>
            <button type='submit' style='border:0;' class='btn btn-success btn-raised'>Save</button>
			</form><br /><br />
			
			
			<h4>SHOW EMAIL</h4>
            <hr>
			<form method="POST" id="SaveShowEmailSetting" action="save_show_email_setting">
			<input name="PKSettingID" id="PKSettingID" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
			<input name="FKCustomerid" id="FKCustomerid" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
			<table> 
				<tr>
                  <td width="90%">
                    SHOW EMAIL ON CREATE RETURN ORDER
                  </td>
                  <td><div class='togglebutton flo'>				
					<label><input type="checkbox" name="ShowEmail" id="ShowEmail" class="custOpMode"  value="true" <?php echo $ShowEmail;?> /></label>							
					</div>
				</td>
                </tr>
			</table><br>
			<img src='<?php echo base_url();?>img/spin.gif' alt="Loading" title="Loading" class="uploading" id="uploading_logo" style="display:none;" />
            <button type='submit' style='border:0;' class='btn btn-success btn-raised'>Save</button>
			</form>
          </div>
          <div class='col-xs-12 col-md-8' style='border: 0 solid #ddd; border-width: 0 0 0 1px'>
            <h4 >IMAGES</h4>			
            <hr>
            <table data-toggle="table">
              <thead>
                <tr>
                  <th>
                    Name
                  </th>                  
                  <th>
                    Change<span style="font-size:12px;font-weight:normal;color:#FF0000;"> (Only use .png with max size of 2000 x 2000px)</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    MAIN LOGO
                  </td>                  
                  <td valign="top">
                    <div class="col-md-10">
					<form id="logo_change" method="post" enctype="multipart/form-data">
					<input type="hidden" name="textBox" id="textBox" value="0" />
					<input name="PKSettingID" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
					<input name="FKCustomerid" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
					<input name="img_type" value="logo" type="hidden">
                      <input type="file" class="dropify" accept='image/*' name="img_file" id="logo_img"   data-show-remove="false" data-default-file="<?php echo $logo?>" />                 
					   <div class="col-md-12">
						<div class="col-md-2" id="btn_logo_div">
						<img src='<?php echo base_url();?>img/spin.gif' alt="Loading" title="Loading" class="uploading" id="uploading_logo" style="display:none;" /><button class="btn btn-success btn-raised no_padding no_margin btn_save_img" id="btn_logo_change">Save</button></div>
						<div class="col-md-9  pull-right"><span id="invalid_logo" class="err_msg">Only use .png with max size of 2000 x 2000px</span></div>
						
					  </div>
					  </form>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    DROPDOWN SPACER
                  </td>                  
                  <td>
                    <div class="col-md-10">
					<form id="spacer_change" method="post" enctype="multipart/form-data">
					  <input type="hidden" name="textBox" id="textBox" value="0" />
					  <input name="PKSettingID" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
					  <input name="FKCustomerid" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
					  <input name="img_type" value="spacer" type="hidden">
                      <input type="file" id="spacer_img" name="img_file" multiple=""  data-show-remove="false" data-default-file="<?php echo $spacer?>" class="dropify"  accept='image/*' />
                      
					  <div class="col-md-12">
					  <div class="col-md-2" id="btn_spacer_div">
					  <img src='<?php echo base_url();?>img/spin.gif' alt="Loading" title="Loading" class="uploading" id="uploading_logo" style="display:none;" />
					  <button class="btn btn-success btn-raised no_padding no_margin btn_save_img" id="btn_spacer_change">Save</button></div>
					  <div class="col-md-9  pull-right"><span id="invalid_spacer" class="err_msg">Only use .png with max size of 2000 x 2000px</span></div>
					  </div>
					  </form>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    LOADING INDICATOR(.gif)
                  </td>                  
                  <td>
                    <div class="col-md-10">
					  <form id="loading_change" method="post" enctype="multipart/form-data">
					  <input type="hidden" name="textBox" id="textBox" value="0" />
					  <input name="PKSettingID" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
					  <input name="FKCustomerid" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
                      <input type="file" id="loading_img" name="img_file" multiple="" data-show-remove="false" data-default-file="<?php echo $loading?>" class="dropify"  accept='image/*' />                      
					  <input name="img_type" value="loading" type="hidden">
					  <div class="col-md-12">
					  <div class="col-md-2" id="btn_loading_div">
					  <img src='<?php echo base_url();?>img/spin.gif' alt="Loading" title="Loading" class="uploading" id="uploading_logo" style="display:none;" />
					  <button class="btn btn-success btn-raised no_padding no_margin btn_save_img" id="btn_loading_change">Save</button></div>
					  <div class="col-md-9  pull-right"><span id="invalid_loading" class="err_msg">Use Only GIF image</span></div>
					  </div>
					  </form>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
	  	  
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){	
	// Basic
	$('.dropify').dropify();
	//$('.dropify-wrapper').addClass("img-circle");
	//$('.img-circle').css({'height':'100px','width':'100px'});
	$('.dropify-infos-inner').remove();	
	$('.dropify-wrapper').css({'height':'150px','width':'180px'});
	$('.dropify-wrapper').css('border', '0px');
	
	//Validate the image file format jpg, jpeg, and png for logo and spacer, only gif for loading
	$('input:file').change(function () {
		var upload_id = $(this).prop('id');
		
		if ($(this).val()) {
			var file, img, imgwidth, imgheight;
			var _URL = window.URL || window.webkitURL;
			var ext = this.value.match(/\.(.+)$/)[1];
			if ((file = this.files[0])) {
				img = new Image();
				img.onload = function() {
					//alert(this.width + " " + this.height);
					imgwidth = this.width;
					imgheight = this.height;
					if(upload_id == 'logo_img'){
						if(imgwidth > 2000 || imgheight > 2000){
							$('#invalid_logo').css({'display':'block'});
							$('#btn_logo_div').css({'display':'none'});					
							$('#'+upload_id).val('');
						}else if(ext !== 'png'){
							$('#invalid_logo').css({'display':'block'});
							$('#btn_logo_div').css({'display':'none'});					
							$('#'+upload_id).val('');
						}						
						else{
							$('#invalid_logo').css({'display':'none'});
							$('#btn_logo_div').css({'display':'block'});
							return false;
						}
					}
					if(upload_id == 'spacer_img'){
						if(imgwidth > 2000 || imgheight > 2000){
							$('#invalid_spacer').css({'display':'block'});
							$('#btn_spacer_div').css({'display':'none'});					
							$('#'+upload_id).val('');
						}else if(ext !== 'png'){
							$('#invalid_spacer').css({'display':'block'});
							$('#btn_spacer_div').css({'display':'none'});					
							$('#'+upload_id).val('');
						}
						else{
							$('#invalid_spacer').css({'display':'none'});
							$('#btn_spacer_div').css({'display':'block'});
							return false;
						}
					}
					if(upload_id == 'loading_img'){
						if(ext === 'gif' ){
							$('#invalid_loading').css({'display':'none'});
							$('#btn_loading_div').css({'display':'block'});
							return false;
						}else{
							$('#invalid_loading').css({'display':'block'});
							$('#btn_loading_div').css({'display':'none'});					
							$('#'+upload_id).val('');					
						}
					}
				};
				img.onerror = function() {
					//alert( "not a valid file: " + file.type);
				};
				img.src = _URL.createObjectURL(file);

			}			 			
			//var ext = this.value.match(/\.(.+)$/)[1];
			//alert(ext);			
						
			
		}
	});	
});	
//AJAX call to update three types of images like logo, spacer and loading
$(document).ready(function(){
	$('.btn_save_img').on('click',(function(e) {
		e.preventDefault();
		var counter = $('#textBox').val();
		var form_id = $(this).closest("form").attr('id');
		$('#'+form_id+' .uploading').css({'display':'block'});//Show spin image
		$('#'+form_id+' .btn_save_img').css({'display':'none'});//Hide save btn
		//btn_save_img
		//console.log(form_id);
		counter++ ;
		$('#textBox').val(counter);		
		$.ajax({
			url: "<?php echo base_url(); ?>index.php/admin/change_appearance_img/",
			type: "POST",
			data:  new FormData(document.querySelector('#'+form_id)),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				console.log(data);					
				//alert('#'+form_id+' .uploading');
				$('#'+form_id+' .uploading').css({'display':'none'});//Hide spin image
				$('#'+form_id+' .btn_save_img').css({'display':'block'});//Hide save btn
				
			},
			error: function(data) 
			{
				console.log(data);
				$('#'+form_id+' .uploading').css({'display':'none'});//Hide spin image
				$('#'+form_id+' .btn_save_img').css({'display':'block'});//Hide save btn
			} 	        
		});
		//return false;
		
		
	}));
	//Save the show email setting during create return order
	$('#btn_save_email_setting').on('click',(function(e) {		
			//console.log($(''));
			//data: new FormData(document.querySelector('#SaveShowEmailSetting')),
			console.log(apoyarToken);
			var emaildata = {};
			emaildata['PKSettingID'] = $('#PKSettingID').val();
			emaildata['FKCustomerid'] = $('#FKCustomerid').val();
			emaildata['ShowEmail'] = $('#ShowEmail').val();
			//console.log(data);
			$.ajax({
			  url: "<?php echo base_url(); ?>index.php/admin/save_show_email_setting/",
			  type: 'POST',
			  data: emaildata,		  			  			
			  success: function (emaildata) {				
				console.log(emaildata);								
			  },
			  fail: function(){
				console.log('fail');
			  }
			});
	
	}));
	
});
</script>