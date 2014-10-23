<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<?php $current_url=get_stylesheet_directory_uri(); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="wp-content/themes/daily-campus/platform/platform.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $current_url.'/stylesheets/screen.css'?>">
    <link rel="import" href="wp-content/themes/daily-campus/components/paper-tabs/paper-tabs.html">

    <!-- media-queries.js (fallback) -->
    <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- html5.js -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

  </head>

    <header role="banner">
        <div class="row">
            <img class="DC-logo col-xs-6 col-sm-6 col-md-4" src="wp-content/themes/daily-campus/img/TDC-Logo.jpeg" alt="DC-icon">
        </div>
        <div class="row">
            <div class="blue-row col-md-12"></div>
        </div>
        <nav class="paper-shadow-bottom-z-1 navbar navbar-default" role="navigation">
          <div class="container-header container-fluid">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="header-navbar-collapse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <span class="navbar-desktop">
                <paper-tabs selected="0" class="nav navbar-nav">
                  <paper-tab><a href="#">Home</a></paper-tab>
                  <paper-tab><a href="#">Technology</a></paper-tab>
                  <paper-tab><a href="#">Sports</a></paper-tab>
                  <paper-tab><a href="#">Arts</a></paper-tab>
                  <paper-tab><a href="#">Local Business</a></paper-tab>
                </paper-tabs>
              </span>
              <ul class="nav navbar-nav navbar-mobile">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Technology</a></li>
                <li class=""><a href="#">Sports</a></li>
                <li><a href="#">Arts</a></li>
                <li class=""><a href="#">Local Business</a></li>
                <li class=""><form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form></li>
              </ul>
              <form class="header-search navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- end header -->
