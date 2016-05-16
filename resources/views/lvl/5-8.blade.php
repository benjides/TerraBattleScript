@extends('layouts.master')

@section('title', 'Lvl 5-8')

@section('content')
  <div class="page-header">
    <h1>5-8 LVL Script</h1>
  </div>
  <form class="form-horizontal" action="{{url('make/5-8')}}" method="POST">
    <fieldset>

      <input type="hidden" name="cost" value="1">
      <input type="hidden" name="stageposition" value="1215">
      <input type="hidden" name="time" value="10350">
      <input type="hidden" name="battles" value="5">

      <!-- Screen Dimensions -->
      @include('components.screen')

      <!-- Sleep Time -->
      @include('components.sleep' , ['sleepselection' => 7000 , 'sleepbattle' => 20000 , 'sleepcleared' => 12000] )

      <!-- Initial Stamina -->
      @include('components.stamina')

      <!-- End Action -->
      @include('components.response')

      <!-- Filename-->
      @include('components.filename',['filename' => 'LVL-5.8'])

      <!-- Submit-->
      @include('components.submit')

    </fieldset>

  </form>
@endsection
