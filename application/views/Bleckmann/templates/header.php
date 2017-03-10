<!DOCTYPE html>
<html lang="en">
  <head>
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

    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
  	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">	
	  <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>	
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <?php
		$url_list  = array('dev.bleckmann.apoyar.eu','uat.bleckmann.apoyar.eu','returns.bleckmann.com');		
		if(in_array(strtolower($_SERVER['HTTP_HOST']), $url_list)){
			$apoyarurl = strtolower($_SERVER['HTTP_HOST']);
		}else{
			$apoyarurl = 'dev.bleckmann.apoyar.eu';			
		}
	?>
	<script type="text/javascript">
      // $.material.init();
      // $.material.checkbox();
      //console.log("loaded");
      <?php echo 'var API_BASE_URL_FE="'.API_BASE_URL_FE.'";';?>
      <?php echo 'var apoyarToken="'.$_SESSION['Apoyar'].'";';?>
	  <?php echo 'var ApoyarUrlHdr="'.$apoyarurl.'";';?>
      <?php echo 'var baseurl="'. base_url() .'";';?>
      <?php echo 'var customerId="";';?>
      <?php echo 'var allLanguages=[];';?>

    </script>
    <script type="text/javascript" src="<?php echo base_url();?>js/scriptBleckmann.js"></script>
	<?php
	//Put condition to use data table plugin in Orders page
	if($this->uri->segment(2) == 'orders'){
	?>	
	<!--Datepicker for order statistics page-->
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
	<script type="text/javascript" src="<?php echo base_url();?>vendor/pagination/jquery.simplePagination.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendor/pagination/simplePagination.css"/>	
	
	<script>
    $(function() {       
	   $('.column_visibility').click(function() {
		    var column_id =  $(this).attr("id");
			//alert(column_id);
            $('#orders_data th:nth-child('+column_id+')').toggle('slow');
			$('#orders_data td:nth-child('+column_id+')').toggle('slow');
			$(this).toggleClass("dd_selected");
       });
    });
	</script>
	<style>
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
		
		.dropdown-menu>li>a{padding-left:30px;
		  background-image: url("<?php echo base_url().'img/tick.png'?>");		  
		  background-repeat: no-repeat;
		  background-position: center left;}	
		
		.dropdown-menu>li>a:hover{background-color:#CCC !important;			
			background-repeat: no-repeat;
			background-position: center left;
		}		
		.dd_selected{background-color:#CCC !important;
		  background-image: url("<?php echo base_url().'img/untick.png'?>") !important;		  
		  background-repeat: no-repeat;
		  background-position: center left;}
		  
		  .dd_unselected{background:transparent !important;}
		</style>
	<?php }
	//warehouses
	if($this->uri->segment(2) == 'warehouses' || $this->uri->segment(2) == 'users'){
	?>
	<!--<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatable/bootstrap.min_2.css">-->
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/datatable/dataTables.bootstrap.min.css">
	<script src="<?php echo base_url();?>vendor/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>vendor/datatable/dataTables.bootstrap.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('#wh_data').DataTable({				 
			 "ordering": false,
			"pagingType": "numbers",
			});
		$('#user_datatable').DataTable({				 
			 "ordering": false,
			"pagingType": "numbers",
		});
	});
	</script>
	<?php 
	}
	if($this->uri->segment(2) == 'carriers' || $this->uri->segment(2) == 'edit_carrier'){	
	?>	
	<!--<link rel="stylesheet" href="<?php echo base_url();?>vendor/chosen/style.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/chosen/prism.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/chosen/chosen.css">	
	<?php }?>
	<script src="<?php echo base_url();?>vendor/jqueryCSV/jquery.tabletoCSV.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-64703754-4', 'auto');
		ga('send', 'pageview');
	</script>	
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
    <?php if($this->uri->segment(2) != 'documentation'){ ?>
      <div class='well' style="border-bottom: 15px solid #7C6062; padding-bottom: 40px;">
        <div class='row'>
          <div class='col-md-12 text-center' >
            <h3><b><?php echo(strtoupper($_SESSION['Customername']))?></b></h3><br>
          </div>
          <a href='<?php echo base_url()?>index.php/Bleckmann/customers'>

          <div  <?php if($this->uri->segment(2) == 'customers'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-8.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Customers</span>
          </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/carriers'>
            <div  <?php if($this->uri->segment(2) == 'carriers'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-18.png' class='menu-icon' height='20px'><span class='hidden-xs hidden-sm'>  Carriers</span>
            </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/warehouses'>
            <div  <?php if($this->uri->segment(2) == 'warehouses'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-13.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Warehouses</span>
            </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/users'>
          <div  <?php if($this->uri->segment(2) == 'users'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-7.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Users</span>
          </div>
          </a><!--
		  <a href='<?php echo base_url()?>index.php/Bleckmann/carriers'>
          <div  <?php if($this->uri->segment(2) == 'carriers'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-6.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Carriers</span>
          </div>           
          </a>-->          
          <a href='<?php echo base_url()?>index.php/Bleckmann/roles'>
            <div  <?php if($this->uri->segment(2) == 'roles'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-14.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Roles</span>
            </div>
          </a>
          <a href='<?php echo base_url()?>index.php/Bleckmann/languages'>
            <div  <?php if($this->uri->segment(2) == 'languages'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-15.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Languages</span>
            </div>
          </a>
		  <a href='<?php echo base_url()?>index.php/Bleckmann/keywords'>
            <div  <?php if($this->uri->segment(2) == 'keywords'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-19.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Keywords</span>
            </div>
          </a>
		      <a href='<?php echo base_url()?>index.php/Bleckmann/orders'>
            <div  <?php if($this->uri->segment(2) == 'orders'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/i-16.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Return Orders</span>
            </div>
          </a>
          <a target="_blank" href='<?php echo base_url()?>index.php/Bleckmann/documentation'>
            <div  <?php if($this->uri->segment(2) == 'documentation'){?>style='background-color: #7C6062; color: #fff;'<?php }?> class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
              <div class='hidden-lg hidden-md'></div>
              <img src='<?php echo base_url();?>img/1486478507_12.File.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Documentation</span>
            </div>
          </a>
        </div>
        <br><br>
        <a class='btn btn-warning btn-raised btn-block' href='<?php echo base_url();?>index.php/Login/logout'><span class='glyphicon glyphicon-log-out'></span> LOGOUT</a>
      </div>
      <?php } ?>
    </div>	
