@extends('layouts.master')

@section('title', 'Skill Boost 1-1')

@section('content')

  <div class="page-header">
    <h1>1-1 Skill Boost Script</h1>
  </div>
  <form class="form-horizontal" action="{{url('make/1-1')}}" method="POST">
    <fieldset>

      <input type="hidden" name="cost" value="1">
      <input type="hidden" name="stageposition" value="320">
      <input type="hidden" name="time" value="1250">
      <input type="hidden" name="timeloop" value="1000">


      <!-- Screen Dimensions -->
      @include('components.screen')

      <!-- Battle Loops -->
      @include('components.loops' , ['loops' => 65])

      <!-- Sleep Time -->
      @include('components.sleeplazy',['sleepselection' => 7000 , 'sleepcleared' => 7000 ])

      <!-- Initial Stamina -->
      @include('components.stamina')

      <!-- End Action -->
      @include('components.response')

      <!-- Filename-->
      @include('components.filename',['filename' => 'SBS.1-1'])

      <!-- Submit-->
      @include('components.submit')

    </fieldset>

  </form>
@endsection
