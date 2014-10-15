<?php /*
	Template Name:Cover Page
*/

?>
<?php
/* Variables */
$current_url=get_stylesheet_directory_uri();
?>
<head>
<link rel="import" href="bower_components/polymer-ui-card/polymer-ui-card.html">
<link rel="import" href="components/paper-tabs/paper-tabs.html">
<link rel="import" href="components/paper-shadow/paper-shadow.html">
<link rel="stylesheet" type="text/css" href="<?php echo $current_url.'/stylesheets/screen.css'?>">
<?php get_header(); ?>
</head>
<body>
<polymer-ui-card>
<div class="row-fluid homepage-row1">
	<div class="span3">
	<img src="wp-content/themes/daily-campus/img/DC-icon.jpeg" alt="DC-icon">
	</div>
</polymer-ui-card>
</div>
</body>
<?php get_footer(); ?>
