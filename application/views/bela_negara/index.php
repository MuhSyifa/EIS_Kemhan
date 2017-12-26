<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-pie-chart" style="line-height: 48px;padding-left: 2px;"></i> Laporan Statistik & Chart Bela Negara</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li class="active">Bela Negara</li>
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
                    	<h1><strong>Statistik</strong> Bela Negara</h1>
                    	<div class="controls">
	                      	<a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
	                      	<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
	                      	<a href="#" class="remove"><i class="fa fa-times"></i></a>
	                    </div><br>
	                    <div class="col-md-12" align="right" style="margin-left: -87px;">
	                		<div class="btn-group margin-bottom-20">
			                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			                        Cetak <span class="caret"></span>
			                    </button>
			                    <ul class="dropdown-menu" role="menu">
			                        <li><a href="#">PDF</a></li>
			                        <li><a href="#">EXCEL</a></li>
			                    </ul>
		                    </div>    	
	                    </div>
	                </div>
                  	<!-- /tile header -->

	                <!-- tile body -->
	                <div class="tile-body">
		                <table class="table table-hover bela_negara" style="width: 100%; font-size:13px" id="bela_negara">
	                      <thead>
	                        <tr>
	                          <th>No</th>
	                          <th>No KTA</th>
	                          <th>No KTP</th>
	                          <th>Nama Lengkap</th>
	                          <th>Jenis Kelamin</th>
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
	                          <td><?php echo $value->nokta; ?></td>
	                          <td><?php echo $value->noktp; ?></td>
	                          <td><?php echo $value->namalengkap; ?></td>
	                          <td><?php echo $value->jeniskelamin; ?></td>
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
	                	<h1><strong>Chart</strong> Bela Negara</h1>
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		Laki-laki : <div id="data_laki2"><?php echo (int) $data_laki2->total; ?></div>
	              		Perempuan : <div id="data_pr"><?php echo (int) $data_pr->total; ?></div>
	        			<div class="container" style="width: 100%" id="container"></div>
	        	  	</div>
	        	</section>
        	</div>  
        </div>

            
    </div>
    <!-- /content container -->
</div>