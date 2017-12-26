$(document).ready(function(){

	$('.sdm_provinsi').DataTable();
	$('.sdm_subBidang').DataTable();

	Highcharts.chart('containerSdmKomduk', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: ''
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
	            }
	        }
	    },
	    series: [{
	        name: 'Sub Bidang',
	        colorByPoint: true,
	        data: [{
	            name: 'Warga Lainnya',
	            y: 5065531
	        }, {
	            name: 'Tenaga Ahli',
	            y: 0,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Garda Bangsa',
	            y: 0,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});