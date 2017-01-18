<?php if($this->uri->segment(2) == 'carriers' || $this->uri->segment(2) == 'edit_carrier'){	
?>
<script src="<?php echo base_url();?>vendor/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>vendor/chosen/prism.js" type="text/javascript" charset="utf-8"></script>
  <!--<script src="<?php echo base_url();?>vendor/chosen/init.js" type="text/javascript" charset="utf-8"></script>-->
  <script type="text/javascript">	
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"100%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
	
  </script>
<?php }?>  
		</div>
	</div>
  </body>
</html>