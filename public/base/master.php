<?php
  ob_start();
?>
var #stamina {{$stamina}}
var #etime {{$time}}

var #tloops 0
var #ttime 0

:start
  #tloops = ((120*{{$cost}}*#stamina)/(120*{{$cost}}-#etime))/{{$cost}}
  toast Estimated execution loops : #tloops
  sleep 2000
  #ttime = (#tloops*#etime)/60
  toast Estimated execution time : #ttime minutes

  :stageselection
    //Select Stage
    touchDown 0 540 {{$stageposition}}
    sleep 60
    touchUp 0
    sleep 800
    //Start Battle
    touchDown 0 270 1650
    sleep 60
    touchUp 0
    sleep 4000
    //Skip Button
    touchDown 0 160 70
    sleep 60
    touchUp 0
    sleep 800
    sleep {{$sleepselection}}

    <?php
      include $stage.'.txt';
    ?>

    //Accept Everything
    sleep 1500
    #loops = 15
    :accept
      touchDown 0 950 120
      sleep 200
      touchUp 0
      sleep 600
      #loops = #loops - 1
      if #loops != 0
        goto :accept
      endif
      //Time = (200+600)*15 = 12000

  #tloops = #tloops - 1
  toast Remaining loops : #tloops
  sleep {{$sleepcleared}}

  if #tloops != 0
    goto :stageselection
  endif

  //End of Script
  toast Ran out of stamina.
  {{$action}}
:end
<?php
  return ob_get_clean();
?>
