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
    
    <!--React JS-->
    
    <!-- Bootstrap table-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <!--PHP to JS vars-->
    <?php echo'
    <script>
      var customerId='.$Customerid.';
      var language="'.$LanguageName.'";
      var API_BASE_URL_FE="'.API_BASE_URL_FE.'";
      var UserId="";
      var languagesVar='.json_encode($all_translations).';
      var languageId='.$languageId.';
      var pageHeadings='.json_encode($all_langs).';
    </script>';
    ?>

    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/script-language-change.js"></script>
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
    <div class="bm-h" <?php echo $hdr_bg_style?>>
      <img style='height: 70px;' src="<?php echo $logo?>?dummy=<?php echo strtotime("now")?>">
    </div>
    <div class="navbar navbar-inverse" <?php echo ($menu_bg_style != '')?$menu_bg_style:'';?>">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p class="navbar-brand" style='margin-bottom: 0; font-weight: 400;'>
          <span class='tran-12'>
          <?php echo (isset($translations[12]['Translation'])?strtoupper($translations[12]['Translation']):'');?>
          </span>
          </p>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
		<style scoped>
			.navbar-nav > li >a{color:<?php echo $menu_font;?>}
			.dropdown.open > ul > li > a{color:<?php echo $dd_font;?>}			
			.dropdown.open > ul > li:hover{color:<?php echo $dd_font;?>}
			
			.dropdown.open > ul > li a:hover{
			  background-color: <?php echo ($accent_2 != '')?$accent_2:'#aa0321';?> !important;
			}
			.dropdown.open > ul > li a::focus{
			  background-color: <?php echo ($accent_2 != '')?$accent_2:'#aa0321';?> !important;
			}
			.hover_bg{background-color: <?php echo ($accent_2 != '')?$accent_2:'#aa0321';?> !important;}
		</style>
          <ul class="nav navbar-nav navbar-right tran-links">
		    <li>&nbsp;&nbsp;&nbsp;</li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class='tran-24'>
              <?php echo (isset($translations[24]['Translation'])?$translations[24]['Translation']:'');?>
              </span>
			  <?php //echo $translations[24]['Translation'];?>&nbsp;&nbsp;
                <b class="caret"></b></a>
              <ul class="dropdown-menu" <?php echo $dd_bg_style?>>
                <?php
                  foreach ($all_langs as $key => $value) {
                    $url_lang_string=['Lang'=>'', 'Customer'=>''];
                    $url_lang_string['Lang']=$value['LanguageName'];
                    $url_lang_string['Customer']=$Customerid;
                    $url_lang_string=http_build_query($url_lang_string);
                    if($LanguageName==$value['LanguageName']){
                      echo '<li onclick="changeLang('.$value['FkLanguageid'].')" class="'.$value['FkLanguageid'].'-change"><a class="tranLangLink hover_bg" href="#">'.$value['LanguageName'].'</a></li>';
                    }
                    else{
                      echo '<li onclick="changeLang('.$value['FkLanguageid'].')" class="'.$value['FkLanguageid'].'-change"><a class="tranLangLink" href="#">'.$value['LanguageName'].'</a></li>';
                    }
                  }
                ?>
                <li><center><img src="<?php echo $spacer?>?dummy=<?php echo mt_rand()?>" class='img-responsive'></center></li>
              </ul>
            </li>
            
            <?php
              
              if ( count($Links) > 0 ) {
                $newLinks = json_decode($Links);
                foreach ($newLinks as $k => $v) {
                  echo '<li class="tLink">&nbsp;&nbsp;&nbsp;</li>
                  <li class="tLink"><a href="'.$v.'">' . $k . '</a></li>';
                }
              }
            ?>
            
			<!--<li>&nbsp;&nbsp;&nbsp;</li>
            <li><a href="javascript:void(0)">Home</a></li>
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li><a href="javascript:void(0)">Support</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class='bm-spacer'>
      
    </div>
    <div class='loading-screen'>
      <div style='height: 40vh'></div>
      <center><img src="<?php echo ($loading != '' ? $loading : base_url().'/img/loading-pink.gif')?>" style='height: 10vh'>
      <br>
      <p style="color: <?php echo ($accent_2 != '')?$accent_2:'#CC1543';?>;">&nbsp;&nbsp;&nbsp;&nbsp;
      <span class='tran-23'>
      <?php echo (isset($translations[23]['Translation'])?$translations[23]['Translation']:'');?>
      </span>
	  <?php //echo $translations[23]['Translation']?>...</p>
      </center>
    </div>
