@extends('layouts.master')

@section('title', 'Animata Eggs - Kraken kino II')

@section('content')
  <div class="page-header">
    <h1>Animata Eggs - Kraken Kino II</h1>
  </div>
  <form class="form-horizontal" action="{{url('make/eggs-2')}}" method="POST">
    <fieldset>

      <input type="hidden" name="cost" value="1">
      <input type="hidden" name="stageposition" value="750">
      <input type="hidden" name="time" value="8800">
      <input type="hidden" name="battles" value="1">

      <!-- Screen Dimensions -->
      @include('components.screen')

      <!-- Sleep Time -->
      @include('components.sleep' , ['sleepselection' => 7000 , 'sleepbattle' => 22000 , 'sleepcleared' => 10000] )

      <!-- Initial Stamina -->
      @include('components.stamina')

      <!-- End Action -->
      @include('components.response')

      <!-- Filename-->
      @include('components.filename',['filename' => 'AE-2'])

      <!-- Submit-->
      @include('components.submit')

    </fieldset>

  </form>

@endsection
