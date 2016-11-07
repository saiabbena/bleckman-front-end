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
    
    <!--PHP to JS vars-->
    <?php echo'
    <script>
      var customerId='.$Customerid.';
      var language="'.$LanguageName.'";
      var API_BASE_URL_FE="'.API_BASE_URL_FE.'";
    </script>';
    ?>

    <!--My assets-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>    
  </head>
  <body id='override'>
    <div class="bm-h" <?php echo $hdr_bg_style?>>
      <img style='height: 70px;' src="<?php echo ($logo != '')?$logo:'/img/logo.png'?>?dummy=<?php echo mt_rand()?>">
    </div>
    <div class="navbar navbar-inverse" <?php echo ($menu_bg_style != '')?$menu_bg_style:'';?>">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p class="navbar-brand" style='margin-bottom: 0; font-weight: 400;'><?php echo (isset($translations[12]['Translation'])?strtoupper($translations[12]['Translation']):'');?></p>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
		<style scoped>
			.navbar-nav > li >a{color:<?php echo $menu_font;?>}
			.dropdown.open > ul > li > a{color:<?php echo $dd_font;?>}
		</style>
          <ul class="nav navbar-nav navbar-right">
		    <li>&nbsp;&nbsp;&nbsp;</li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><img src='<?php echo base_url();?>/img/<?php echo $LanguageName;?>.png' class='bm-lang-img'> &nbsp;&nbsp;&nbsp;<?php echo (isset($translations[24]['Translation'])?$translations[24]['Translation']:'');?>
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
                      echo '<li><a href="?'.$url_lang_string.'"><b>&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;'.strtoupper($value['LanguageName']).'</b></a></li>';
                    }
                    else{
                      echo '<li><a href="?'.$url_lang_string.'">'.$value['LanguageName'].'</a></li>';
                    }
                  }
                ?>
                <li><center><img src="<?php echo $spacer?>?dummy=<?php echo mt_rand()?>" class='img-responsive'></center></li>
              </ul>
            </li>

            <?php
              #echo "Links : " . $Links;
              $newLinks = json_decode($Links);
              foreach ($newLinks as $k => $v) {
                echo '<li>&nbsp;&nbsp;&nbsp;</li>
            <li><a href="'.$v.'">' . $k . '</a></li>';
              }
            ?>
<!--             <li>&nbsp;&nbsp;&nbsp;</li>
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
      <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (isset($translations[23]['Translation'])?$translations[23]['Translation']:'');?>
	  <?php //echo $translations[23]['Translation']?>...</p>
      </center>
    </div>
