<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-pie-chart" style="line-height: 48px;padding-left: 2px;"></i> Administrator - Modul Users</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li class="active">Users</li>
            </ol>
        </div>
    </div>
    <!-- /page header -->
          
    <!-- content main container -->
    <div class="main">
        

        <!-- row -->
        <div class="row">

              
            <!-- col 12 -->
            <div class="col-md-12">
                
                <!-- tile -->
               	<section class="tile">

					<!-- tile header -->
                  	<div class="tile-header">
                    	<div class="controls">
	                      	<a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
	                      	<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
	                      	<a href="#" class="remove"><i class="fa fa-times"></i></a>
	                    </div><br>
	                    <div class="col-md-12" align="right" style="margin-left: -87px;">
	                		<div class="btn-group margin-bottom-20">
			                    <button type="button" class="btn btn-default">
			                        Tambah
			                    </button>
			                </div>    	
	                    </div>
	                </div>
                  	<!-- /tile header -->

	                <!-- tile body -->
	                <div class="tile-body">
		                <table class="table table-hover users" style="width: 100%; font-size:13px" id="users">
	                      <thead>
	                        <tr>
	                          <th>No</th>
	                          <th>Name</th>
	                          <th>Username</th>
	                          <th>Level</th>
	                          <th>Password</th>
	                          <th>Aksi</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                      	<?php
	                      		if($data){
	                      			$no=1;
	                      			foreach ($data as $value) {
	                      	?>
	                        <tr>
	                          <td><?php echo $no++; ?></td>
	                          <td><?php echo $value->name; ?></td>
	                          <td><?php echo $value->username; ?></td>
	                          <td><?php echo $value->level; ?></td>
	                          <td><?php echo $value->n_password; ?></td>
	                          <td>
	                          		<a href="#">Edit</a>
	                          		<a href="#">Delete</a>
	                          </td>
	                        </tr>
	                        <?php
				                    }
				                }
			                ?>

	                      </tbody>
	                    </table>
					</div>
                  	<!-- /tile body -->
                
                </section>
                <!-- /tile -->
              
            </div>
		</div>
            
    </div>
    <!-- /content container -->
</div>