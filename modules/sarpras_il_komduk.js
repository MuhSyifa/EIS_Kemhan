$(document).ready(function(){

	$('.sarprasIndustriLaut_provinsi').DataTable();
	$('.sarprasIndustriLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasIndustriLautKomduk', {
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
	            name: 'Galangan',
	            y: 63
	        }, {
	            name: 'Dok',
	            y: 19,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});