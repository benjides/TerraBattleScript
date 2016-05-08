<?php

  use Illuminate\Http\Request;
  use App\Compiler;

  $app->get('/', function () use ($app) {
      return view('skillboost.1-1');
  });
  $app->get('{type}/{stage}', function ($type,$stage) {
      $view = $type.'.'.$stage;
      return view($view);
  });
  $app->post('make/{stage}', function ($stage) {
      $request = Request::capture();
      $compiler = new Compiler($stage);
      $compiler->addSources($request->all());
      responser($compiler->compile(), $request->filename);
  });


  function responser($filecontents,$filename){
    header('Content-type: text/plain');
    header('Content-disposition: attachment; filename='.$filename.'.txt');
    echo $filecontents;
  }
