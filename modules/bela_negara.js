$(document).ready(function(){

	$('.bela_negara').DataTable();

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
	        name: 'Jenis Kelamin',
	        colorByPoint: true,
	        data: [{
	            name: 'Laki-laki',
	            y: parseInt($('#data_laki2').html())
	        }, {
	            name: 'Perempuan',
	            y: parseInt($('#data_pr').html()),
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});