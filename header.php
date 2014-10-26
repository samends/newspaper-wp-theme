<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<?php $current_url=get_stylesheet_directory_uri();?>
<?php $site_url=site_url();?>
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
            <a href="<?php echo site_url(); ?>"><img class="DC-logo col-xs-6 col-sm-6 col-md-4" src="<?php echo $current_url; ?>/img/TDC-Logo.jpeg" alt="DC-icon"></a>
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
            <div class="header-navbar-collapse collapse navbar-collapse dc-navbar" id="bs-example-navbar-collapse-1">
              <span class="navbar-desktop">
                <ul nobar="true" selected="0" class="nav navbar-nav">
                  <li  class="home"><a  href="<?php echo site_url(); ?>">Home</a></li>
                  <li class="technology"><a href="<?php echo $site_url.'/technology';?>">Technology</a></li>
                  <li class="sports"><a href="<?php echo $site_url.'/sports';?>">Sports</a></li>
                  <li class="arts"><a href="<?php echo $site_url.'/arts';?>">Arts</a></li>
                  <li class="local-business"><a href="<?php echo $site_url.'/local-business';?>">Local Business</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $site_url.'/advertising-information/';?>">Advertising Information</a></li>
                            <li><a href="<?php echo $site_url.'/contact-us';?>">Contact Us</a></li>
                      </ul>
                  </li>
                </ul>
              </span>
              <ul class="nav navbar-nav navbar-mobile">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Technology</a></li>
                <li class=""><a href="#">Sports</a></li>
                <li><a href="#">Arts</a></li>
                <li class=""><a href="#">Local Business</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo $site_url.'/advertising-information/';?>">Advertising Information</a></li>
                          <li><a href="<?php echo $site_url.'/contact-us';?>">Contact Us</a></li>
                    </ul>
                </li>
              </ul>
              <a href="https://www.facebook.com/thedailycampus"><img src="<?php echo $current_url; ?>/img/facebook-icon.png" class="social-media-icons facebook-icon"></a>
              <a href="https://twitter.com/the_dailycampus"><img src="<?php echo $current_url; ?>/img/twitter-icon.png" class="social-media-icons twitter-icon"></a>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- end header -->
