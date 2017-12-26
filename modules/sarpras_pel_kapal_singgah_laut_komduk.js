$(document).ready(function(){

	$('.sarprasPelKapalSinggahLaut_provinsi').DataTable();
	$('.sarprasPelKapalSinggahLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasPelKapalSinggahLautKomduk', {
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
	            name: 'Pelabuhan Laut',
	            y: 405
	        }, {
	            name: 'Pelabuhan Pantai',
	            y: 8,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});