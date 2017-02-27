	<div class='col-xs-12 col-md-9' height='100%'>
      <div class='well body_btm_bdr' id='ap-panel'>		
        <h3>Manage Return Orders </h3>			
        <div class="row">			
			<div class="col-md-6">
				<?php
					//echo "allCustomers : " . json_encode($allCustomers);
					echo '<div class="form-group" id="orders_by_customer_div"><label>Select a Customer</label><select id="orders_by_customer_id" name="Customerid" class="form-control">';
					echo '<option value="-1">All Customer Orders</option>';
					for($i=0;$i<count($allCustomers);$i++) {
						$selected = ($Customerid == $allCustomers[$i]['PKCustomerID'])?'selected':'';
						echo '<option '.$selected.' value="'. $allCustomers[$i]['PKCustomerID'] . '">' . $allCustomers[$i]['CustomerName'] . '</option>';
						}
					echo '</select></div>';
				?>
			</div>
			<div class="col-md-4">
				
			</div>
			<div class="col-md-2 pull-right">
				<button id="export" data-export="export" class='btn btn-raised btn-sm' style="margin-top: 26px;">Export as CSV</button>
			</div>
		</div>		
	<div class='row' >
		<input type="hidden" name="hdn_customer_id_ord" id="hdn_customer_id_ord" value="<?php echo $Customerid?>" />
        <div id="showError">
        <?php
          if(isset($_SESSION['message']['carrier_panel'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['carrier_panel'].'
            </div>';
          }
        ?>
        </div>
			<table  id="orders_data" class="table table-striped table-bordered" cellspacing="0">		
			  <thead>				
				<tr>
				  <th  class="nosort col-md-1">
					<div class='form-group'>
					  <input type='text' id="ReturnsOrderCreationDate" name="ReturnsOrderCreationDate" class='datepicker form-control' placeholder="From" 
					  style="font-size:0.9em !important;" />
					  <input type='text' id="ReturnsOrderToDate" name="ReturnsOrderToDate" class='datepicker form-control' placeholder="To " 
					  style="font-size:0.9em !important;" />	
					</div>
				  </th>
				  <th class="col-md-2">
					<div class="form-group label-floating">
					  <label for="i5" class="control-label">Order-id</label>
					  <input name='OrderID' type="text" class="form-control" id="i5">
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th class="col-md-2 th-inner">
					<div class="form-group label-floating">
					  <label for="i5" class="control-label" style="font-size: 14px;">ReturnOrderID</label>
					  <input name='ReturnId' type="text" class="form-control" id="i5" />
					  <span class="help-block"></span>
					</div>
				  </th>	
					<th></th>
					
					<th class="col-md-1"></th>				  
				    <th class="col-md-1">
					<div class="form-group label-floating">
					  <!--<label for="i5" class="control-label">Carrier</label>
					  <input name='CarrierName' type="text" class="form-control" id="i5">-->					  
					  <select name="CarrierName" class="form-control filter_dd" id="filter_carrier">
						<option value="">Carrier</option>						
					  </select>
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th class="col-md-2"><br />
					<div class="form-group label-floating">
					  <!--<label for="i5" class="control-label">Status</label>
					  <input name='StatusName' type="text" class="form-control" id="i5">-->
					  <select name="StatusName" class="form-control filter_dd" id="filter_ordstatus">
						<option value="">Status</option>						
					  </select>
					  <span class="help-block"></span>
					</div>
				  </th>
				   <th style="width:100px;"></th>
				  <th class="col-md-3 th-inner" style="vertical-align:bottom !important;">				 
					<button type="button" id="order_search_btn" class='btn btn-success btn-raised btn-sm'>					  
					  SEARCH
					</button>
					<button class='btn btn-success btn-raised btn-sm' id='btn_clear' onclick="javascript:window.location.reload()">
					  CLEAR
					</button>					
				  </th>
				</tr>
				<tr>
				  <th>Date</th>
				  <th>Order ID</th>
				  <th class="th-inner">R.O. ID</th>
				  <!--<th class="nosort">Tracking</th>-->
				  <th>Refund</th>
				  <th>Customer</th>
				  <th>Carrier</th>
				  <th>Status</th>
				   <th style="width:100px;">Tracking Code</th>
				  <th class="nosort">Action</th>
				</tr>
				<tr>
					<td colspan="9"></td>
				</tr>
			  </thead>
			  <tbody></tbody>
			</table>			
		</div>
		<div class="row">
          <div class="col-md-12">
			  <div class="col-md-6 pull-left" id="total_records" style="margin-top:3px !important;"><b>Total Records#:<span><span></b>			  
			  </div>
			  <div class="col-md-3 pull-right" id="page_size_div"><?php          
			  echo '<select id="page_size" name="page_size" class="form-control" style="margin:0 !important;">';
			  echo '<option value="20">Show Records</option>';
			  for($i=20;$i<=100;$i=$i+20) {           
				echo '<option value="'.$i. '">' .$i. '</option>';
			  }
			  echo '</select>';
			?>
			</div>
          </div>
        </div>
		<div class="row">			
			<div class="col-md-8 pull-right" style="margin-top:30px !important;">
				<div id="btm_pagination" class="col-md-11 pull-right text-right"></div>				
			</div>
		</div>
      </div>	
		
		
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel">Full info on return order: </h4>
					</div>
					<div class="modal-body">
						<b>Full date/time:</b> , 
						<b>Orderid:</b> ,
						<b>Return status:</b>
							Label Printed<br><br>
						<b>Customer Email:</b><br><br>
						<b>Customer Phone:</b> <br><br>
						<b>Comment:</b><br>
							No comment has been made yet<br><br>
						<b>Items returned (1):</b><hr>
						<b>Item name:</b> <br>
						<b>Product SKU:</b> <br>
						<b>Product info:</b> <br>
						<b>Return reason:</b> <br>
						<b>Quantity:</b> <br> 
						<b>Price:</b>  <hr>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" language="javascript" class="init">
function colShowHide() {
$('#dt-button-collection > a:last').css('color', 'red');
	$('#orders_data').DataTable( {
		dom: 'B',
		'columnDefs': [
        { targets: 7, visible: false }
    ],
		"bPaginate": false,
		bFilter: false, 
		bInfo: false,
		
		buttons: [
			{
            extend: 'colvis',
			
           columns: ':lt(8)'
			//columns: [ 0, 1, 2, 5 ]
        }
			
		]
	} );
}

setTimeout(colShowHide, 2000);
</script>
<style type="text/css">
	.no-records-found
	{
		display:none;
	}
	.bootstrap-table
	{
	xmargin-top:-110px;
	}
	div.dt-buttons
	{
	top:-45px;
	left:-10px;
	}
	#orders_data_wrapper
	{
	xtop:-20px;
	
	}
	.dt-button-collection a.buttons-columnVisibility:before,
	.dt-button-collection a.buttons-columnVisibility.active span:before {
	display:block;
	position:absolute;
	top:1.2em;
    left:0;
	width:12px;
	height:12px;
	box-sizing:border-box;
}

.dt-button-collection a.buttons-columnVisibility:before {
	content:' ';
	margin-top:-6px;
	margin-left:10px;
	border:1px solid black;
	border-radius:3px;
}

.dt-button-collection a.buttons-columnVisibility.active span:before {
	content:'\2714';
	margin-top:-11px;
	margin-left:12px;
	text-align:center;
	text-shadow:1px 1px #DDD, -1px -1px #DDD, 1px -1px #DDD, -1px 1px #DDD;
}

.dt-button-collection a.buttons-columnVisibility span {
    margin-left:20px;    
}
@media screen and (max-device-width: 980px) {
div.dt-buttons
	{
	
	top:-36px;
	left:-48px
	}
}	
@media screen and (max-device-width: 1280px) {
div.dt-buttons
	{
	
	left:75px
	
	
	}
}	
@media screen and (max-device-width: 1920px) {
div.dt-buttons
	{
	
	}
}	</style>