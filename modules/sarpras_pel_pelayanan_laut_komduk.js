$(document).ready(function(){

	$('.sarprasPelPelayananLaut_provinsi').DataTable();
	$('.sarprasPelPelayananLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasPelPelayananLautKomduk', {
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
	            name: 'Pelabuhan Umum',
	            y: 2222
	        }, {
	            name: 'Pelabuhan Khusus',
	            y: 2,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});