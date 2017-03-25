<!DOCTYPE html>
<html lang="en">
     <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <!-- Meta, title, CSS, favicons, etc. -->
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Ford | Vinayk Ford</title>
          <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
	  <!-- Bootstrap -->
	  <link href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <!-- Font Awesome -->
	  <link href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	      <!-- Switchery -->
    <link href="<?php echo base_url();?>assets/js/switchery/dist/switchery.min.css" rel="stylesheet">
        
	  <!-- bootstrap-daterangepicker -->
	  <link href="<?php echo base_url();?>assets/css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	 
	  <!-- Custom Theme Style -->
	  <link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">
	  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	  <link href="<?php echo base_url();?>assets/css/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
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
    <script src="<?php echo base_url();?>assets/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/datepicker/js/bootstrap-datepicker.min.js"></script>
   
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/js/bootstrap.min.js"></script><!--
   
-->    <script src="<?php echo base_url();?>assets/js/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="<?php echo base_url();?>assets/js/switchery/dist/switchery.min.js"></script>
     <!--
-->    <script src="<?php echo base_url();?>assets/js/nprogress/nprogress.js"></script>

   
   <!--
     bootstrap-daterangepicker 
-->    <script src="<?php echo base_url();?>assets/js/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
 <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
 
 <!-- Datatables-->
        <script src="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/dataTables.scroller.min.js"></script>
     </head>

     <body class="nav-md">
     <div class="pageloader"></div>
     <div class="container body">
	       <div class="main_container">
		    <div class="col-md-3 left_col">
			 <div class="left_col scroll-view">
			      <div class="navbar nav_title" style="border: 0;">
				   <a href="<?php echo base_url();?>" class="site_title"> <span>Vinayak Ford</span></a>
			      </div>

			      <div class="clearfix"></div>

			  
                              <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>"/>