$(document).ready(function(){

	$('.tekindhan').DataTable();

	Highcharts.chart('container', {
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
	        name: 'Kategori Perusahaan',
	        colorByPoint: true,
	        data: [{
	            name: 'BUMN',
	            y: parseInt($('#data_bumn').html())
	        }, {
	            name: 'BUMS',
	            y: parseInt($('#data_bums').html()),
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});