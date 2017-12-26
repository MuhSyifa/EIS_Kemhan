<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-pie-chart" style="line-height: 48px;padding-left: 2px;"></i> Laporan Statistik & Chart Veteran Per-Triwulan</h2>
            

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
                    	<h1><strong>Statistik</strong> Veteran Per-Triwulan</h1>
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
		                <table class="table table-hover veteran" style="width: 100%; font-size:13px" id="datatable-keytable">
	                      <thead>
	                        <tr>
	                          <th>No</th>
	                          <th>Nama Babin</th>
	                          <th>I</th>
	                          <th>II</th>
	                          <th>III</th>
	                          <th>IV</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                      	<?php
	                      		if($list){
	                      			$no=1;
	                      			foreach ($list as $value) {
	                      	?>
	                        <tr>
	                          <td><?php echo $no++; ?></td>
	                          <td><?php echo $value->namababin; ?></td>
	                          <td><?php echo get_triwulan($value->babin, 01,03, $tahun) ?></td>
	                          <td><?php echo get_triwulan($value->babin, 04,06, $tahun) ?></td>
	                          <td><?php echo get_triwulan($value->babin, 07,09, $tahun) ?></td>
	                          <td><?php echo get_triwulan($value->babin, 10,12, $tahun) ?></td>
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
	                	<h1><strong>Chart</strong> Veteran</h1>
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		<div id="container_triwulan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					</div>
	        	</section>
        	</div>  
        </div>


        <div class="row">
        	<!-- col 12 -->
          	<div class="col-md-6">
	          	<section class="tile">

					<!-- tile header -->
	              	<div class="tile-header">
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		<div id="pie3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					</div>
	        	</section>
        	</div>
        	<div class="col-md-6">
	          	<section class="tile">

					<!-- tile header -->
	              	<div class="tile-header">
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		<div id="pie4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					</div>
	        	</section>
        	</div>  
        </div>


        <div class="row">
        	<!-- col 12 -->
          	<div class="col-md-6">
	          	<section class="tile">

					<!-- tile header -->
	              	<div class="tile-header">
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		<div id="pie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					</div>
	        	</section>
        	</div>
        	<div class="col-md-6">
	          	<section class="tile">

					<!-- tile header -->
	              	<div class="tile-header">
		                <div class="controls">
		                  <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
		                  <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
		                  <a href="#" class="remove"><i class="fa fa-times"></i></a>
		                </div>
		            </div>
	              	<!-- /tile header -->

	              	<!-- tile body -->
	              	<div class="tile-body">
	              		<div id="pie2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					</div>
	        	</section>
        	</div>  
        </div>

            
    </div>
    <!-- /content container -->
</div>

<script src="<?php echo base_url(); ?>template/assets/js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	//CHART PIE I
	Highcharts.chart('pie', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'PIE REKAPITULASI PENGESAHAN VETERAN TRIWULAN KE-I PADA TAHUN <?php echo $tahun;?>'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            },
	            // showInLegend: true
	        }
	    },
	    series: [{
	        name: 'Babin',
	        colorByPoint: true,

	        data: [
	          <?php foreach ($list as $value) { ?>
	          {
	            name: '<?php echo $value->namababin;?>',
	            y: <?php echo get_triwulan($value->babin, 01,03, $tahun); ?>
	          },
	          <?php } ?>
	        ]
	    }]
	});

	//CHART PIE II
	Highcharts.chart('pie2', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'PIE REKAPITULASI PENGESAHAN VETERAN TRIWULAN KE-2 PADA TAHUN <?php echo $tahun;?>'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            },
	            // showInLegend: true
	        }
	    },
	    series: [{
	        name: 'Babin',
	        colorByPoint: true,

	        data: [
	          <?php foreach ($list as $value) { ?>
	          {
	            name: '<?php echo $value->namababin;?>',
	            y: <?php echo get_triwulan($value->babin, 04,06, $tahun); ?>
	          },
	          <?php } ?>
	        ]
	    }]
	}); 

	//CHART PIE III
	Highcharts.chart('pie3', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'PIE REKAPITULASI PENGESAHAN VETERAN TRIWULAN KE-3 PADA TAHUN <?php echo $tahun;?>'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            },
	            // showInLegend: true
	        }
	    },
	    series: [{
	        name: 'Babin',
	        colorByPoint: true,

	        data: [
	          <?php foreach ($list as $value) { ?>
	          {
	            name: '<?php echo $value->namababin;?>',
	            y: <?php echo get_triwulan($value->babin, 07,09, $tahun); ?>
	          },
	          <?php } ?>
	        ]
	    }]
	}); 

	//CHART PIE IV
	Highcharts.chart('pie4', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'PIE REKAPITULASI PENGESAHAN VETERAN TRIWULAN KE-4 PADA TAHUN <?php echo $tahun;?>'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            },
	            // showInLegend: true
	        }
	    },
	    series: [{
	        name: 'Babin',
	        colorByPoint: true,

	        data: [
	          <?php foreach ($list as $value) { ?>
	          {
	            name: '<?php echo $value->namababin;?>',
	            y: <?php echo get_triwulan($value->babin, 10,12, $tahun); ?>
	          },
	          <?php } ?>
	        ]
	    }]
	}); 
});
</script>
