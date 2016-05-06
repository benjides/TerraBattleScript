  var #stamina <?php echo $stamina ?>

  var #etime <?php echo ceil($time) ?>

  var #tloops 0
  var #ttime 0


  :start
    #tloops = (#stamina*300)/(300-#etime)
    toast Estimated execution loops : #tloops
    sleep 2000
    #ttime = (#tloops*#etime)/60
    toast Estimated execution time : #ttime minutes



    :stageselection
      //Select Stage
      touchDown 0 <?php echo ceil($width/2) ?> <?php echo ceil($height*(1215/1920)) ?>

      sleep 60
      touchUp 0
      sleep 1000

      //Start Battle
      touchDown 0 <?php echo ceil($width/4) ?> <?php echo ceil($height*(55/64)) ?>

      sleep 60
      touchUp 0
      sleep 5000

      //Skip Button
      touchDown 0 <?php echo ceil($width*(160/1080)) ?> <?php echo ceil($height*(70/1920)) ?>

      sleep 60
      touchUp 0
      sleep 800

      sleep <?php echo $sleepstageselection ?>

      :stage1
        sleep 200
        touchDown 0 275 1315
        sleep 500
        touchMove 0 275 1500
        sleep 150
        touchMove 0 815 1500
        sleep 150
        touchMove 0 815 1315
        sleep 150
        touchMove 0 635 1315
        sleep 150
        touchMove 0 635 1680
        sleep 150
        touchMove 0 980 1680
        sleep 150
        touchMove 0 980 1500
        sleep 150
        touchMove 0 815 1500
        sleep 150
        touchMove 0 815 780
        sleep 150
        touchMove 0 980 780
        sleep 150
        sleep 200
        touchUp 0
        sleep <?php echo $sleepbattle ?>


      :stage2
        sleep 200
        touchDown 0 980 780
        sleep 500
        touchMove 0 815 1315
        sleep 150
        touchMove 0 815 1500
        sleep 150
        touchMove 0 980 1500
        sleep 150
        touchMove 0 980 1680
        sleep 150
        touchMove 0 635 1680
        sleep 150
        touchMove 0 635 1500
        sleep 150
        touchMove 0 980 1500
        sleep 150
        touchMove 0 980 1680
        sleep 150
        touchMove 0 450 1680
        sleep 150
        touchMove 0 450 1500
        sleep 150
        touchMove 0 980 1500
        sleep 150
        touchMove 0 980 600
        sleep 150
        touchMove 0 450 600
        sleep 150
        touchMove 0 450 780
        sleep 150
        sleep 200
        touchUp 0
        sleep <?php echo $sleepbattle ?>


      :stage3
        sleep 200
        touchDown 0 450 780
        sleep 500
        touchMove 0 100 780
        sleep 150
        touchMove 0 100 1315
        sleep 150
        touchMove 0 450 1315
        sleep 150
        touchMove 0 450 1145
        sleep 150
        touchMove 0 100 1145
        sleep 150
        touchMove 0 100 1315
        sleep 150
        touchMove 0 270 1315
        sleep 150
        touchMove 0 100 1500
        sleep 150
        touchMove 0 100 1315
        sleep 150
        touchMove 0 980 1315
        sleep 150
        touchMove 0 980 1500
        sleep 150
        sleep 200
        touchUp 0
        sleep <?php echo $sleepbattle ?>

      :stage4
        sleep 200
        touchDown 0 980 1500
        sleep 500
        touchMove 0 980 1680
        sleep 150
        touchMove 0 270 1680
        sleep 150
        touchMove 0 270 1500
        sleep 150
        touchMove 0 100 1500
        sleep 150
        touchMove 0 100 600
        sleep 150
        touchMove 0 100 600
        sleep 150
        touchMove 0 270 600
        sleep 150
        sleep 200
        touchUp 0
        sleep <?php echo $sleepbattle ?>

      :stage5
        sleep 200
        touchDown 0 100 600
        sleep 500
        touchMove 0 100 430
        sleep 150
        touchDown 1 270 430
        sleep 150
        touchMove 0 980 430
        sleep 150
        touchMove 1 980 430
        sleep 150
        touchMove 0 980 1500
        sleep 150
        touchMove 1 980 1500
        sleep 150
        sleep 200
        touchUp 0
        touchUp 1
        sleep <?php echo $sleepbattle ?>




      //Accept Everything
      sleep 1500
      #loops = 15
      :accept
        touchDown 0 <?php echo ceil($width*950/1080) ?> <?php echo ceil($height*120/1920) ?>

        sleep 200
        touchUp 0
        sleep 700
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
