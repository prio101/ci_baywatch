<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo $res  ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- Loading Flat UI -->
    <link href="<?php echo $res ; ?>/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo $res ?>/images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="'.<?php echo $res ; ?>.'js/html5shiv.js"></script>
      <script src="'.<?php echo $res ; ?>.'js/respond.min.js"></script>
    <![endif]-->
  </head>
   <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                      <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="/">Bay Watch</a>
                  </div>
                  <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav">           
                      <li><a href="/">Home</a></li>
                      <li><a href="/about">About</a></li>
                      
                      <li><a href="/contact">Contact</a></li>
                    </ul>           
                    <form class="navbar-form navbar-right" action="#" role="search">
                      <div class="form-group">
                        <div class="input-group">
                          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                          <span class="input-group-btn">
                            <button type="submit" class="btn"><span class="fui-search"></span></button>
                          </span>            
                        </div>
                      </div>               
                    </form>
                  </div><!-- /.navbar-collapse -->
                </nav><!-- /navbar -->
            </div><!-- /col -->
        </div><!-- /row -->
        </div>
    <!-- /.container -->
