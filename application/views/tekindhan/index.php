<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-pie-chart" style="line-height: 48px;padding-left: 2px;"></i> Statistik & Chart Bela Negara</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li class="active">Teknologi dan Industri Pertahanan</li>
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
                    	<h1><strong>Statistik</strong> Teknologi dan Industri Pertahanan</h1>
                    	<div class="controls">
	                      	<a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
	                      	<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
	                      	<a href="#" class="remove"><i class="fa fa-times"></i></a>
	                    </div>
                  	</div>
                  	<!-- /tile header -->

	                <!-- tile body -->
	                <div class="tile-body">
		                <table class="table table-hover tekindhan" style="width: 100%; font-size:13px" id="tekindhan">
	                      <thead>
	                        <tr>
	                          <th>No</th>
	                          <th>Kategori</th>
	                          <th>Nama Perusahaan</th>
	                          <th>Produksi</th>
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
	                          <td><?php echo $value->ketegori; ?></td>
	                          <td><?php echo $value->nm_perusahaan; ?></td>
	                          <td><?php echo $value->produksi; ?></td>
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


        <div class="row">
        	<!-- col 12 -->
          	<div class="col-md-12">
	          	<section class="tile">

					<!-- tile header -->
	              	<div class="tile-header">
	                	<h1><strong>Chart</strong> Teknologi dan Industri Pertahanan</h1>
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		BUMN : <div id="data_bumn"><?php echo (int) $data_bumn->total; ?></div>
	              		BUMS : <div id="data_bums"><?php echo (int) $data_bums->total; ?></div>
	        			<div class="container" style="width: 100%" id="container"></div>
	        	  	</div>
	        	</section>
        	</div>  
        </div>

            
    </div>
    <!-- /content container -->
</div>