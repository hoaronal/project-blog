<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 28/07/2018
 * Time: 16:05
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Quang Hoa">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $page_title?></title>
	  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	  <!-- include the site stylesheet -->
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/fancybox.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/all.css">
	  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic%7cRoboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7cOpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
	  <?php echo $header;?>
	  <?php echo $slider;?>
	  <main id="main">
		  <section class="container container-block">
	  		<?php echo $content;?>
		  </section>
	  </main>
	  <?php echo $footer;?>
  </div>


  <!-- include jQuery -->
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery.main.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery.datepicker.js"></script>
  <script type="text/javascript">
	  if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
		  var msViewportStyle = document.createElement('style')
		  msViewportStyle.appendChild(
			  document.createTextNode(
				  '@-ms-viewport{width:auto !important}'
			  )
		  )
		  document.querySelector('head').appendChild(msViewportStyle)
	  }
  </script>
  </body>
</html>
