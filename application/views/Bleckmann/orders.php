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
				  <th class="nosort">Date</th>
				  <th>Order ID</th>
				  <th>Return Order ID</th>
				  <th class="nosort">Tracking</th>
				  <th>Refund</th>
				  <th>Carrier</th>
				  <th>Status</th>
				  <th class="nosort">Action</th>
				</tr>
			  </thead>
			  <tbody></tbody>
			</table>
			
		</div>        
      </div>	  	  
    </div>
  </div>
</div>
