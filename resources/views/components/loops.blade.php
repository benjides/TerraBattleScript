
<div class="bs-docs-section" id="battle-loops-section">
  <h3 id="battle-loops" class="page-header">Battle Loops</h3>
  <p class="lead">Specify the number of loops until the script is finished.</p>
  <div class="row">
    <div class="col-xs-12">
      <label for="loops">Loops</label>
      <input id="loops" value="{{$loops}}" name="loops" class="form-control" type="number" min="1">
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
