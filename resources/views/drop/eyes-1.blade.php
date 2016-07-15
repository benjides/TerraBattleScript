@extends('layouts.master')

@section('title', 'Animata Eyes - Tiamat Kino I')

@section('content')
  <div class="page-header">
    <h1>Animata Eyes - Tiamat Kino I</h1>
  </div>
  <form class="form-horizontal" action="{{url('make/eyes-1')}}" method="POST">
    <fieldset>

      <input type="hidden" name="cost" value="2">
      <input type="hidden" name="stageposition" value="550">
      <input type="hidden" name="time" value="4200">
      <input type="hidden" name="battles" value="1">

      <!-- Screen Dimensions -->
      @include('components.screen')

      <!-- Sleep Time -->
      @include('components.sleep' , ['sleepselection' => 10000 , 'sleepbattle' => 35000 , 'sleepcleared' => 10000] )

      <!-- Initial Stamina -->
      @include('components.stamina')

      <!-- End Action -->
      @include('components.response')

      <!-- Filename-->
      @include('components.filename',['filename' => 'AEYES-1'])

      <!-- Submit-->
      @include('components.submit')

    </fieldset>

  </form>

@endsection
