<?php
  $filename = $_GET['input-filename'].'.txt';
  header('Content-type: text/plain');
  header('Content-disposition: attachment; filename='.$filename.'');





  $width = $_GET['input-width'];
  $height = $_GET['input-height'];
  $stamina = $_GET['input-stamina'];
  $sleepstage = 25000;
  $sleepstageselection = 5000;
  $stagecleared = 10000;

  $time = 140;

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
