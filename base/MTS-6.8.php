var #stamina <?php echo $stamina ?>

var #etime <?php echo ceil($time) ?>

var #tloops 0
var #ttime 0


:start
  #tloops = (#stamina*2100)/((2100-#etime)*7)
  toast Estimated execution loops : #tloops
  sleep 2000
  #ttime = (#tloops*#etime)/60
  toast Estimated execution time : #ttime minutes



  :stageselection
    //Select Stage
    touchDown 0 <?php echo ceil($width/2) ?> <?php echo ceil($height*(1215/1920)) ?>

    sleep 60
    touchUp 0
    sleep 800

    touchDown 0 <?php echo ceil($width/4) ?> <?php echo ceil($height*(55/64)) ?>

    sleep 60
    touchUp 0
    sleep 4150


    touchDown 0 <?php echo ceil($width*(160/1080)) ?> <?php echo ceil($height*(70/1920)) ?>

    sleep 60
    touchUp 0
    sleep 800
    sleep <?php echo $sleepstageselection ?>

    :stage1
      sleep 200
      touchDown 0 635 600
      sleep 500
      touchMove 0 635 785
      sleep 150
      touchMove 0 270 785
      sleep 150
      touchMove 0 270 600
      sleep 150
      touchMove 0 450 600
      sleep 150
      touchMove 0 450 1320
      sleep 150
      touchMove 0 270 1500
      sleep 150
      sleep 200
      touchUp 0
      sleep <?php echo $sleepbattle ?>


    :stage2
      sleep 200
      touchDown 0 270 1500
      sleep 500
      touchMove 0 270 600
      sleep 150
      touchMove 0 450 600
      sleep 150
      touchMove 0 450 1145
      sleep 150
      touchMove 0 270 1145
      sleep 150
      touchMove 0 270 780
      sleep 150
      touchMove 0 450 780
      sleep 150
      touchMove 0 450 1145
      sleep 150
      touchMove 0 270 1145
      sleep 150
      touchMove 0 270 970
      sleep 150
      touchMove 0 100 1145
      sleep 200
      touchMove 0 100 1320
      sleep 150
      touchMove 0 100 1320
      sleep 150
      touchMove 0 270 1320
      sleep 150
      touchMove 0 270 1145
      sleep 150
      touchMove 0 100 1145
      sleep 150
      touchMove 0 100 1500
      sleep 150
      touchMove 0 270 1500
      sleep 150
      touchMove 0 270 1320
      sleep 150
      touchMove 0 100 1320
      sleep 150
      touchMove 0 100 1500
      sleep 150
      touchMove 0 470 1500
      sleep 150
      sleep 200
      touchUp 0
      sleep <?php echo $sleepbattle ?>


    :stage3
      sleep 200
      touchDown 0 100 1500
      sleep 500
      touchMove 0 100 780
      sleep 150
      touchMove 0 450 780
      sleep 150
      touchMove 0 450 1145
      sleep 150
      touchMove 0 100 1145
      sleep 150
      touchMove 0 100 780
      sleep 150
      touchMove 0 450 780
      sleep 150
      touchMove 0 450 1145
      sleep 150
      touchMove 0 100 1145
      sleep 150
      touchMove 0 100 600
      sleep 150
      touchMove 0 630 600
      sleep 150
      touchMove 0 630 780
      sleep 150
      touchMove 0 450 780
      sleep 150
      touchMove 0 450 600
      sleep 150
      touchMove 0 810 600
      sleep 150
      touchMove 0 810 960
      sleep 150
      touchMove 0 630 780
      sleep 150
      touchMove 0 100 780
      sleep 150
      touchMove 0 100 1500
      sleep 150
      touchMove 0 810 1500
      sleep 150
      sleep 200
      touchUp 0




      sleep <?php echo $sleepbattle ?>


    :stage4
      sleep 200
      touchDown 0 640 960
      sleep 500

      touchMove 0 810 1320
      sleep 150

      touchMove 0 990 1500
      sleep 150

      touchMove 0 810 1500
      sleep 150

      touchMove 0 640 960
      sleep 150

      touchMove 0 990 600
      sleep 150

      sleep 200
      touchUp 0

      sleep <?php echo $sleepstage + 1000 ?>


    :stage5

      sleep 200
      touchDown 0 990 1500
      sleep 500

      touchMove 0 810 780
      sleep 150

      touchMove 0 810 615
      sleep 150

      touchMove 0 990 615
      sleep 150

      touchMove 0 990 430
      sleep 150

      touchMove 0 640 430
      sleep 150

      touchMove 0 640 615
      sleep 150

      touchMove 0 990 615
      sleep 150

      touchMove 0 990 1680
      sleep 150

      touchMove 0 640 1680
      sleep 150

      touchMove 0 640 1500
      sleep 150
      sleep 200
      touchUp 0


      sleep <?php echo $sleepbattle ?>





    //Accept Everything
    sleep 1500
    #loops = 10
    :accept
      touchDown 0 <?php echo ceil($width*950/1080) ?> <?php echo ceil($height*120/1920) ?>

      sleep 200
      touchUp 0
      sleep 1750
      #loops = #loops - 1
      if #loops != 0
         goto :accept
      endif


    #tloops = #tloops - 1
    toast Remaining loops : #tloops
    sleep <?php echo $stagecleared ?>

    if #tloops != 0
       goto :stageselection
    endif


  //End of Script
  toast Ran out of stamina.
  <?php echo $action ?>

:end
