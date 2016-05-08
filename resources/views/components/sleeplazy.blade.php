<div class="bs-docs-section" id="sleep-time-section">
  <h3 id="sleep-time" class="page-header">Sleep Time</h3>
  <p class="lead">Introduce the time the Script must wait after the Stage is selected and after the stage is cleared specified in miliSeconds.</p>
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <label for="sleep-selection">Time after Stage Selection</label>
      <div class="input-group">
        <input id="sleepselection" value="{{$sleepselection}}" name="sleepselection" class="form-control" type="number" min="1">
        <div class="input-group-addon"> mS</div>
      </div>
      Loading screen after the stage is selected and monsters appearing.
    </div>
    <div class="col-xs-12 col-md-6">
      <label for="sleep-cleared">Time after Stage cleared</label>
      <div class="input-group">
        <input id="sleep-cleared" value="{{$sleepcleared}}" name="sleepcleared" class="form-control" type="number" min="1">
        <div class="input-group-addon"> mS</div>
      </div>
      Loading screen after the stage is cleared. Bare in mind a poor internet connection might result in a increse of this value.
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
