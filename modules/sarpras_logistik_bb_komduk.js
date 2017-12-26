$(document).ready(function(){

	$('.sarprasLogistikBBprovinsi').DataTable();
	$('.sarprasLogistikBB_subBidang').DataTable();

	Highcharts.chart('containerSarprasLogistikBBKomduk', {
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
	            name: 'DEPOT BBM Pertamina',
	            y: 34
	        }, {
	            name: 'SPBU',
	            y: 127,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});