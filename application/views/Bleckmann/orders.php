	<div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
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
		</div>		
	<div class='row'>
		<input type="hidden" name="hdn_customer_id_ord" id="hdn_customer_id_ord" value="<?php echo $Customerid?>" />
        <?php
          if(isset($_SESSION['message']['carrier_panel'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['carrier_panel'].'
            </div>';
          }
        ?>
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
					<th></th>
					<th class="col-md-1"></th>				  
				    <th class="col-md-1">
					<div class="form-group label-floating">
					  <label for="i5" class="control-label">Carrier</label>
					  <input name='CarrierName' type="text" class="form-control" id="i5">
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th class="col-md-2"><br />
					<div class="form-group label-floating">
					  <label for="i5" class="control-label">Status</label>
					  <input name='StatusName' type="text" class="form-control" id="i5">
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th class="col-md-2" style="vertical-align:middle !important;">				 
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
				  <th class="nosort">Tracking</th>
				  <th>Refund</th>
				  <th>Customer</th>
				  <th>Carrier</th>
				  <th>Status</th>
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
			<div id="btm_pagination" class="col-md-10 pull-right text-right"></div>
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