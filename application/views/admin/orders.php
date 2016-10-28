<?php	
	$PKSettingID = (isset($appearanceSettings['CustomerSetting']['PKSettingID']))?$appearanceSettings['CustomerSetting']['PKSettingID']:'';
	$FKCustomerid = (isset($appearanceSettings['CustomerSetting']['FKCustomerid']))?$appearanceSettings['CustomerSetting']['FKCustomerid']:'';
	
	
	$header_color = get_appearance_value('header_color');
	$menu_bg = get_appearance_value('menu_bg');
	$menu_font = get_appearance_value('menu_font');
	$accent_1 = get_appearance_value('accent_1');
	$accent_2 = get_appearance_value('accent_2');
	$dd_bg = get_appearance_value('dd_bg');
	$dd_font = get_appearance_value('dd_font');
	
	$hdr_css = 'style="color:'.$header_color.'"';
	$menu_css = 'style="color:'.$menu_font.';background-color:'.$menu_bg.'"';
	//style="border-bottom: 15px solid #E25176; padding-bottom: 40px;"
	$border_bottom = 'style="border-bottom: 15px solid '.$accent_2.'; padding-bottom: 40px;"';
	$btn_bg = 'style="background-color:'.$accent_1.'"';
	
/*admin css*/


?>
<style scoped>
.bm-nav-center{
  padding: 20px;
  font-size: 18px;
  border-bottom: 1px solid #ddd;
  color: #000;
}
.bm-nav-center:hover{
  background-color: <?php echo $menu_bg?> !important;
  color: <?php echo $menu_font?> !important;
  cursor: pointer; 
  cursor: hand;
  
}
<div class='container-fluid form1'>
  <div class='row'>
    <div class='col-xs-12 col-md-3' height='100%'>
      <div class='well'   <?php echo $border_bottom?>>
        <div class='row'>
          <div class='col-md-12 text-center' >
            <h3 <?php echo $hdr_css?>><b>TRUE RELIGION</b></h3><br>
          </div>
          <a href='orders'>
          <div style='background-color: #009688; color: #fff;' class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-1.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Returns</span>
          </div>
          </a>
          <a href='appearance'>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
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
      <br><br>
      <div class='well hidden-xs hidden-sm'   <?php echo $border_bottom?>>
        <div class='col-md-12 text-center' >
          <h3 <?php echo $hdr_css?>><b>STATISTICS</b></h3><br>
        </div>
        <table data-toggle="table">
          <thead>
            <tr>
              <th>
                <b>From</b>
                <div class="form-group">
                  <input id='stat-from' type='text' class='form-control' placeholder="yyyy-mm-dd">
                </div>
              </th>
              <th>
                <b>To</b>
                <div class="form-group">
                  <input id='stat-to' type='text' class='form-control' placeholder="yyyy-mm-dd">
                </div>
              </th>
              <th>                
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <b>Returns:</b>
              </td>
              <td>
                N/A
              </td>
              <td>
              </td>
            </tr>
            <tr>
              <td>
                <b>Return Amount:</b>
              </td>
              <td>
                N/A
              </td>
              <td>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <button class='btn btn-primary btn-block btn-raised'>UPDATE</button>
      </div>
    </div>
      
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well'   <?php echo $border_bottom?>>
        <div class="alert alert-dismissible alert-primary">
          Listing the latest 20 returned orders
        </div>
        <table data-toggle="table">
          <thead>
            <tr>
              <th>
                <div class='form-group'>
                  <select name='Month' class='form-control'>
                    <option value='0' selected>
                      Month
                    </option>
                    <option value='1'>
                      Jan
                    </option>
                    <option value='2'>
                      Feb
                    </option>
                    <option value='3'>
                      Mar
                    </option>
                    <option value='4'>
                      Apr
                    </option>
                    <option value='5'>
                      May
                    </option>
                    <option value='6'>
                      Jun
                    </option>
                    <option value='7'>
                      Jul
                    </option>
                    <option value='8'>
                      Aug
                    </option>
                    <option value='9'>
                      Sep
                    </option>
                    <option value='10'>
                      Oct
                    </option>
                    <option value='11'>
                      Nov
                    </option>
                    <option value='12'>
                      Dec
                    </option>
                  </select>
                </div>
              </th>
              <th>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Search by order-id</label>
                  <input name='OrderID' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Search by return order-id</label>
                  <input name='PKReturnOrderid' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>

              </th>
              <th>

              </th>
              <th>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Search by carrier</label>
                  <input name='CarrierName' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Search by status</label>
                  <input name='ReturnStatus' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>
                <button class='btn btn-success btn-raised' id='search-button'>
                  SEARCH
                </button>
              </th>
            </tr>
            <tr>
              <th>Date</th>
              <th>Order ID</th>
              <th>Return Order ID</th>
              <th>Tracking</th>
              <th>Refund</th>
              <th>Carier</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
</div>