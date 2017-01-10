<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Curated Terra Battle Scripts on demand">
    <meta name="author" content="@benjides">
    <meta name="theme-color" content="#212121">

    <title>
      @yield('title') | Terra Battle Scripts
    </title>


    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('/css/custom.css') }}" rel="stylesheet">
    @yield('css')
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body role="document">

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">Terra Battle Scripts</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Skill Boost
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('skillboost/1-1') }}">1.1</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Drop
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('drop/6-8') }}">Metal Tickets (6-8)</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Level
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('lvl/5-8') }}">5-8</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="{{ url('howto') }}">How to use</a></li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    <div class="footer">
      <hr>
      <div class="container">
        <div class="col-xs-6">
          <p>v.2.0.0</p>
        </div>
        <div class="col-xs-6 text-right">
          <p>Created by <a href="https://github.com/benjides/">@benjides</a></p>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    @yield('js')

  </body>
</html>
