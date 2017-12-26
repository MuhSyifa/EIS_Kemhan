<!DOCTYPE html>
<html>
<head>
    <title>
        <?php if ($title)
        { 
            echo $title; 
        }
        else
        { 
            echo 'Default Title'; 
        }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>images/logo-dephan.png" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>template/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>template/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>template/assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/chosen/css/chosen-bootstrap.css">
    <!-- MAP -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/css/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/js/vendor/no-ui-slider/css/jquery.nouislider.min.css">

    <!-- DATATABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <link href="<?php echo base_url(); ?>template/assets/css/minimal.css" rel="stylesheet">

    <style type="text/css">
      /*table {
          table-layout:fixed;
      }

      .div-table-content {
        height:250px;
        overflow-y:auto;
      }*/
    </style>

  </head>
  <body class="solid-bg-1">

    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top collapsed" role="navigation" id="navbar">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="<?php echo base_url() ?>dashboard">
              <center>
                  <strong>LAB SIMULASI </strong>
                  <br>Siber Pothan ke Daerah    
              </center>
            </a>
            <div class="sidebar-collapse">
              <a href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
                        
            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            <!-- Search -->
            <div class="search" id="main-search">
              <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
            </div>
            <!-- Search end -->

            <!-- Quick Actions -->
            <?php $this->load->view('shared/navbar.php'); ?>
            <!-- /Quick Actions -->



            <!-- Sidebar -->
            <?php $this->load->view('shared/sidebar.php'); ?>
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
        




        
        <!-- Page content -->
        <?php $this->load->view($content); ?>
        <!-- Page content end -->




        <!-- Rightbar -->
            <?php //$this->load->view('shared/rightbar.php'); ?>
        <!-- Rightbar end -->
        






      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->



    <section class="videocontent" id="video"></section>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>template/assets/js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/flot/jquery.flot.time.min.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/rickshaw/raphael-min.js"></script> 
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/morris/morris.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/summernote/summernote.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>template/assets/js/minimal.min.js"></script>

    <!-- MAP -->
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/jquery-jvectormap-1.2.2.min.js"></script>        
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/gdp-data.js"></script>                           
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-world-mill-en.js"></script>    
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-us-aea-en.js"></script>      
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-de-merc-en.js"></script>       
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-fr-merc-en.js"></script>       
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-es-merc-en.js"></script>       
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/mall-map.js"></script>                           
    <script src="<?php echo base_url(); ?>template/assets/js/vendor/jvectormaps/addons/jquery-jvectormap-us-lcc-en.js"></script>



    <!-- DATATABLE -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- <script src="https://code.highcharts.com/modules/data.js"></script> -->
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    <!-- Module -->
    <script src="<?php echo base_url('modules/'.$modules.'.js'); ?>" type="text/javascript"></script>

  
  </body>
</html>
      