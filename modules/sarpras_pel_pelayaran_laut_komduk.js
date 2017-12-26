$(document).ready(function(){

	$('.sarprasPelPelayaranLaut_provinsi').DataTable();
	$('.sarprasPelPelayaranLaut_subBidang').DataTable();

	Highcharts.chart('containerSarprasPelPelayaranLautKomduk', {
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
	            name: 'Pelabuhan Nusantara',
	            y: 3287
	        }, {
	            name: 'Pelabuhan Pelayaran Rakyat',
	            y: 35,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Pelabuhan Samudera',
	            y: 6,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});