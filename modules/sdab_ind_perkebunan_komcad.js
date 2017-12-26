$(document).ready(function(){

	$('.sdabIndPerkebunan_provinsi').DataTable();
	$('.sdabIndPerkebunan_subBidang').DataTable();

	Highcharts.chart('containerSdabIndPerkebunanKomduk', {
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
	            name: 'KARET',
	            y: 500614.40
	        }, {
	            name: 'KELAPA DALAM',
	            y: 330191.80,
	            sliced: true,
	            selected: true
	        },{
	            name: 'KELAPA SAWIT',
	            y: 2490.00
	        }]
	    }]
	});

});