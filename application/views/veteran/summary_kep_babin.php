<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-pie-chart" style="line-height: 48px;padding-left: 2px;"></i> Laporan Statistik & Chart Veteran Summary KEP Per-Babin</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li class="active">Veteran</li>
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
                    	<h1><strong>Statistik</strong> Veteran Summary KEP Per-Babin</h1>
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
		                <table class="table table-hover veteranSumKepBabin" style="width: 100%; font-size:13px" id="veteranSumKepBabin">
	                      <thead>
	                        <tr>
	                          <th>No</th>
	                          <th>KEP</th>
	                          <th>Babin</th>
	                          <th>Jumlah Veteran</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                      	<?php
	                      		if($list){
	                      			$no=1;
	                      			foreach ($list as $val) {
	                      	?>
	                        <tr>
	                          <td><?php echo $no++; ?></td>
	                          <td><?php echo trim($val->kep); ?></td>
	                          <td><?php echo trim($val->namababin); ?></td>
	                          <td><?php echo get_kep($val->kode_kep); ?></td>
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

