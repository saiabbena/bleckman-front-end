<!DOCTYPE html>
<html lang="en">
  <head>	
	<?php echo'
    <script>
      var customerId='.$_SESSION['Customerid'].';
	  var apoyarToken="'.$_SESSION['Apoyar'].'";
      var language="English";
      var API_BASE_URL_FE="'.API_BASE_URL_FE.'";
    </script>';
    ?>	
    <!--Meta tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!--JQuery-->
    <script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-2.2.4.min.js"></script>
    
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!--Bootstrap material-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-material/css/bootstrap-material-design.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-material/css/ripples.min.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap-material/js/material.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap-material/js/ripples.min.js"></script>
	
	<!-- Bootstrap table-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>    
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    
    <!--Color picker-->
    <script src='http://bgrins.github.io/spectrum/spectrum.js'></script>
    <link rel="stylesheet" type="text/css" href="http://bgrins.github.io/spectrum/spectrum.css">

    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/scriptadmin3.js"></script>
    
	<?php if($this->uri->segment(2) == 'orders'){?>
	<!--For Orders page only-->	
	
	<!--Datepicker for order statistics page-->
	<!---->
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>	
	<script type="text/javascript">
	$(document).ready(function(){
		$( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd-mm-yy"
		});		
	});
	</script>	
	<script type="text/javascript" src="<?php echo base_url();?>js/scriptadmin.js"></script>
	<?php }
	if($this->uri->segment(2) == 'appearance'){
	?>
	<!--Dropify image upload material-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/dropify.css">
	<script src="<?php echo base_url(); ?>js/dropify.min.js"></script>	
	<?php }
	if($this->uri->segment(2) == 'settings'){
	?>
	<script type="text/javascript" src="<?php echo base_url();?>js/scriptsettings.js"></script>
	<?php }?>
	
	<?php
	if($this->uri->segment(2) == 'ro_option'){
	?>
	<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
	<?php }?>
	
  </head>
  <body id='override'>
    <div class="bm-h">
      <img src="<?php echo base_url();?>img/logo.png">
    </div>
    
    <div class='bm-spacer'>
      
    </div>
    
    <div class='loading-screen'>
      <div style='height: 40vh'></div>
      <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
      <br>
      <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
      </center>
    </div>
	<!--Added Admin Global Menu -->
<div class='container-fluid form1'>
  <div class='row'>
    <div class='col-xs-12 col-md-3' height='100%'>
      <div class='well' style="border-bottom: 15px solid #22B8AA; padding-bottom: 40px;">
        <div class='row'>
          <div class='col-md-12 text-center' >
            <h3><b><?php echo(strtoupper($_SESSION['Customername']))?></b></h3><br>
          </div>
          <a href='orders'>
          <div  <?php if($this->uri->segment(2) == 'orders'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-1.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Returns</span>
          </div>
          </a>
          <a href='appearance'>
          <div  <?php if($this->uri->segment(2) == 'appearance'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-2.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Appearance</span>
          </div>
          </a>
          <a href='settings'>
            <div  <?php if($this->uri->segment(2) == 'settings'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-3.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Settings</span>
            </div>
          </a>		      
		  <a href='ro_option'>
          <div  <?php if($this->uri->segment(2) == 'ro_option'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-17.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Return Order Option</span>
          </div>
          </a>
		  <!--<a href='operation_mode'>
          <div  <?php if($this->uri->segment(2) == 'operation_mode'){?>style='background-color: #009688; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-18.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Operation Mode</span>
          </div>
          </a>-->

		  <!--
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-4.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Integration</span>
          </div>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-5.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Other</span>
          </div>-->
        </div>
        <br><br>
        <a class='btn btn-warning btn-raised btn-block' href='<?php echo base_url();?>index.php/Login/logout'><span class='glyphicon glyphicon-log-out'></span> LOGOUT</a>
      </div>
	  <?php 
	  //This portion is only for orders page
	  if($this->uri->segment(2) == 'orders'){?>
	  <br><br>

      <div class='well hidden-xs hidden-sm' style="border-bottom: 15px solid #22B8AA; padding-bottom: 40px;" >
        <div class='col-md-12 text-center' >
          <h3><b>STATISTICS</b></h3><br>
        </div>
        <table data-toggle="table">
          <thead>
            <tr>
              <th>
                <b>From</b>
                <div class="form-group">
                  <input id="stat-from" type='text' class='datepicker form-control' placeholder="dd-mm-yyyy" />
                </div>
              </th>
              <th>
                <b>To</b>
                <div class="form-group">
                  <input id="stat-to" type='text' class='datepicker form-control' placeholder="dd-mm-yyyy" />
                </div>
              </th>
              <th>                
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <b>Returns:</b>
              </td>
              <td>
                N/A
              </td>
              <td>
              </td>
            </tr>
            <tr>
              <td>
                <b>Return Amount:</b>
              </td>
              <td>
                N/A
              </td>
              <td>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <button class='btn btn-primary btn-block btn-raised'>UPDATE</button>
      </div>	  
	  <?php }?>
    </div>	
