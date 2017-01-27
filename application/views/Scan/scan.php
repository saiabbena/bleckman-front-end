<!--I just added some commented text for testing-->
  <div class='container-fluid form1'>
    <div class='row'>
      <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1'>
        <!--spacer div-->
        <div style='height: 15vh'>
            
        </div>
        <div class='well bm-well '>
            <h2><center>Bleckmann Carriers List<br><br></center></h2>
            <p class='text-center'></p>
            <div class="inputs" style="min-height:500px !important; ">
              <?php  //print_r($carriers);
			  foreach($carriers as $carrierDtls){				  
				 echo '<a href="#" style="font-size:20px;color:#FFF !important;font-weight:bold;"><div class="col-md-3 entry" height="100%" style="margin:5px;"><div class="well" style="background-color:#7C6062;padding:20px;">'.
				 strtoupper($carrierDtls['CarrierName']).'</div></div></a>';	
				 				  
			  }
			  ?>
            </div>
        </div>
      </div>
    </div>
  </div>