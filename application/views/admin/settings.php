<div class='container-fluid form1'>
  <div class='row'>
    <div class='col-xs-12 col-md-3' height='100%'>
      <div class='well' style='border-bottom: 15px solid #22b8aa; padding-bottom: 40px;'>
        <div class='row'>
          <div class='col-md-12 text-center' >
            <h3><b>TRUE RELIGION</b></h3><br>
          </div>
          <a href='orders'>
          <div class='col-md-offset-0 col-md-12 col-xs-2 col-xs-offset-1 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-1.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Returns</span>
          </div>
          </a>
          <a href='appearance'>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-2.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Appearance</span>
          </div>
          </a>
          <a href='settings'>
          <div style='background-color: #009688; color: #fff;' class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-3.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Settings</span>
          </div>
          </a>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-4.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Integration</span>
          </div>
          <div class='col-md-offset-0 col-md-12 col-xs-2 text-left bm-nav-center'>
            <div class='hidden-lg hidden-md'></div>
            <img src='<?php echo base_url();?>img/i-5.png' class='menu-icon' height='20px'> <span class='hidden-xs hidden-sm'>Other</span>
          </div>
        </div>
      </div>
    </div>
      
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well' id='rr-panel' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;'>
        <?php
          if(isset($_SESSION['message']['rr'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['rr'].'
            </div>';
          }
        ?>       
        
        <form method="POST" action="submitReturnReasons">
        <!--<form method="POST" action="debug">-->
        <h3>Edit return reasons 
		<input name="ReturnReasons" class="ReturnReasons" value="1" type="hidden">
        <button type="button" data-toggle="modal" data-target="#myModal" id='add-return' class='btn btn-raised btn-warning pull-right'>Add</button>       
        <button class='btn btn-raised btn-success pull-right save-reasons' type="submit">Save</button>
        </h3>
		
        <br>
        <div class="hidden">marker2</div>
        <br>        

        <?php
        $counter=0;
        foreach ($returnReasons as $key=>$value){
			$reason_div = 'reason_div'.$counter;
			$hdnval = 'hdnval'.$counter;
			echo '<div id="'.$reason_div.'" style="border: 1px solid #ddd; padding: 20px;"">';
			if($counter!=0){
				echo '<span class="order-btn"><span class="rr-counter"> ('.($counter+1).') </span><button type="button" class="btn btn-warning move-up-btn">Move Up <span class="glyphicon glyphicon-arrow-up"></span></button></span>';
			}else{
				echo '<span class="order-btn"><span class="rr-counter"> ('.($counter+1).') </span></span>';
			}
			foreach ($value as $rkey=>$rvalue) {
				if(($rkey+1)<=count($customerLanguages)){
					foreach ($rvalue as $rrkey=>$rrvalue){
						if($rrkey!='Reason'){
							echo ' <input type="hidden" class="'.$rrkey.'" name="ReturnReasons['.$key.']['.$rkey.']['.$rrkey.']" value="'.$rrvalue.'">';
						}
						else{
							echo' <div class="form-group label-floating ">
							<label for="i5" class="control-label">'.$rvalue['LanguageName'].'</label>
							<input id="search-admin" type="text" name="ReturnReasons['.$key.']['.$rkey.']['.$rrkey.']" class="form-control reason_text" id="i5" value="'.$rrvalue.'">
                  <span class="help-block">Edit the reason</code></span>
                  </div>';
                }
              }
            }
          }
          if(count($customerLanguages)>count($value)){
            for($i=0; $i<(count($customerLanguages)-count($value)); $i++){
              echo '
              <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][PKReasonID]" value="-1">';
              echo '
              <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][FKCustomerID]" value="'.$_SESSION['Customerid'].'">';
              echo '
              <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][IsActive]" value="true">';
              echo '
              <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][FkLanguageid]" value="'.$customerLanguages[($rkey+$i+1)]['FkLanguageid'].'">';
              echo '
              <input type="hidden"  name="ReturnReasons['.$key.']['.($rkey+$i+1).'][Uid]" value="'.$returnReasons[$key][$rkey]['Uid'].'">';
              echo '
              <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][LanguageName]" value="'.$customerLanguages[($rkey+$i+1)]['LanguageName'].'">';                  
              
              echo'
              <div class="form-group label-floating">
              <label for="i5" class="control-label">'.$customerLanguages[($rkey+$i+1)]['LanguageName'].'</label>
              <input id="search-admin" type="text" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][Reason]" class="form-control" id="i5" value="new reason">
              <span class="help-block">Add a new reason</code></span>
              </div>';
            } 
          }
          if(count($returnReasons)>1){
            echo '<button type="button" data-toggle="modal" data-target="#del-return'.$rvalue['Uid'].'" class="btn btn-raised btn-danger btn-warning pull-right">Delete</button><br><br>';
          }
          echo '</div><br>';
          $counter++;
        }
        ?>

        </form>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="submitReturnReasons">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a return reason</h4>
              </div>
              <div class="modal-body">
                <?php
                /*$reason=[
                  "PKReasonID": -1,
                  "Reason": "Product Not Good English",
                  "FKCustomerID": $_SESSION['Customerid'],
                  "IsActive": true,
                  "FkLanguageid": $lang['FkLanguageid'],
                  "Uid": -1,
                  "LanguageName": $lang['LanguageName']
                ];*/
                $rkey=0;
                $key=0;
                foreach ($customerLanguages as $lang){
                  
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][PKReasonID]" value="-1">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][FKCustomerID]" value="'.$_SESSION['Customerid'].'">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][IsActive]" value="true">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][FkLanguageid]" value="'.$lang['FkLanguageid'].'">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][Uid]" value="">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][LanguageName]" value="'.$lang['LanguageName'].'">';                  
                  
                  echo'
                  <div class="form-group label-floating">
                  <label for="i5" class="control-label">'.$lang['LanguageName'].'</label>
                  <input id="search-admin" type="text" name="ReturnReasons['.$key.']['.$rkey.'][Reason]" class="form-control" id="i5" value="">
                  <span class="help-block">Add a new reason</code></span>
                  </div>';
                  $rkey=$rkey+1;
                  
                }
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">add</button>
              </div>
              </form>
            </div>
          </div>
        </div>



        <?php
          foreach ($returnReasons as $key=>$value){
            echo'
             <div class="modal fade" id="del-return'.$value[0]['Uid'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form method="POST" action="submitReturnReasons">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete reason?</h4>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete this return reason</p>
            ';
            foreach ($value as $rkey=>$rvalue) {
              foreach ($rvalue as $rrkey=>$rrvalue){
                if($rrkey=='IsActive'){
                  echo '
                    <input type="hidden" name="ReturnReasons[0]['.$rkey.']['.$rrkey.']" value="false">';
                }
                else{
                  echo '
                    <input type="hidden" name="ReturnReasons[0]['.$rkey.']['.$rrkey.']" value="'.$rrvalue.'">';
                }
              }
            }
            echo'
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            ';
          }
        ?>




        
      </div>
      <div class='well' id='language-panel' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;'>
        <?php
          if(isset($_SESSION['message']['languages'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['languages'].'
            </div>';
          }
        ?>
        <!--<form method="POST" action="http://ws.developer.bleckmann.apoyaretail.com/api/CustomerLanguage/GetCustomerLanguagebyId">-->
        <form method="POST" action="submitLanguages">
        
        <h3>Edit languages <button class='btn btn-raised btn-success pull-right save-reasons'>Save</button></h3>
        
        <br>
        
        <h4>Choose a default language</h4>
        
        <br>
        <div class='form-group'>
        <?php
          echo '<div class="row">';
          $templangsel=true;
          foreach ($customerLanguages as $key=>$val) {
            echo'
            <div class="col-xs-3">
              <div class="radio">
                <label>
                  <input type="radio" name="DefaultLanguage" value="'.$val['LanguageName'].'" '.($val['Isdefault']?'checked':'').'> '.$val['LanguageName'].'
                </label>
              </div>
            </div>';
            
            if($key==3){
              echo '</div><div class="row">';
            }

            if($val['Isdefault']){
              $templangsel = false;
            }
          }
          echo '</div>';
        ?>
        <?php
          if($templangsel){
            echo '
            <script>
            $(\'#language-panel > form > div.form-group > div input[type="radio"]\').attr({\'disabled\': true});
            $(\'#language-panel > form > div.form-group > div > div:nth-child(1) > div > label > input[type="radio"]\').attr(\'checked\', true);
            </script>';
          }
        ?>
        </div>
        <br><br>
        <div class='col-xs-12'>
          <div class="togglebutton">
            <label>
              <input type="checkbox" id='def-lang-ip' name='DefaultLanguage' value='none' <?php echo ($templangsel?'checked=""':'');?>>
              Set default language for consumer automatically (based on their IP address)
            </label>
          </div>
        </div>
        <br><br><br><br>
        <!--<table data-toggle="table">
          <thead>
            <tr>
              <th>
              </th>
              <th>
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class='text-center'>
                ENGLISH
              </td>
              <td>
                <div class="togglebutton text-center">
                  <label>
                    <input type="checkbox" checked="">
                  </label>
                </div>
              </td>
              <td>
                <div class="radio text-center">
                  <label>
                    <input type="radio" name="sample1" value="option1" checked=""> Default
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td class='text-center'>
                DUTCH
              </td>
              <td>
                <div class="togglebutton text-center">
                  <label>
                    <input type="checkbox" checked="">
                  </label>
                </div>
              </td>
              <td>
                <div class="radio text-center">
                  <label>
                    <input type="radio" name="sample1" value="option1" checked=""> Default
                  </label>
                </div>
              </td>
            </tr><tr>
              <td class='text-center'>
                FRENCH
              </td>
              <td>
                <div class="togglebutton text-center">
                  <label>
                    <input type="checkbox" checked="">
                  </label>
                </div>
              </td>
              <td>
                <div class="radio text-center">
                  <label>
                    <input type="radio" name="sample1" value="option1" checked=""> Default
                  </label>
                </div>
              </td>
            </tr>
          </tbody>
        </table>-->
        <h4>Edit Header Translations </h4><br>
        <div id='header-translations'>
          <?php
            $compiledLangs=[];
            for($i=0; $i<4; $i++){
              $compiledLangs[$i]=array();
              foreach ($customerLanguages as $key=>$val) {
                array_push($compiledLangs[$i], ['Value'=>$val['Page'.($i+1).'heading'], 'ArrayPos'=>[$key, 'Page'.($i+1).'heading']]);
                foreach ($val as $kkey => $vvalue) {
                  if($i==0){
                    if(strpos($kkey, 'heading')){

                    }
                    else{
                      echo '<input type="hidden" name="Languages['.$key.']['.$kkey.']" value="'.$vvalue.'">';
                    }
                  }
                }
              }
            }
          ?>
          <?php
            foreach($compiledLangs as $key=>$value){
              echo'<p>Screen '.($key+1).' headers</p>
              <div style="border: 1px solid #ddd; padding: 20px;">';
              foreach ($value as $kkey=>$vvalue) {
                echo '
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">'.$customerLanguages[$vvalue['ArrayPos'][0]]['LanguageName'].'</label>
                  <input id="search-admin" type="text" name="Languages['.$vvalue['ArrayPos'][0].']['.$vvalue['ArrayPos'][1].']" class="form-control" id="i5" value="'.$vvalue['Value'].'">
                  <span class="help-block">Edit the header</code></span>
                </div>';
              }

              echo '</div><br>';
            }
          ?>
        </div>
        </form>
      </div>




      <div class='well' style='border-bottom: 15px solid #E25176; padding-bottom: 40px;'>
        <div class="alert alert-dismissible alert-success success-message3">
          Saved!
        </div>
        <h3>Edit links <button id='add-return' class='btn btn-raised btn-warning pull-right'>Add</button><button class='btn btn-raised btn-success pull-right save-reasons'>Save</button></h3>
        <table data-toggle="table">
          <thead>
            <tr>
              <th>
                Link text
              </th>
              <th>
                Link location
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Link text</label>
                  <input id='search-admin' type="text" class="form-control" id="i5" value="Home">
                  <span class="help-block">Edit the link's text</code></span>
                </div>
              </td>
              <td>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Link location</label>
                  <input id='search-admin' type="text" class="form-control" id="i5" value="http://bleckmann.com">
                  <span class="help-block">Edit link target location</code></span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Link text</label>
                  <input id='search-admin' type="text" class="form-control" id="i5" value="Support">
                  <span class="help-block">Edit the link's text</code></span>
                </div>
              </td>
              <td>
                <div class="form-group label-floating">
                  <label for="i5" class="control-label">Link location</label>
                  <input id='search-admin' type="text" class="form-control" id="i5" value="http://bleckmann.com/support">
                  <span class="help-block">Edit link target location</code></span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>