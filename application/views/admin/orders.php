
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;' id="orders-messages">
        <div class="alert alert-dismissible alert-primary">
          Listing the latest 20 returned orders
        </div>
        <?php
          if(isset($_SESSION['message']['orders-messages'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['orders-messages'].'
            </div>';
          }
        ?>
        <table data-toggle="table">
          <thead>
            <tr>
              <th>
                <div class='form-group'>
                  <!--<input type='text' name="ReturnOrderDate" class='datepicker form-control' placeholder="dd-mm-yyyy">-->
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
                  <input name='ReturnId' type="text" class="form-control" id="i5">
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
                  <input name='StatusName' type="text" class="form-control" id="i5">
                  <span class="help-block"></span>
                </div>
              </th>
              <th>
                <button class='btn btn-success btn-raised' id='search-button'>
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
        
      </div>
    </div>
  </div>
</div>