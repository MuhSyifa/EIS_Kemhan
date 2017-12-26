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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link href="<?php echo base_url(); ?>template/assets/css/minimal.css" rel="stylesheet">
</head>

<body class="bg-1">
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


          <div class="inside-block">
            <a href="<?php echo base_url(''); ?>home">
                <img src="<?php echo base_url(); ?>images/logo-kemhan.png" style="width: 50%;" alt class="logo">  
            </a>
            
            <h1><strong>Lab</strong> Simulasi</h1>
            <h3>Siber Pothan Ke Daerah</h3>

            <form id="form-signin" method="post" action="<?php echo base_url(''); ?>login/do_login">
              <section>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
              </section>
              <section class="log-in">
                <a href="<?php echo base_url(''); ?>home" class="btn btn-slategray">Back To Home</a>
                <input type="submit" name="submit" class="btn btn-greensea" value="Log In">
                <!-- <button class="btn btn-greensea">Log In</button> -->
              </section>
            </form>
          </div>


        </div>
        <!-- /Page content -->  
      </div>
    </div>
    <!-- Wrap all page content end -->
  </body>

<!-- Mirrored from tattek.sk/minimal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Aug 2014 15:12:59 GMT -->
</html>
      