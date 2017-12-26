$(document).ready(function(){

	$('.sarprasPelPerikananLaut_provinsi').DataTable();
	$('.sarprasPelPerikananLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasPelPerikananLautKomduk', {
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
	            name: 'Pelabuhan Perikanan Nusantara',
	            y: 3844
	        }, {
	            name: 'Pelabuhan Perikanan Pantai',
	            y: 1,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});