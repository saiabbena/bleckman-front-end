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
				<!--<ul class="nav nav-pills pull-right" style="margin-top:16px;">
					<li class="dropdown">
					  <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-raised btn-sm">COLUMN VISIBILITY <b class="caret"></b></a>
					  <ul class="dropdown-menu" id="menu1">
						<li><a href="#" class="column_visibility" id="1">Date</a></li>	
						<li><a href="#" class="column_visibility" id="2">Order ID</a></li>	
						<li><a href="#" class="column_visibility" id="3">R.O. ID</a></li>	
						<li><a href="#" class="column_visibility" id="4">Refund</a></li>	
						<li><a href="#" class="column_visibility" id="5">Customer</a></li>	
						<li><a href="#" class="column_visibility" id="6">Carrier</a></li>
						<li><a href="#" class="column_visibility" id="7">Status</a></li>	
						<li><a href="#" class="column_visibility" id="8">Tracking Code</a></li>						
					  </ul>
					</li>
				</ul>-->	
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
				   <th style="width:100px;display:none;" class="trackingcode_td"></th>
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
				   <th style="width:100px;display:none;" class="trackingcode_td">Tracking Code</th>
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
<!--<style>
Table.GridOne {
	padding: 3px;
	margin: 0;
	background: lightyellow;
	border-collapse: collapse;	
	width:45%;
}

Table.GridOne Td {	
	padding:2px;
	border: 1px solid #ff9900;
	border-collapse: collapse;
}
.dropdown-menu .sub-menu {
    left: 100%;
    position: absolute;
    top: 0;
    visibility: hidden;
    margin-top: -1px;
}

.dropdown-menu li:hover .sub-menu {
    visibility: visible;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu {
    margin-top: 0;
}

.navbar .sub-menu:before {
    border-bottom: 7px solid transparent;
    border-left: none;
    border-right: 7px solid rgba(0, 0, 0, 0.2);
    border-top: 7px solid transparent;
    left: -7px;
    top: 10px;
}
.navbar .sub-menu:after {
    border-top: 6px solid transparent;
    border-left: none;
    border-right: 6px solid #fff;
    border-bottom: 6px solid transparent;
    left: 10px;
    top: 11px;
    left: -6px;
}
</style>

<script>
    $(function() {       
	   $('.column_visibility').click(function() {
		    var column_id =  $(this).attr("id");
			//alert(column_id);
            $('th:nth-child('+column_id+')').toggle('slow');
			$('td:nth-child('+column_id+')').toggle('slow');                
       });
    });
</script>-->

	
