<!--I just added some commented text for testing-->
  <div class='container-fluid form1'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
        <!--spacer div-->
        <div style='height: 15vh'>
            
        </div>
        <div class='well bm-well'>
            <h2><center>Bleckmann Customer Login<br><br></center></h2>
            <p class='text-center'></p>
            <div class="inputs">
              <form action="loginSubmit" method="POST">
                <div class="form-group label-floating">
                  <label for="f2" class="control-label">Username</label>
                  <input name='Username' type="text" class="form-control" id="f2">
                  <span class="help-block"></span>
                </div>
                <div class="form-group label-floating">
                  <label for="f1" class="control-label">Password</label>
                  <input type="password" name='Password' class="form-control" id="f1">
                  <span class="help-block"></span>
                </div>
                <br>
                <button type='submit' class='btn btn-raised btn-block btn-success btn-bm' id='button1'><span class='glyphicon glyphicon-lock'></span> LOGIN</button><br>
                <div class="alert alert-dismissible alert-danger" id='screen1-error'>
                  <strong></strong>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>