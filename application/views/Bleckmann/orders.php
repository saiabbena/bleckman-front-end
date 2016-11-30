	<div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
        <h3>Manage Orders </h3>			
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
			<table data-toggle="table" id="orders_data">		
			  <thead><!--		  
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
					<button type="button" id="search-button" class='btn btn-success btn-raised'>
					  SEARCH
					</button>
					<button class='btn btn-success btn-raised' id='btn_clear' onclick="javascript:window.location.reload()">
					  CLEAR
					</button>
				  </th>
				</tr>-->
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
</div>
