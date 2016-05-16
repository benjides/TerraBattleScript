@extends('layouts.master')

@section('title', 'Metal Tickets 6-8')

@section('content')
  <div class="page-header">
    <h1>6-8 Metal Ticket Script</h1>
  </div>
  <form class="form-horizontal" action="{{url('make/6-8')}}" method="POST">
    <fieldset>

      <input type="hidden" name="cost" value="7">
      <input type="hidden" name="stageposition" value="1215">
      <input type="hidden" name="time" value="~">
      <input type="hidden" name="battles" value="5">

      <!-- Screen Dimensions -->
      @include('components.screen')

      <!-- Sleep Time -->
      @include('components.sleep' , ['sleepselection' => 7000 , 'sleepbattle' => 18000 , 'sleepcleared' => 10000] )

      <!-- Initial Stamina -->
      @include('components.stamina')

      <!-- End Action -->
      @include('components.response')

      <!-- Filename-->
      @include('components.filename',['filename' => 'MTS-6.8'])

      <!-- Submit-->
      @include('components.submit')

    </fieldset>

  </form>

@endsection
