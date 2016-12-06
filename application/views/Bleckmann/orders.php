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
			<table id="order_search" style="border-spacing: 20px !important;border-collapse: separate !important;" >		
			  <thead>		  
				<tr>
				  <th>
					<div class='form-group'>
					  <input type='text' id="ReturnsOrderCreationDate" name="ReturnsOrderCreationDate" class='datepicker form-control' placeholder="dd-mm-yyyy" 
					  style="font-size:0.9em !important;" />				  			  
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

				  </th>
				  <th>
					<div class="form-group label-floating">
					  <label for="i5" class="control-label">Carrier</label>
					  <input name='CarrierName' type="text" class="form-control" id="i5">
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th>
					<div class="form-group label-floating">
					  <label for="i5" class="control-label">Status</label>
					  <input name='StatusName' type="text" class="form-control" id="i5">
					  <span class="help-block"></span>
					</div>
				  </th>
				  <th>
					<button type="button" id="order_search_btn" class='btn btn-success btn-raised'>
					  SEARCH
					</button>
					<button class='btn btn-success btn-raised' id='btn_clear' onclick="javascript:window.location.reload()">
					  CLEAR
					</button>
				  </th>
				</tr>				
			  </thead>			  
			</table>
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
				  <th class="nosort">Date</th>
				  <th>Order ID</th>
				  <th>Return Order ID</th>
				  <th class="nosort">Tracking</th>
				  <th>Refund</th>
				  <th>Customer</th>
				  <th>Carrier</th>
				  <th>Status</th>
				  <th class="nosort">Action</th>
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