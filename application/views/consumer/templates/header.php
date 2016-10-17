<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!--JQuery-->
    <script type="text/javascript" src="/vendor/jquery/jquery-2.2.4.min.js"></script>
    
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!--Bootstrap material-->
    <link rel="stylesheet" href="/vendor/bootstrap-material/css/bootstrap-material-design.min.css" type="text/css" />
    <link rel="stylesheet" href="/vendor/bootstrap-material/css/ripples.min.css" type="text/css" />
    <script type="text/javascript" src="/vendor/bootstrap-material/js/material.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap-material/js/ripples.min.js"></script>
    
    <!--React JS-->
    <script src="http://fb.me/react-0.10.0.min.js"></script>
    
    <!-- Bootstrap table-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    
    <!--PHP to JS vars-->
    <?php echo'
    <script>
      var customerId='.$Customerid.';
      var language="'.$LanguageName.'";
    </script>';
    ?>

    <!--My assets-->
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <script type="text/javascript" src="/js/script.js"></script>
    
    
    
  </head>
  <body id='override'>
    <div class="bm-h">
      <img src="/img/logo.png">
    </div>
    <div class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p class="navbar-brand" style='margin-bottom: 0; font-weight: 400;'><?php echo strtoupper($translations[12]['Translation']);?></p>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><img src='/img/<?php echo $LanguageName;?>.png' class='bm-lang-img'> &nbsp;&nbsp;&nbsp;<?php echo $translations[24]['Translation'];?>&nbsp;&nbsp;
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
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
                <li><center><img src='/img/bm-spacer.jpg' class='img-responsive'></center></li>
              </ul>
            </li>
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li><a href="javascript:void(0)">Home</a></li>
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li><a href="javascript:void(0)">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class='bm-spacer'>
      
    </div>
    <div class='loading-screen'>
      <div style='height: 40vh'></div>
      <center><img src='/img/loading-pink.gif' style='height: 10vh'>
      <br>
      <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $translations[23]['Translation']?>...</p>
      </center>
    </div>
