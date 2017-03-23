	<div class='col-xs-12 col-md-9' height='100%'>
      <div class='well body_btm_bdr' id="orders-messages">
        <div class="alert alert-dismissible alert-primary">
          Listing the latest returned orders
        </div>	
        <div id="showError">	
        <?php
          if(isset($_SESSION['message']['orders-messages'])){
            echo'<div class="alert alert-dismissible alert-success">'.$_SESSION['message']['orders-messages'].'</div>';
          }
        ?>
        </div>
		<div class="row">			
			<div class="col-md-6">				
			</div>
			<div class="col-md-4">
				<ul class="nav nav-pills pull-right" style="margin-top:16px;">
					<li class="dropdown">
					  <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-raised btn-sm">COLUMN VISIBILITY <b class="caret"></b></a>
					  <ul class="dropdown-menu" id="menu1" style="padding:5px;">
						<li><a href="#" class="column_visibility" id="1">Date</a></li>	
						<li><a href="#" class="column_visibility" id="2">Order ID</a></li>	
						<li><a href="#" class="column_visibility" id="3">R.O. ID</a></li>	
						<li><a href="#" class="column_visibility" id="4">Refund</a></li>							
						<li><a href="#" class="column_visibility" id="5">Carrier</a></li>
						<li><a href="#" class="column_visibility" id="6">Status</a></li>	
						<li><a href="#" class="column_visibility dd_selected" id="7">Tracking Code</a></li>						
					  </ul>
					</li>
				</ul>	
			</div>
			<div class="col-md-2 pull-right">
				<button id="export" data-export="export" class='btn btn-raised btn-sm' style="margin-top: 26px;z-index:10;">Export as CSV</button>
			</div>
			
		
		</div>
		<div class="row">
			<input type="hidden" name="hdn_customer_id_ord" id="hdn_customer_id_ord" value="sdsdsd" />
			<div id="showError">			
			</div>
			<table data-toggle="table" id="orders_data">		
          <thead>		  
            <tr>
              <th>
                <div class='form-group'>
                  <input type='text' id="ReturnsOrderCreationDate" name="ReturnsOrderCreationDate" class='datepicker form-control' placeholder="From" style="font-size:0.9em !important;" />
                  <input type='text' id="ReturnsOrderToDate" name="ReturnsOrderToDate" class='datepicker form-control' placeholder="To" style="font-size:0.9em !important;" />  
                </div>
              </th>
              <th style="width:10% !important;">
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Order-id</label>
                  <input name='OrderID' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Return order-id</label>
                  <input name='ReturnId' type="text" class="form-control" id="i5" />
                  <span class="help-block"></span>
                </div>
              </th>
              <th>

              </th>
             
              <th>
                <div class="form-group label-floating">
                  <!--<label for="i5" class="control-label">Carrier</label>
                  <input name='CarrierName' type="text" class="form-control" id="i5">-->
                  <span class="help-block"></span>
				  <select name="CarrierName" class="form-control filter_dd" id="filter_carrier">
						<option value="">Carrier</option>						
				  </select>
                </div>
              </th>
              <th>
                <div class="form-group label-floating">
                  <!--<label for="i5" class="control-label">Status</label>
                  <input name='StatusName' type="text" class="form-control" id="i5">-->
                  <span class="help-block"></span>
				  <select name="StatusName" class="form-control filter_dd" id="filter_ordstatus">
						<option value="">Status</option>						
				  </select>
                </div>
              </th>
			  <th class="trackingcode_td" style="width:100px;display:none;"></th>
              <th>
                <button type="button" id="search-button" class='btn btn-success btn-raised btn-sm'>
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
              <th>Return Order ID</th>             
              <th>Refund</th>
              <th>Carrier</th>
              <th>Status</th>
			  <th class="trackingcode_td" style="width:100px;display:none;">Tracking Code</th>
              <th>Action</th>
            </tr>
			</thead>
          <tbody id="example">
            
          </tbody>
        </table>
		</div>
        
	
				
        <div class="row">
          <div class="col-md-12">
          <div class="col-md-6 pull-left" id="total_records" style="margin-top:37px !important;"><b>Total Records#:<span><span></b>
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
						<b>Customer Email:</b> <br><br>
						<b>Customer Phone:</b> <br><br>
						<b>Comment:</b><br>
						No comment has been made yet<br><br>
						<b>Items returned (1):</b><hr>
						<b>Item name:</b> <br>
						<b>Product SKU:</b> <br>
						<b>Product info:</b> <br>
						<b>Return reason:</b> <br>
						<b>Quantity:</b> <br> 
						<b>Price:</b> <hr>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="export_orders_div" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">		
		<table  id="export_orders_data" cellspacing="0">
			<thead>
				<tr>
				  <th>Date</th>
				  <th>Order ID</th>
				  <th>R.O. ID</th>							  
				  <th>Refund</th>				  
				  <th>Carrier</th>
				  <th>Status</th>
				  <th>Tracking Code</th>				  
				</tr>				
			 </thead>
			<tbody></tbody>
		</table>				
	</div>		
	<script type="text/javascript" language="javascript" class="init">
	
// function colShowHide() {

// $('#dt-button-collection > a:last').css('color', 'red');
// 	$('#orders_data').DataTable( {
// 		dom: 'B',
// 		'columnDefs': [
//         { targets: 6, visible: false }
//     ],
// 		"bPaginate": false,
// 		bFilter: false, 
// 		bInfo: false,
		
// 		buttons: [
// 			{
//             extend: 'colvis',
			
//            columns: ':lt(7)'
// 			//columns: [ 0, 1, 2, 5 ]
//         }
			
// 		]
// 	} );
// }

//setTimeout(colShowHide, 2000);
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
	top:2px;
	left:-90px;
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
	
	xtop:-36px;
	left:-48px
	}
}	
@media screen and (max-device-width: 1280px) {
div.dt-buttons
	{
	
	left:18px
	}
}	
@media screen and (max-device-width: 1920px) {
div.dt-buttons
	{
	
	}
}		
	</style>
