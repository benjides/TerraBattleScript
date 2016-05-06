<?php
  include('includes/header.php');
?>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>1.1 Skill Boost Sript</h1>
      </div>
      <form class="form-horizontal" action="compiler/make-1.1.php" method="GET">
        <fieldset>

          <!-- Screen Dimensions -->
          <div class="bs-docs-section" id="screen-dimensions-section">
            <h3 id="screen-dimensions" class="page-header">Screen Dimensions</h3>
            <p class="lead">Introduce the appropiate screen dimension for your device specified in Pixels.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-width">Width</label>
                <input id="input-width" value="1080" name="input-width" class="form-control" type="number" min="1">
              </div>
              <div class="col-xs-6">
                <label for="input-height">Height</label>
                <input id="input-height" value="1920" name="input-height" class="form-control" type="number" min="1">
              </div>
            </div>
            <div class="bs-callout bs-callout-info">
              <h4>Screen Size</h4>
              <p>If you are not sure about your device screen size you can get the values doing a quick search.</p>
            </div>
          </div>

          <!-- Battle Loops -->
          <div class="bs-docs-section" id="battle-loops-section">
            <h3 id="battle-loops" class="page-header">Battle Loops</h3>
            <p class="lead">Specify the number of loops until the script is finished.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-loops">Loops</label>
                <input id="input-loops" value="65" name="input-loops" class="form-control" type="number" min="1">
              </div>
            </div>
            <div class="bs-callout bs-callout-danger">
              <h4>Reducing Battle Loops</h4>
              <p>
                Reducing this value will result in a lesser Execution Time but maybe the Script will not be able to finish the battle.
                Otherwise a higher value will result in a higher Execution time but the certainty of the Script to finish.
                Measure this is mind after after doing any changes. (Recommended value : 65)</p>
            </div>
          </div>

          <!-- Sleep Time -->
          <div class="bs-docs-section" id="sleep-time-section">
            <h3 id="sleep-time" class="page-header">Sleep Time</h3>
            <p class="lead">Introduce the time the Script must wait after the Stage is selected and after the stage is cleared specified in Seconds.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-sleep-selection">Time after Stage Selection</label>
                <div class="input-group">
                  <input id="input-sleep-selection" value="7" name="input-sleep-selection" class="form-control" type="number" min="1">
                  <div class="input-group-addon"> S</div>
                </div>
              </div>
              <div class="col-xs-6">
                <label for="input-sleep-cleared">Time after Stage Cleared</label>
                <div class="input-group">
                  <input id="input-sleep-cleared" value="7" name="input-sleep-cleared" class="form-control" type="number" min="1">
                  <div class="input-group-addon"> S</div>
                </div>
              </div>
            </div>
            <div class="bs-callout bs-callout-danger">
              <h4>Reducing Sleep time</h4>
              <p>
                Reducing this value will result in a lesser Execution Time but maybe the Script will not be able to start again.
                Otherwise a higher value will result in a higher Execution time but the certainty of the Script to finish.
                Change it according to an estimated value of your screen loading time in presence of your data connection.
              </p>
            </div>
          </div>

          <!-- Initial Stamina -->
          <div class="bs-docs-section" id="initial-stamina-section">
            <h3 id="initial-stamina" class="page-header">Inital Stamina</h3>
            <p class="lead">Specify the amount of stamina until the end of the script.</p>
            <div class="row">
              <div class="col-xs-6">
                <label for="input-stamina">Stamina</label>
                <input id="input-stamina" value="113" name="input-stamina" class="form-control" type="number" min="1" max="113">
              </div>
            </div>
            <div class="bs-callout bs-callout-info">
              <h4>Stamina Info</h4>
              <p>This value can be easily changed after in order to have Skill Boosting sessions of less duration.</p>
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
                  <input id="input-filename" value="SBS-1.1" name="input-filename" class="form-control" type="text">
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
