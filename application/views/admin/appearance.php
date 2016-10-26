<div class='container-fluid form1'>
  <div class='row'>
    <div class='col-xs-12 col-md-3' height='100%'>
      <div class='well' style='border-bottom: 15px solid #22b8aa; padding-bottom: 40px;'>
        <div class='row'>
          <div class='col-md-12 text-center' >
            <h3><b>TRUE RELIGION</b></h3><br>
          </div>
          <a href='orders'>
          <div class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-1.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Returns</span>
          </div>
          </a>
          <a href='appearance'>
          <div  style='background-color: #009688; color: #fff;' class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-2.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Appearance</span>
          </div>
          </a>
          <a href='settings'>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-3.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Settings</span>
          </div>
          </a>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-4.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Integration</span>
          </div>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-5.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Other</span>
          </div>
        </div>
      </div>
    </div>
      
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;'>
	  <?php 
		$Colors = json_encode(unserialize($appearanceSettings['CustomerSetting']['Colours']));
		$Colors = json_decode($Colors);		
		$main_logo = (isset($appearanceSettings['CustomerSetting']['Logo']))?$appearanceSettings['CustomerSetting']['Logo']:'';
		$PKSettingID = (isset($appearanceSettings['CustomerSetting']['PKSettingID']))?$appearanceSettings['CustomerSetting']['PKSettingID']:'';
		$FKCustomerid = (isset($appearanceSettings['CustomerSetting']['FKCustomerid']))?$appearanceSettings['CustomerSetting']['FKCustomerid']:'';
		
		if(count($Colors)>0){
			foreach($Colors as $result){			
				//stdClass Object ( [Header] => #625454 [Menu] => Array ( [0] => #625454 [1] => #FFFFFF ) [Accent] => Array ( [0] => #CC1543 [1] => #E25176 ) ) #FFFFFF#FFFFFF#FFFFFF
				$header_color = (isset($Colors->Header))?$Colors->Header:'#FFFFFF';
				$menu_bg = (isset($Colors->Menu[0]))?$Colors->Menu[0]:'';
				$menu_font = (isset($Colors->Menu[1]))?$Colors->Menu[1]:'';
				$accent_bg = (isset($Colors->Accent[0]))?$Colors->Accent[0]:'';
				$accent_font = (isset($Colors->Accent[1]))?$Colors->Accent[1]:'';
				$dd_bg = (isset($Colors->Dropdown[0]))?$Colors->Dropdown[0]:'';
				$dd_font = (isset($Colors->Dropdown[1]))?$Colors->Dropdown[1]:'';
			}
		}
		?>
	   <form method="POST" action="save_appearance_settings">
	   <input name="CustomerSetting[PKSettingID]" class="CustomerSetting" value="<?php echo $PKSettingID?>" type="hidden">
	   <input name="CustomerSetting[FKCustomerid]" class="CustomerSetting" value="<?php echo $FKCustomerid?>" type="hidden">
		
        <h3>Appearance<button class='btn btn-raised btn-success pull-right save-reasons'>Save</button></h3>
        <br><br>
		
        <div class='row'>
          <div class='col-xs-12 col-md-4'>
            <h4>COLORS</h4>
            <hr>
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
                    <input type='color'  name="CustomerSetting[Colours][Accent][0]" value="<?php echo $accent_bg;?>" />
					<input type='color'  name="CustomerSetting[Colours][Accent][1]" value="<?php echo $accent_font;?>" />
                  </td>
                </tr>
              </tbody>
            </table>
			
          </div>
          <div class='col-xs-12 col-md-8' style='border: 0 solid #ddd; border-width: 0 0 0 1px'>
            <h4>IMAGES</h4>
            <hr>
            <table data-toggle="table">
              <thead>
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Image
                  </th>
                  <th>
                    Change
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    MAIN LOGO
                  </td>
                  <td>
                    <img src='<?php echo base_url();?>img/logo.png' height='50px'>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="file" id="inputFile2" multiple="" data-default-file="<?php echo base_url(); ?>img/icon-logo.gif" class="dropify" />
                      <input type="text" readonly="" class="form-control" placeholder="Upload a file">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    DROPDOWN SPACER
                  </td>
                  <td>
                    <img src='<?php echo base_url();?>img/bm-spacer.jpg'>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="file" id="inputFile2" multiple="" data-default-file="<?php echo base_url(); ?>img/icon-logo.gif" class="dropify" />
                      <input type="text" readonly="" class="form-control" placeholder="Upload a file">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    LOADING INDICATOR
                  </td>
                  <td>
                    <img src='<?php echo base_url();?>img/loading-pink.gif' height='50px'>
                  </td>
                  <td>
                    <div class="form-group">
                      <input type="file" id="inputFile2" multiple="" data-default-file="<?php echo base_url(); ?>img/icon-logo.gif" class="dropify" />
                      <input type="text" readonly="" class="form-control" placeholder="Upload a file">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
	  </form>	  
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
	$('.dropify-wrapper').css({'height':'120px','width':'120px'});
	$('.dropify-wrapper').css('border', '0px');
});	
</script>