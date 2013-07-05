<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FurrySkeleton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo CSS_URL;?>bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo CSS_URL;?>bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo IMAGE_URL;?>favicon.png" apple-touch-icon-144-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo IMAGE_URL;?>favicon.ico">
  </head>

  <body>

    <div id="furryNavbar" class="nav navbar navbar-fixed-top ">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo BASE_URL;?>"><img src="<?php echo IMAGE_URL;?>FurrySkeleton-horizontal.png" style="height:17px" alt="Furry Skeleton"> Furry Skeleton</a>
          <div id="navVar" class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#whatisit">What is it?</a></li>
              <li><a href="#features">Features</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="?logout">Log Out</a></li>

            </ul>
            <div class="pull-right">

            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container" data-spy="scroll" data-target="#furryNavbar" data-offset="40">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" id="whatisit">
        <h1>Hello, Developer!</h1>
        <p>This is a framework for starting a quick Web App PHP+MySQL development. It is based on the wonderfulness of Twitter's <a href="http://twitter.github.com/bootstrap">Bootstrap</a> extended by <a href="http://jasny.github.io/bootstrap">Jasny</a> and other open source libraries.</p>
        <div class="text-center">
          <img src="<?php echo IMAGE_URL;?>FurrySkeleton.png" width="200">
        </div>
        <p><a href="https://github.com/sajhu/FurrySkeleton" class="btn btn-primary btn-large">Watch this at Github &raquo;</a><a href="http://development.santiagorojas.co/FurrySkeleton" class="btn btn-primary btn-large pull-right">See Docs & More &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row" id="features">
        <div class="span4">
          <h2><i class="iconic-layers-alt"></i> MVC Framework</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2><i class=" iconic-bolt"></i> Super Fast Start</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2><i class=" iconic-cog"></i> Bunch of Utilities</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
      <div class="row">
        <div class="span4">
          <h2><i class=" iconic-key-stroke"></i> Security from it's Roots</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2><i class=" iconic-fork"></i> Open Source</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2><i class=" iconic-book-alt2"></i> Easy Documentation</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
       <div class="row">
        <div class="span4">
          <h2><i class="iconic-loop"></i> Always getting Better</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2><i class="iconic-brush"></i> Template System</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2><i class=" iconic-lightbulb"></i> Easy Documentation</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
  
      <hr>

      <footer>
        <p>Open Source &copy; Developed by <a href="http://santiagorojas.co">Santiago Rojas</a>.</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap-datepicker.js"></script>

  </body>
</html>
