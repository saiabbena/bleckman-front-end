	<div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;' id="orders-messages">
        <div class="alert alert-dismissible alert-primary">
          Listing the latest 20 returned orders
        </div>		
        <?php
          if(isset($_SESSION['message']['orders-messages'])){
            echo'<div class="alert alert-dismissible alert-success">'.$_SESSION['message']['orders-messages'].'</div>';
          }
        ?>
		
        <table data-toggle="table" id="orders_data">		
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
                <button type="button" id="search-button" class='btn btn-success btn-raised'>
                  SEARCH
                </button>
				<button class='btn btn-success btn-raised' id='btn_clear' onclick="javascript:window.location.reload()">
                  CLEAR
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
        <div class="row">
			<div id="btm_pagination" class="col-md-10 pull-right text-right"></div>
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
						<h4 class="modal-title" id="myModalLabel">Full info on return order: 2192942</h4>
					</div>
					<div class="modal-body">
						<b>Full date/time:</b> 2016-12-06T12:44:36, 
						<b>Orderid:</b> 410008881001,
						<b>Return status:</b>
						Label Printed<br><br>
						<b>Customer Email:</b> x@x.com<br><br>
						<b>Customer Phone:</b> <br><br>
						<b>Comment:</b><br>
						No comment has been made yet<br><br>
						<b>Items returned (1):</b><hr>
						<b>Item name:</b> undefined<br>
						<b>Product SKU:</b> MC748VE2-1001.L<br>
						<b>Product info:</b> undefined<br>
						<b>Return reason:</b> <br>
						<b>Quantity:</b> 1<br> 
						<b>Price:</b> 52.08 <hr>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>