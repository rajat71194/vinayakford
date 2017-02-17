<!DOCTYPE html>
<html lang="en">
     <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <!-- Meta, title, CSS, favicons, etc. -->
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Ford | Vinayk Ford</title>

	  <!-- Bootstrap -->
	  <link href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <!-- Font Awesome -->
	  <link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <!-- NProgress -->
	  <link href="<?php echo base_url();?>assets/css/nprogress/nprogress.css" rel="stylesheet">
	  <!-- iCheck -->
	  <link href="<?php echo base_url();?>assets/css/iCheck/skins/flat/green.css" rel="stylesheet">
	  <!-- bootstrap-progressbar -->
	  <link href="<?php echo base_url();?>assets/css/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	      <!-- Switchery -->
    <link href="<?php echo base_url();?>assets/js/switchery/dist/switchery.min.css" rel="stylesheet">
          <!-- JQVMap -->
	  <link href="<?php echo base_url();?>assets/css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	  <!-- bootstrap-daterangepicker -->
	  <link href="<?php echo base_url();?>assets/css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	  <!-- Custom Theme Style -->
	  <link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">
	  <!--Add CSS From Controller-->  
	  <?php
	  if (isset($style_to_load)) :
	       foreach ($style_to_load as $css):
		    ?>
	  	  <link href="<?php echo base_url($css); ?>" rel="stylesheet"/>
		    <?php
	       endforeach;
	  endif;
	  ?> 
                  
                   <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/js/bootstrap.min.js"></script><!--
     FastClick 
-->    <script src="<?php echo base_url();?>assets/js/fastclick/lib/fastclick.js"></script><!--
        Custom Theme Scripts 
    
-->    <script src="<?php echo base_url();?>assets/js/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="<?php echo base_url();?>assets/js/switchery/dist/switchery.min.js"></script>
     <!--
-->    <script src="<?php echo base_url();?>assets/js/nprogress/nprogress.js"></script>
<!--     Chart.js 
-->    <script src="<?php echo base_url();?>assets/js/chartjs/Chart.min.js"></script><!--
     gauge.js 
-->    <script src="<?php echo base_url();?>assets/js/gauge.js/dist/gauge.min.js"></script><!--
     bootstrap-progressbar 
-->    <script src="<?php echo base_url();?>assets/js/bootstrap-progressbar/bootstrap-progressbar.min.js"></script><!--
     iCheck 
-->    <script src="<?php echo base_url();?>assets/js/iCheck/icheck.min.js"></script><!--
     Skycons 
-->    <script src="<?php echo base_url();?>assets/js/skycons/skycons.js"></script><!--
    
     Flot 
-->    <script src="<?php echo base_url();?>assets/js/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/js/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/js/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/js/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/js/Flot/jquery.flot.resize.js"></script>
<!--     Flot plugins 
-->    <script src="<?php echo base_url();?>assets/js/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/js/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/flot.curvedlines/curvedLines.js"></script><!--
     DateJS 
-->    <script src="<?php echo base_url();?>assets/js/DateJS/build/date.js"></script><!--
     JQVMap 
-->    <script src="<?php echo base_url();?>assets/js/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/js/jqvmap/examples/js/jquery.vmap.sampledata.js"></script><!--
     bootstrap-daterangepicker 
-->    <script src="<?php echo base_url();?>assets/js/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
 <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
 
     </head>

     <body class="nav-md">
	  <div class="container body">
	       <div class="main_container">
		    <div class="col-md-3 left_col">
			 <div class="left_col scroll-view">
			      <div class="navbar nav_title" style="border: 0;">
				   <a href="<?php echo base_url();?>" class="site_title"> <span>Vinayak Ford</span></a>
			      </div>

			      <div class="clearfix"></div>

			      <!-- menu profile quick info -->
			      <div class="profile">
				   <div class="profile_pic">
					<img src="<?php echo base_url();?>assets/img/img.jpg" alt="..." class="img-circle profile_img">
				   </div>
				   <div class="profile_info">
					<span>Welcome,</span>
					<h2>John Doe</h2>
				   </div>
			      </div>
			      <!-- /menu profile quick info -->

			      <br />
