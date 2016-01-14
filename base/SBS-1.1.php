  var #stamina <?php echo $stamina ?>

  var #loops <?php echo $loops ?>

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
      touchDown 0 <?php echo ceil($width/2) ?> <?php echo ceil($height/6) ?>

      sleep 60
      touchUp 0
      sleep 800

      touchDown 0 <?php echo ceil($width/4) ?> <?php echo ceil($height*(55/64)) ?>

      sleep 60
      touchUp 0
      sleep <?php echo $stage ?>
      //Move MainCharacter
      touchDown 0 <?php echo ceil($width* 270/1080) ?> <?php echo ceil($height*1140/1920) ?>

      sleep 50
      touchMove 0 <?php echo ceil($width* 630/1080) ?> <?php echo ceil($height*1320/1920) ?>

      sleep 200
      touchUp 0
      sleep 1000


      #loops = <?php echo ceil($loops/2) ?>

      :movloop
        //MoveCorner
        touchDown 0 <?php echo ceil($width* 985/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 50
        touchMove 0 <?php echo ceil($width* 800/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 175
        touchMove 0 <?php echo ceil($width* 985/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 75
        touchUp 0
        sleep 700


        //MoveOtherCorner
        touchDown 0 <?php echo ceil($width* 95/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 50
        touchMove 0 <?php echo ceil($width* 280/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 175
        touchMove 0 <?php echo ceil($width* 95/1080) ?> <?php echo ceil($height*1675/1920) ?>

        sleep 75
        touchUp 0
        sleep 700



        #loops = #loops - 1
        if #loops != 0
           goto :movloop
        endif

      //Accept Everything
      sleep 1000
      #loops = 12
      :accept
        touchDown 0 <?php echo ceil($width*950/1080) ?> <?php echo ceil($height*120/1920) ?>

        sleep 50
        touchUp 0
        sleep 250
        #loops = #loops - 1
        if #loops != 0
           goto :accept
        endif


      #tloops = #tloops - 1
      toast Remaining loops : #tloops
      sleep <?php echo $cleared ?>


      if #tloops != 0
         goto :stageselection
      endif


    //End of Script
    toast Ran out of stamina.
    <?php echo $action ?>

  :end
