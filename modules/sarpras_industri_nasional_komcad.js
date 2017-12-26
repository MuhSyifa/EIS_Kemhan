$(document).ready(function(){

	$('.sarprasIndustriNasional_provinsi').DataTable();
	$('.sarprasIndustriNasional_subBidang').DataTable();

	Highcharts.chart('containerSarprasIndustriNasionalKomduk', {
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
	            name: 'MAKANAN',
	            y: 5863
	        }, {
	            name: 'MINUMAN',
	            y: 360,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Lainnya',
	            y: 17.419
	        }]
	    }]
	});

});