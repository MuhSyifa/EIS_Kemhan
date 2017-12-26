$(document).ready(function(){

	$('.sarprasPelKapalLaut_provinsi').DataTable();
	$('.sarprasPelKapalLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasPelKapalLautKomduk', {
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
	            name: 'Kapal Penumpang',
	            y: 114
	        }, {
	            name: 'Kapal Penyeberangan',
	            y: 37,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Kapal Barang',
	            y: 21,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});