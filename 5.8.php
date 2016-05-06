<?php
  include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Lvl Script</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>5.8 LVL Script</h1>
      </div>
      <form class="form-horizontal" action="compiler/make-5.8.php" method="GET">
        <fieldset>

          <!-- Screen Dimensions -->
          <div class="bs-docs-section" id="screen-dimensions-section">
            <h3 id="screen-dimensions" class="page-header">Screen Dimensions</h3>
            <p class="lead">By now screen dimensions are restricted to 1080x1980. Come back soon to check for news.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-width">Width</label>
                <input id="input-width" value="1080" name="input-width" disabled class="form-control" type="number" min="1">
              </div>
              <div class="col-xs-6">
                <label for="input-height">Height</label>
                <input id="input-height" value="1920" name="input-height" disabled class="form-control" type="number" min="1">
              </div>
            </div>
            <div class="bs-callout bs-callout-info">
              <h4>Screen Size</h4>
              <p>If you are not sure about your device screen size you can get the values doing a quick search.</p>
            </div>
          </div>

          <!-- Sleep Time -->
          <div class="bs-docs-section" id="sleep-time-section">
            <h3 id="sleep-time" class="page-header">Sleep Time</h3>
            <p class="lead">Introduce the time the Script must wait after the Stage is selected, after each battle and after the stage is cleared specified in Seconds.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-sleep-selection">Time after Stage Selection</label>
                <div class="input-group">
                  <input id="input-sleep-selection" value="7" name="input-sleep-selection" class="form-control" type="number" min="1">
                  <div class="input-group-addon"> S</div>
                </div>
                Loading screen after between the stage is selected and monsters appearing.
              </div>
              <div class="col-xs-6">
                <label for="input-sleep-battle">Time after each Battle</label>
                <div class="input-group">
                  <input id="input-sleep-battle" value="20" name="input-sleep-battle" class="form-control" type="number" min="1">
                  <div class="input-group-addon"> S</div>
                </div>
                Counting skill activation , monster death and change battle animations.
              </div>
              <div class="col-xs-12">
                <br>
                <label for="input-sleep-cleared">Time after each Stage</label>
                <div class="input-group">
                  <input id="input-sleep-cleared" value="10" name="input-sleep-cleared" class="form-control" type="number" min="1">
                  <div class="input-group-addon"> S</div>
                </div>
                Loading screen after the stage is cleared. Bare in mind a poor internet connection might result in a increse of this value.
              </div>
            </div>
            <div class="bs-callout bs-callout-danger">
              <h4>Reducing Sleep time</h4>
              <p>
                Reducing this value will result in a lesser Execution Time but maybe the Script will not be able to work properly.
                Otherwise a higher value will result in a higher Execution time but the certainty of the Script to work.
                Change it according to an estimated value of your screen loading time and skill activation animations time in presence of your data connection.
              </p>
            </div>
          </div>

          <!-- Initial Stamina -->
          <div class="bs-docs-section" id="initial-stamina-section">
            <h3 id="initial-stamina" class="page-header">Inital Stamina</h3>
            <p class="lead">Specify the amount of stamina until the end of the script.</p>
            <div class="row">
              <div class="col-xs-12">
                <label for="input-stamina">Stamina</label>
                <input id="input-stamina" value="113" name="input-stamina" class="form-control" type="number" min="1" max="113">
              </div>
            </div>
            <div class="bs-callout bs-callout-info">
              <h4>Stamina Info</h4>
              <p>This value can be easily changed after with any file editor in order to have sessions of less duration.</p>
            </div>
          </div>

          <!-- End Action -->
          <div class="bs-docs-section" id="end-action-section">
            <h3 id="sleep-time" class="page-header">Finish Response</h3>
            <p class="lead">Specify what the script must do once all the stamina is consumed.</p>
            <div class="row">
              <div class="col-xs-6">
                <div class="radio">
                  <label>
                    <input type="radio" name="response-radio" value="0" >
                    Do nothing
                  </label>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="radio">
                  <label>
                    <input type="radio" name="response-radio" value="1" checked>
                    Some Action
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="response[]" value="0" />Vibrate
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="response[]" value="1" />Beep
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="response[]" value="2" />Close Terra Battle
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="response[]" value="3" checked="checked" />ScreenLock
                  </label>
                </div>

              </div>
            </div>
          </div>

          <!-- Filename-->
          <div class="bs-docs-section" id="filename-section">
            <h3 id="filename" class="page-header">Filename</h3>
            <p class="lead">The desired file name. This won`t affect on nothing</p>
            <div class="row">
              <div class="col-xs-12">
                <label for="input-filename">Flename</label>
                <div class="input-group">
                  <input id="input-filename" value="LVL-5.8" name="input-filename" class="form-control" type="text">
                  <div class="input-group-addon">.txt</div>
                </div>
              </div>
            </div>
          </div>


          <div class="bs-customize-download">
            <button type="submit" id="btn-compile" class="btn btn-block btn-lg btn-outline">
              Generate Script
            </button>
          </div>
        </fieldset>

      </form>
    </div>



    <?php
      include('includes/footer.php');
    ?>

  </body>
</html>
