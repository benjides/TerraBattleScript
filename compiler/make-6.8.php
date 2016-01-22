<?php
  $filename = $_GET['input-filename'].'.txt';
  header('Content-type: text/plain');
  header('Content-disposition: attachment; filename='.$filename.'');





  $width = 1080;
  $height = 1920;
  $stamina = $_GET['input-stamina'];
  $sleepstageselection = $_GET['input-sleep-selection']*1000;
  $sleepstage = $_GET['input-sleep-battle']*1000;
  $stagecleared = $_GET['input-sleep-cleared']*1000;

  $bulktime = 24350;

  $time = ($sleepstageselection + $stagecleared + $sleepstage*5 + 1000 + $bulktime)/1000 ;

  $action = "";
  if($_GET['response-radio'] == 1){
    foreach ($_GET['response'] as $case) {
      switch ($case) {
        case 0:
          $action .= "\tVibrate 5000\n";
          break;
        case 1:
          $action .= "\tBeep\n\tSleep 5000\n";
          break;
        case 2:
          $action .= "\tkeyDown K_HOME\n\tsleep 50\n\tkeyUp K_HOME \n";
          break;
        case 3:
          $action .= "\tkeyDown K_POWER\n\tsleep 50\n\tkeyUp K_POWER \n";
          break;
      }
    }
  }




  ob_start();
    include('../base/MTS-6.8.php');
  $script = ob_get_clean();
  echo $script;





?>
